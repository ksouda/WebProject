<?php

namespace App\Controller;

use App\Entity\Promotion;
use App\Form\PromotionType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PromotionController extends AbstractController
{
    #[Route('/promotion', name: 'app_promotion')]
    public function index(): Response
    {
        return $this->render('backoff/promotion/promotion.html.twig', [
            'controller_name' => 'PromotionController',
        ]);
    }

    #[Route('/promotion/ajout', name: 'promotion_ajout')]
    public function ajout(Request $request, EntityManagerInterface $entityManager): Response
    {
        $promotion = new Promotion();
        $form = $this->createForm(PromotionType::class, $promotion);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($promotion);
            $entityManager->flush();

            return $this->redirectToRoute('promotion_liste');
        }

        return $this->render('promotion/ajout.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/promotion/liste', name: 'promotion_liste')]
    public function liste(EntityManagerInterface $entityManager): Response
    {
        $promotions = $entityManager->getRepository(Promotion::class)->findAll();

        return $this->render('promotion/liste.html.twig', [
            'promotions' => $promotions,
        ]);
    }

    #[Route('/promotion/modifier/{id}', name: 'promotion_modifier')]
    public function modifier(Request $request, Promotion $promotion, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PromotionType::class, $promotion);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('promotion_liste');
        }

        return $this->render('promotion/modifier.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/promotion/supprimer/{id}', name: 'promotion_supprimer')]
    public function supprimer(Promotion $promotion, EntityManagerInterface $entityManager): Response
    {
        $entityManager->remove($promotion);
        $entityManager->flush();

        return $this->redirectToRoute('promotion_liste');
    }
}
