<?php
// src/Controller/UserController.php

namespace App\Controller;

use App\Entity\User;
use App\Form\EditUserType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/users', name: 'app_users')]
    public function index(
        UserRepository $userRepository, 
        PaginatorInterface $paginator, 
        Request $request
    ): Response
    {
        // Récupérer tous les utilisateurs
        $query = $userRepository->createQueryBuilder('u')->getQuery();

        // Paginer les résultats (5 utilisateurs par page)
        $users = $paginator->paginate(
            $query, // Requête à paginer
            $request->query->getInt('page', 1), // Numéro de page par défaut
            5 // Nombre d'éléments par page
        );

        // Créer un formulaire vide pour éviter l'erreur Twig
        $editForm = $this->createForm(EditUserType::class, new User());

        return $this->render('user/index.html.twig', [
            'users' => $users,
            'editForm' => $editForm->createView(), // Passer le formulaire à la vue
        ]);
    }

    #[Route('/user/{id}/edit', name: 'app_user_edit', methods: ['GET'])]
    public function edit(int $id, UserRepository $userRepository): JsonResponse
    {
        // Récupérer l'utilisateur à modifier
        $user = $userRepository->find($id);
        if (!$user) {
            throw $this->createNotFoundException('Utilisateur non trouvé');
        }

        // Retourner les données de l'utilisateur au format JSON
        return $this->json([
            'email' => $user->getEmail(),
            'nom' => $user->getNom(),
            'prenom' => $user->getPrenom(),
            'roles' => $user->getRoles(),
        ]);
    }

    #[Route('/user/{id}/update', name: 'app_user_update', methods: ['POST'])]
    public function update(
        int $id,
        Request $request,
        UserRepository $userRepository,
        EntityManagerInterface $entityManager
    ): Response
    {
        // Récupérer l'utilisateur à modifier
        $user = $userRepository->find($id);
        if (!$user) {
            throw $this->createNotFoundException('Utilisateur non trouvé');
        }

        // Créer le formulaire de modification
        $form = $this->createForm(EditUserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Enregistrer les modifications dans la base de données
            $entityManager->flush();

            // Ajouter un message flash pour confirmer la mise à jour
            $this->addFlash('success', 'Utilisateur mis à jour avec succès.');

            // Rediriger vers la liste des utilisateurs
            return $this->redirectToRoute('app_users');
        }

        // En cas d'erreur, retourner une réponse JSON avec les erreurs
        return $this->json(['errors' => (string) $form->getErrors(true)], 400);
    }
}
