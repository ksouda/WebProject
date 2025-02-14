<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Form\ProduitType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/produit')]
class ProduitController extends AbstractController
{
    #[Route('', name: 'app_produit')]
    public function index(): Response
    {
        return $this->render('backoff/produit/produit.html.twig', [
            'controller_name' => 'ProduitController',
        ]);
    }

    #[Route('/ajout', name: 'produit_ajout', methods: ['GET', 'POST'])]
    public function ajout(Request $request, EntityManagerInterface $entityManager): Response
    {
        // Crée une nouvelle instance de Produit
        $produit = new Produit();

        // Crée le formulaire
        $form = $this->createForm(ProduitType::class, $produit);

        // Traite la soumission du formulaire
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Persiste le produit en base de données
            $entityManager->persist($produit);
            $entityManager->flush();

            // Ajoute un message flash pour confirmer l'ajout
            $this->addFlash('success', 'Le produit a été ajouté avec succès !');

            // Redirige vers la liste des produits
            return $this->redirectToRoute('produit_liste');
        }

        // Affiche le formulaire d'ajout
        return $this->render('produit/ajout.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/liste', name: 'produit_liste', methods: ['GET'])]
    public function liste(EntityManagerInterface $entityManager): Response
    {
        // Récupère tous les produits depuis la base de données
        $produits = $entityManager->getRepository(Produit::class)->findAll();

        // Affiche la liste des produits
        return $this->render('produit/liste.html.twig', [
            'produits' => $produits,
        ]);
    }

    #[Route('/modifier/{id}', name: 'produit_modifier', methods: ['GET', 'POST'])]
    public function modifier(Request $request, Produit $produit, EntityManagerInterface $entityManager): Response
    {
        // Crée le formulaire de modification
        $form = $this->createForm(ProduitType::class, $produit);

        // Traite la soumission du formulaire
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Met à jour le produit en base de données
            $entityManager->flush();

            // Ajoute un message flash pour confirmer la modification
            $this->addFlash('success', 'Le produit a été modifié avec succès !');

            // Redirige vers la liste des produits
            return $this->redirectToRoute('produit_liste');
        }

        // Affiche le formulaire de modification
        return $this->render('produit/modifier.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/supprimer/{id}', name: 'produit_supprimer', methods: ['POST'])]
    public function supprimer(Request $request, Produit $produit, EntityManagerInterface $entityManager): Response
    {
        // Vérifie le token CSRF pour la sécurité
        if ($this->isCsrfTokenValid('delete' . $produit->getId(), $request->request->get('_token'))) {
            // Supprime le produit de la base de données
            $entityManager->remove($produit);
            $entityManager->flush();

            // Ajoute un message flash pour confirmer la suppression
            $this->addFlash('success', 'Le produit a été supprimé avec succès !');
        }

        // Redirige vers la liste des produits
        return $this->redirectToRoute('produit_liste');
    }
}