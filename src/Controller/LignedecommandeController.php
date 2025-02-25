<?php

namespace App\Controller;

use App\Entity\Lignedecommande;
use App\Form\LignedecommandeType;
use App\Repository\LignedecommandeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/lignedecommande')]
final class LignedecommandeController extends AbstractController{
    #[Route(name: 'app_lignedecommande_index', methods: ['GET'])]
    public function index(LignedecommandeRepository $lignedecommandeRepository): Response
    {
        return $this->render('lignedecommande/index.html.twig', [
            'lignedecommandes' => $lignedecommandeRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_lignedecommande_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $lignedecommande = new Lignedecommande();
        $form = $this->createForm(LignedecommandeType::class, $lignedecommande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($lignedecommande);
            $entityManager->flush();

            return $this->redirectToRoute('app_lignedecommande_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('lignedecommande/new.html.twig', [
            'lignedecommande' => $lignedecommande,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_lignedecommande_show', methods: ['GET'])]
    public function show(Lignedecommande $lignedecommande): Response
    {
        return $this->render('lignedecommande/show.html.twig', [
            'lignedecommande' => $lignedecommande,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_lignedecommande_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Lignedecommande $lignedecommande, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(LignedecommandeType::class, $lignedecommande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_lignedecommande_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('lignedecommande/edit.html.twig', [
            'lignedecommande' => $lignedecommande,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_lignedecommande_delete', methods: ['POST'])]
    public function delete(Request $request, Lignedecommande $lignedecommande, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$lignedecommande->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($lignedecommande);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_lignedecommande_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/panier/modifier/{id}', name: 'modifier_quantite', methods: ['POST'])]
    public function modifierQuantite(Request $request, Lignedecommande $ligne, EntityManagerInterface $entityManager): Response
    {
        $nouvelleQuantite = $request->request->getInt('quantite');

        if ($nouvelleQuantite <= 0) {
            return $this->json(['success' => false, 'message' => 'La quantité doit être supérieure à zéro.'], 400);
        }

        $ligne->setQuantite($nouvelleQuantite);
        $entityManager->flush();

        return $this->json([
            'success' => true,
            'message' => 'Quantité mise à jour avec succès.',
            'total' => $ligne->getPrixUnitaire() * $ligne->getQuantite(),
            'quantite' => $ligne->getQuantite()
        ]);
    }


}
