<?php 
// src/Controller/AdminController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    #[Route('/admin', name: 'app_admin')]
    public function index(): Response
    {
            // Debug: afficher les rôles de l'utilisateur connecté
      
            // Vérifie si l'utilisateur a le rôle ROLE_ADMIN
        if ($this->isGranted('ROLE_ADMIN')) {
            return $this->render('admin/baseback.html.twig');
        }
        
        // Vérifie si l'utilisateur a le rôle ROLE_ARTISAN
        if ($this->isGranted('ROLE_ARTISAN')) {
            return $this->render('artisan/baseback.html.twig');
        }

        // Si l'utilisateur n'a aucun des rôles nécessaires, accès refusé
        throw $this->createAccessDeniedException('Accès interdit');
    }

   
    
}
