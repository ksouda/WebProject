<?php

namespace App\Controller;

use App\Entity\Atelierenligne;
use App\Entity\User;
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
    private const id_user = 1;

    #[Route('/admin', name: 'app_atelierenligneadmin', methods: ['GET'])]
    public function indexadmin(AtelierenligneRepository $atelierenligneRepository): Response
    {
        return $this->render('backoff/atelier/atelieradmin.html.twig', [
            'atelierenlignes' => $atelierenligneRepository->findAll(),
        ]);
    }

    #[Route('', name: 'app_atelierenligne', methods: ['GET'])]
    public function index(AtelierenligneRepository $atelierenligneRepository): Response
    {
        $atelierenlignes = $atelierenligneRepository->findBy(['id_user' => self::id_user]);

        return $this->render('backoff/atelier/atelier.html.twig', [
            'atelierenlignes' => $atelierenlignes,
        ]);
    }

    

    #[Route('/new', name: 'app_atelierenligne_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $atelierenligne = new Atelierenligne();

        $user = $entityManager->getRepository(User::class)->find(self::id_user);

        if ($user) {
            $atelierenligne->setIdUser($user);
        } else {
            $this->addFlash('error', 'Utilisateur non trouvé.');
            return $this->redirectToRoute('app_atelierenligne');
        }
        
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
