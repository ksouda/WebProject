<?php

namespace App\Controller;

use App\Repository\AtelierenligneRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class FrontClientController extends AbstractController
{
    #[Route('/front/client', name: 'app_front_client')]
public function index(AtelierenligneRepository $atelierenligneRepository): Response
{
    // Récupérer tous les ateliers triés par date de cours (les plus proches en premier)
    $ateliers = $atelierenligneRepository->findBy([], ['datecours' => 'ASC']); 

    // Limiter à 3 ateliers (les plus proches)
    $ateliers = array_slice($ateliers, 0, 3);

    return $this->render('frontoffice/front_client/frontclient.html.twig', [
        'controller_name' => 'FrontClientController',
        'ateliers' => $ateliers, // Passer les ateliers à la vue
    ]);
}


    





}
