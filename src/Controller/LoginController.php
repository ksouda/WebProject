<?php
// // src/Controller/LoginController.php
// namespace App\Controller;

// use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
// use Symfony\Component\HttpFoundation\Request;
// use Symfony\Component\HttpFoundation\Response;
// use Symfony\Component\Routing\Annotation\Route;
// use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
// use Symfony\Component\Security\Core\Exception\AuthenticationException;
// use Symfony\Component\Security\Http\Util\TargetPathTrait;

// class LoginController extends AbstractController
// {
//     use TargetPathTrait;

//     #[Route('/login', name: 'app_login')]
//     public function login(AuthenticationUtils $authenticationUtils): Response
//     {
//         // Récupérer l'erreur de connexion s'il y en a une
//         $error = $authenticationUtils->getLastAuthenticationError();

//         // Dernier nom d'utilisateur saisi par l'utilisateur
//         $lastUsername = $authenticationUtils->getLastUsername();

//         return $this->render('login/index.html.twig', [
//             'last_username' => $lastUsername,
//             'error' => $error,
//         ]);
//     }

//     #[Route('/logout', name: 'app_logout')]
//     public function logout(): void
//     {
    
//     }

//     /**
//      * Rediriger l'utilisateur après une connexion réussie.
//      */
    
//     public function onAuthenticationSuccess(Request $request, $user): Response
//     {
//         $roles = $user->getRoles(); // Récupérer les rôles
//         $roles = $this->getUser()->getRoles();
//         dd($roles); // Arrête l'exécution et affiche les rôles
//         // Si l'utilisateur est un client, rediriger vers app_home
//         if (in_array('ROLE_CLIENT', $roles, true)) {
//             return $this->redirectToRoute('app_home');
//         }

//         // Sinon (admin, artisan, etc.), rediriger vers app_admin
//         return $this->redirectToRoute('app_admin');
//     }
// }
// src/Controller/LoginController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class LoginController extends AbstractController
{
    #[Route('/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // Récupérer l'erreur de connexion s'il y en a une
        $error = $authenticationUtils->getLastAuthenticationError();

        // Dernier nom d'utilisateur saisi par l'utilisateur
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('login/index.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }

    #[Route('/logout', name: 'app_logout')]
    public function logout(): void
    {
        // Symfony gère automatiquement la déconnexion
    }
}
