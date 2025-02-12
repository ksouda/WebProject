<?php

namespace App\Controller;

use App\Entity\Atelierenligne;
use App\Form\AtelierenligneType;
use App\Repository\AtelierenligneRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

final class FrontAtelierController extends AbstractController
{
    #[Route('/front/atelier', name: 'app_front_atelier', methods: ['GET'])]
    public function index(AtelierenligneRepository $atelierenligneRepository): Response
    {
        return $this->render('frontoffice/front_atelier/frontatelier.html.twig', [
            'atelierenlignes' => $atelierenligneRepository->findAll(),
        ]);
    }
   
}
