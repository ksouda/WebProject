<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\MateriauxRepository; // Ajout du repository pour récupérer les matériaux

final class IndexController extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
    public function index(MateriauxRepository $materiauxRepository): Response
    {
        // Récupérer tous les matériaux depuis la base de données
        $materiauxes = $materiauxRepository->findAll();

        return $this->render('FrontOffice/HomePage/index.html.twig', [
            'controller_name' => 'IndexController',
            'materiauxes' => $materiauxes, // Passer les matériaux au template
        ]);
    }
}
