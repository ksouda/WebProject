<?php

namespace App\Controller;

use App\Repository\AtelierenligneRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class FrontClientController extends AbstractController
{
    #[Route('/front/client', name: 'app_front_client')]
<<<<<<< HEAD
    public function index(AtelierenligneRepository $atelierenligneRepository): Response
    {
        // Récupérer la date actuelle
        $today = new \DateTime();

        // Utiliser le QueryBuilder pour filtrer les ateliers dont la date de cours est après aujourd'hui
        $ateliers = $atelierenligneRepository->createQueryBuilder('a')
            ->where('a.datecours > :today') // Condition pour les ateliers dont la date de cours est après aujourd'hui
            ->setParameter('today', $today) // Passer la date actuelle en paramètre
            ->orderBy('a.datecours', 'ASC') // Trier par date de cours, du plus proche au plus lointain
            ->getQuery()
            ->getResult();

        // Limiter à 3 ateliers (les plus proches)
        $ateliers = array_slice($ateliers, 0, 3);

        return $this->render('frontoffice/front_client/frontclient.html.twig', [
            'controller_name' => 'FrontClientController',
            'ateliers' => $ateliers, // Passer les ateliers à la vue
        ]);

    }
=======
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
>>>>>>> db2faa75dc452bb17c9b181ae41e9e5ca13006bf


    





}
