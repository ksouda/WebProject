<?php

namespace App\Controller;

use App\Entity\Atelierenligne;
use App\Repository\AtelierenligneRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class FrontAtelierController extends AbstractController
{
    #[Route('/front/atelier', name: 'app_front_atelier', methods: ['GET'])]
    public function index(AtelierenligneRepository $atelierenligneRepository): Response
    {
        // Récupérer la date actuelle
        $today = new \DateTime();

        // Utiliser QueryBuilder pour filtrer les ateliers dont la date de cours est égale ou postérieure à aujourd'hui
        $ateliers = $atelierenligneRepository->createQueryBuilder('a')
            ->where('a.datecours >= :today')
            ->setParameter('today', $today)
            ->getQuery()
            ->getResult();

        return $this->render('FrontOffice/HomePage/front_atelier/frontatelier.html.twig', [
            'atelierenlignes' => $ateliers,
        ]);
    }
}
