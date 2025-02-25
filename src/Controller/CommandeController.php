<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Entity\Lignedecommande;
use App\Entity\Produit;
use App\Form\CommandeType;
use App\Repository\CommandeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Dompdf\Dompdf;
use Knp\Snappy\Pdf;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Twig\Environment;
use Dompdf\Options;  // ✅ Make sure this line is present!

#[Route('/commande')]
final class CommandeController extends AbstractController{
    #[Route('/back', name: 'app_commande_index', methods: ['GET'])]
    public function index(Request $request, CommandeRepository $commandeRepository): Response
    {
        $searchTerm = $request->query->get('search');

        if ($searchTerm) {
            $commandes = $commandeRepository->createQueryBuilder('c')
                ->where('c.statut LIKE :search OR c.adresse_livraison LIKE :search OR c.paiement LIKE :search')
                ->setParameter('search', '%' . $searchTerm . '%')
                ->getQuery()
                ->getResult();

            return $this->json([
                'commandes' => array_map(fn($commande) => [
                    'id' => $commande->getId(),
                    'dateCommande' => $commande->getDateCommande()->format('Y-m-d'),
                    'montantTotal' => $commande->getMontantTotal(),
                    'statut' => $commande->getStatut(),
                    'adresseLivraison' => $commande->getAdresseLivraison(),
                    'paiement' => $commande->getPaiement(),
                ], $commandes),
            ]);
        }

        return $this->render('commande/index.html.twig', [
            'commandes' => $commandeRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_commande_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $commande = new Commande();
        $form = $this->createForm(CommandeType::class, $commande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($commande);
            $entityManager->flush();

            return $this->redirectToRoute('app_commande_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('commande/new.html.twig', [
            'commande' => $commande,
            'form' => $form,
        ]);
    }

    #[Route('/commande/{id}', name: 'app_commande_show', methods: ['GET'])]
    public function show(Commande $commande): Response
    {
        return $this->render('commande/show.html.twig', [
            'commande' => $commande,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_commande_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Commande $commande, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CommandeType::class, $commande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_commande_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('commande/edit.html.twig', [
            'commande' => $commande,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_commande_delete', methods: ['POST'])]
    public function delete(Request $request, Commande $commande, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$commande->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($commande);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_commande_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/panier/ajouter/{id}', name: 'ajouter_panier')]
    public function ajouterAuPanier(Produit $produit, EntityManagerInterface $entityManager, Security $security): Response
    {
        $user = $security->getUser();

        // ✅ 1. Check if the user already has an active order
        $commande = $entityManager->getRepository(Commande::class)->findOneBy([
            'id_user' => $user,
            'statut' => 'En attente' // We only take active carts
        ]);

        if (!$commande) {
            // ✅ 2. Create a new cart (commande)
            $commande = new Commande();
            $commande->setIdUser($user);
            $commande->setStatut('En attente');
            $commande->setDateCommande(new \DateTime());
            $commande->setMontantTotal(0); // Placeholder, will be calculated later
            $commande->setAdresseLivraison('A définir'); // Placeholder for address
            $commande->setPaiement('Non défini'); // Placeholder for payment
            $entityManager->persist($commande);
        }

        // ✅ 3. Check if the product is already in the cart
        $ligne = $entityManager->getRepository(Lignedecommande::class)->findOneBy([
            'id_commande' => $commande,
            'id_produit' => $produit // ✅ We added this field in `Lignedecommande`
        ]);

        if ($ligne) {
            // ✅ 4. If product exists, increase quantity
            $ligne->setQuantite($ligne->getQuantite() + 1);
        } else {
            // ✅ 5. If product does not exist, create a new line
            $ligne = new Lignedecommande();
            $ligne->setIdCommande($commande);
            $ligne->setIdProduit($produit); // ✅ Corrected field
            $ligne->setQuantite(1);
            $ligne->setPrixUnitaire($produit->getPrix());
            $entityManager->persist($ligne);
        }

        // ✅ 6. Save changes in the database
        $entityManager->flush();

        // ✅ 7. Redirect to view the cart
        return $this->redirectToRoute('voir_panier');
    }

    #[Route('/panier', name: 'voir_panier')]
    public function voirPanier(EntityManagerInterface $entityManager, Security $security): Response
    {
        $user = $security->getUser();

        // ✅ 1. Get the user's active cart
        $commande = $entityManager->getRepository(Commande::class)->findOneBy([
            'id_user' => $user,
            'statut' => 'En attente' // We only take active carts
        ]);

        // ✅ 2. If no cart exists, redirect to products
        if (!$commande) {
            $this->addFlash('warning', 'Votre panier est vide.');
            return $this->redirectToRoute('app_produit_index');
        }

        // ✅ 3. Get all products inside the cart (LigneDeCommande)
        $lignes = $entityManager->getRepository(Lignedecommande::class)->findBy([
            'id_commande' => $commande
        ]);

        // ✅ 4. Render the cart page
        return $this->render('panier/index.html.twig', [
            'lignes' => $lignes,
            'commande' => $commande
        ]);
    }
    #[Route('/panier/supprimer/{id}', name: 'supprimer_du_panier')]
    public function supprimerDuPanier(Lignedecommande $ligne, EntityManagerInterface $entityManager): Response
    {
        // ✅ 1. Remove the product from cart
        $entityManager->remove($ligne);
        $entityManager->flush();

        // ✅ 2. Redirect back to the cart
        return $this->redirectToRoute('voir_panier');
    }
    #[Route('/commande/valider', name: 'valider_commande', methods: ['POST'])]
    public function validerCommande(Request $request, EntityManagerInterface $entityManager, Security $security): Response
    {
        $user = $security->getUser();

        // ✅ Find the user's pending order
        $commande = $entityManager->getRepository(Commande::class)->findOneBy([
            'id_user' => $user,
            'statut' => 'En attente'
        ]);

        // ✅ Handle case where no order exists
        if (!$commande) {
            $this->addFlash('warning', 'Aucune commande en attente.');
            return $this->redirectToRoute('app_produit_index');
        }

        // ✅ Fetch form input safely
        $adresse = $request->request->get('adresse');
        $paiement = $request->request->get('paiement');

        if (!$adresse || !$paiement) {
            $this->addFlash('danger', 'Veuillez remplir tous les champs.');
            return $this->redirectToRoute('voir_panier');
        }

        // ✅ Fetch LigneDeCommande manually
        $ligneCommandes = $entityManager->getRepository(Lignedecommande::class)->findBy([
            'id_commande' => $commande
        ]);

        if (!$ligneCommandes) {
            $this->addFlash('danger', 'Aucune ligne de commande trouvée.');
            return $this->redirectToRoute('voir_panier');
        }

        // ✅ Calculate total amount
        $totalAmount = array_reduce($ligneCommandes, function ($total, $ligne) {
            return $total + ($ligne->getQuantite() * $ligne->getPrixUnitaire());
        }, 0);

        // ✅ Update the order
        $commande->setAdresseLivraison($adresse);
        $commande->setPaiement($paiement);
        $commande->setStatut('Confirmé');
        $commande->setMontantTotal($totalAmount);

        $entityManager->flush();

        // ✅ Success message & redirect
        $this->addFlash('success', 'Votre commande a été validée avec succès !');
        return $this->redirectToRoute('confirmation_commande');
    }




    #[Route('/commande/confirmation', name: 'confirmation_commande', methods: ['GET'])]
    public function confirmation(): Response
    {
        return $this->render('commande/confirmation.html.twig');
    }


    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/{id}/pdf', name: 'app_commande_pdf', methods: ['GET'])]
    public function generatePdf(Commande $commande, Environment $twig): Response
    {
        // ✅ Generate the HTML from Twig template
        $html = $twig->render('commande/pdf_template.html.twig', [
            'commande' => $commande
        ]);

        // ✅ PDF options
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        $pdfOptions->set('isHtml5ParserEnabled', true);

        // ✅ Initialize Dompdf
        $dompdf = new Dompdf($pdfOptions);
        $dompdf->loadHtml($html);

        // ✅ Set paper size (A4)
        $dompdf->setPaper('A4', 'portrait');

        // ✅ Render the HTML as PDF
        $dompdf->render();

        // ✅ Stream the generated PDF to the user
        return new Response(
            $dompdf->output(),
            200,
            [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename="commande_' . $commande->getId() . '.pdf"',
            ]
        );
    }

}
