<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\MateriauxRepository;


final class FrontClientController extends AbstractController
{
    #[Route('/front', name: 'app_front_client')]
    public function index(MateriauxRepository $materiauxRepository): Response
    {   
        // Récupérer tous les matériaux depuis la base de données
        $materiauxes = $materiauxRepository->findAll();

        // Vérifier si les données sont bien récupérées
        if (empty($materiauxes)) {
            dump("Aucun matériau trouvé !"); // Affiche un message dans la barre de debug de Symfony
        }

        // Passer les matériaux à Twig
        return $this->render('FrontOffice/front_client/frontclient.html.twig', [
            'materiauxes' => $materiauxes, 
        ]);
    }
}
