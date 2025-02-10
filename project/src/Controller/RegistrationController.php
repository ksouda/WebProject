<?php 
// src/Controller/RegistrationController.php

namespace App\Controller; // namespace doit être tout en haut du fichier

use App\Entity\User;
use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

class RegistrationController extends AbstractController
{
    #[Route('/register', name: 'app_register')]
    public function register(
        Request $request, 
        UserPasswordHasherInterface $passwordHasher, 
        EntityManagerInterface $entityManager, 
        TokenStorageInterface $tokenStorage // Injecter TokenStorageInterface
    ): Response
    {
        // Création d'un nouvel utilisateur
        $user = new User();
        // Création du formulaire
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Hachage du mot de passe
            $user->setPassword(
                $passwordHasher->hashPassword(
                    $user,
                    $form->get('password')->getData()
                )
            );

            // Attribution du rôle utilisateur
            $user->setRoles(['ROLE_CLIENT']);

            // Sauvegarde de l'utilisateur dans la base de données
            $entityManager->persist($user);
            $entityManager->flush();

            // Connexion automatique de l'utilisateur après l'inscription
            // Création du token de l'utilisateur
            $token = new UsernamePasswordToken($user, 'main', $user->getRoles());
            
            // Ajout du token à la session
            $tokenStorage->setToken($token);
            
            // Redirection vers la page d'accueil
            return $this->redirectToRoute('app_home');
        }

        // Rendu du formulaire d'inscription
        return $this->render('registration/register.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
