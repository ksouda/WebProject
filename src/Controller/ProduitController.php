<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Entity\Lignedecommande;
use App\Entity\Produit;
use App\Form\ProduitType;
use App\Repository\ProduitRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/produit')]
final class ProduitController extends AbstractController
{
    #[Route(name: 'app_produit_index', methods: ['GET'])]
    public function index(ProduitRepository $produitRepository): Response
    {
        $produits = $produitRepository->findAll();

        // Debug: Check if products have a promotion
        foreach ($produits as $produit) {
            dump($produit->getIdPromotion()); // This should not be null for promoted products
        }

        return $this->render('produit/index.html.twig', [
            'produits' => $produits,
        ]);
    }

    #[Route('/back', name: 'app_produit_indexback', methods: ['GET'])]
    public function indexback(Request $request, ProduitRepository $produitRepository): Response
    {
        $searchTerm = $request->query->get('search');

        // If a search term is provided, filter the results
        if ($searchTerm) {
            $produits = $produitRepository->createQueryBuilder('p')
                ->where('p.nom_produit LIKE :search OR p.categorie LIKE :search')
                ->setParameter('search', '%' . $searchTerm . '%')
                ->getQuery()
                ->getResult();

            return $this->json([
                'produits' => array_map(fn($produit) => [
                    'id' => $produit->getId(),
                    'nomProduit' => $produit->getNomProduit(),
                    'categorie' => $produit->getCategorie(),
                    'prix' => $produit->getPrix(),
                    'stock' => $produit->getStock(),
                    'statut' => $produit->getStatut(),
                ], $produits),
            ]);
        }

        return $this->render('produit/indexbackproduit.html.twig', [
            'produits' => $produitRepository->findAll(),
        ]);
    }





    #[Route('/new', name: 'app_produit_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $produit = new Produit();
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form['image']->getData();
            if ($file) {
                // Generate a unique filename
                $fileName = uniqid().'.'.$file->guessExtension();

                // Move the file to the directory where images are stored
                $file->move(
                    $this->getParameter('image_directory'),
                    $fileName
                );

                // ✨ Store the new filename in the entity
                $produit->setImage($fileName);
            }

            $entityManager->persist($produit);
            $entityManager->flush();

            return $this->redirectToRoute('app_produit_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('produit/new.html.twig', [
            'produit' => $produit,
            'form' => $form,
        ]);
    }


    #[Route('/{id}', name: 'app_produit_show', methods: ['GET'])]
    public function show(Produit $produit): Response
    {
        return $this->render('produit/show.html.twig', [
            'produit' => $produit,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_produit_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Produit $produit, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ProduitType::class, $produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Get the newly-uploaded file (if any)
            $file = $form['image']->getData();

            // If a new file was uploaded
            if ($file) {
                $fileName = uniqid().'.'.$file->guessExtension();
                $file->move(
                    $this->getParameter('image_directory'),
                    $fileName
                );

                // Update the entity with the new filename
                $produit->setImage($fileName);
            }

            $entityManager->flush();
            return $this->redirectToRoute('app_produit_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('produit/edit.html.twig', [
            'produit' => $produit,
            'form' => $form,
        ]);
    }


    #[Route('/{id}', name: 'app_produit_delete', methods: ['POST'])]
    public function delete(Request $request, Produit $produit, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$produit->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($produit);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_produit_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/sort/trie', name: 'app_produit_trier', methods: ['GET'])]
    public function trier(Request $request, ProduitRepository $produitRepository): Response
    {
        $sortField = $request->query->get('sort', 'id'); // Default sorting by ID
        $sortOrder = $request->query->get('order', 'asc'); // Default order is ascending

        // ✅ Allow sorting only by 'prix' or 'stock'
        if (!in_array($sortField, ['prix', 'stock'])) {
            $sortField = 'id'; // Fallback to default
        }

        // ✅ Fetch sorted products
        $produits = $produitRepository->createQueryBuilder('p')
            ->orderBy('p.' . $sortField, $sortOrder)
            ->getQuery()
            ->getResult();

        return $this->render('produit/trier_produits.html.twig', [
            'produits' => $produits,
            'sortField' => $sortField,
            'sortOrder' => $sortOrder,
        ]);
    }


}
