<?php

namespace App\Controller;

use App\Entity\Atelierenligne;
use App\Form\AtelierenligneType;
use App\Repository\AtelierenligneRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/atelierenligne')]
final class AtelierenligneController extends AbstractController
{
   

    #[Route(name: 'app_atelierenligne', methods: ['GET'])]
    public function index(AtelierenligneRepository $atelierenligneRepository): Response
    {
        return $this->render('backoff/atelier/atelier.html.twig', [
            'atelierenlignes' => $atelierenligneRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_atelierenligne_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $atelierenligne = new Atelierenligne();
        $form = $this->createForm(AtelierenligneType::class, $atelierenligne);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($atelierenligne);
            $entityManager->flush();

            return $this->redirectToRoute('app_atelierenligne', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('backoff/atelier/new.html.twig', [
            'atelierenligne' => $atelierenligne,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_atelierenligne_show', methods: ['GET'])]
    public function show(Atelierenligne $atelierenligne): Response
    {
        return $this->render('backoff/atelier/show.html.twig', [
            'atelierenligne' => $atelierenligne,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_atelierenligne_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Atelierenligne $atelierenligne, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AtelierenligneType::class, $atelierenligne);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_atelierenligne', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('backoff/atelier/edit.html.twig', [
            'atelierenligne' => $atelierenligne,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_atelierenligne_delete', methods: ['POST'])]
    public function delete(Request $request, Atelierenligne $atelierenligne, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$atelierenligne->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($atelierenligne);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_atelierenligne', [], Response::HTTP_SEE_OTHER);
    }
}
