<?php

namespace App\Controller;

use App\Entity\Atelierenligne;
use App\Entity\User;
use App\Form\AtelierenligneType;
use App\Repository\AtelierenligneRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/atelierenligne')]
final class AtelierenligneController extends AbstractController
{
    #[Route('/admin', name: 'app_atelierenligneadmin', methods: ['GET'])]
    public function indexadmin(AtelierenligneRepository $atelierenligneRepository): Response
    {
        return $this->render('admin/atelier/atelieradmin.html.twig', [
            'atelierenlignes' => $atelierenligneRepository->findAll(),
        ]);
    }

    #[Route('', name: 'app_atelierenligne', methods: ['GET'])]
    public function index(AtelierenligneRepository $atelierenligneRepository, Security $security): Response
    {
        $user = $security->getUser(); // Récupérer l'utilisateur connecté

        if (!$user instanceof User) {
            throw $this->createAccessDeniedException('Vous devez être connecté pour voir vos ateliers.');
        }

        $id_user = $user->getId(); // Récupérer l'ID de l'utilisateur connecté

        $atelierenlignes = $atelierenligneRepository->findBy(['id_user' => $id_user]);

        return $this->render('admin/atelier/atelier.html.twig', [
            'atelierenlignes' => $atelierenlignes,
        ]);
    }

    #[Route('/new', name: 'app_atelierenligne_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, Security $security): Response
    {
        $user = $security->getUser();

        if (!$user instanceof User) {
            throw $this->createAccessDeniedException('Vous devez être connecté pour créer un atelier.');
        }

        $atelierenligne = new Atelierenligne();
        $atelierenligne->setIdUser($user);

        $form = $this->createForm(AtelierenligneType::class, $atelierenligne);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($atelierenligne);
            $entityManager->flush();

            return $this->redirectToRoute('app_atelierenligne', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/atelier/new.html.twig', [
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

        return $this->render('admin/atelier/edit.html.twig', [
            'atelierenligne' => $atelierenligne,
            'form' => $form,
        ]);
    }

    #[Route('/admin/{id}', name: 'app_atelierenligne_deleteadmin', methods: ['POST'])]
    public function deleteadmin(Request $request, Atelierenligne $atelierenligne, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('deleteadmin' . $atelierenligne->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($atelierenligne);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_atelierenligneadmin', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}', name: 'app_atelierenligne_delete', methods: ['POST'])]
    public function delete(Request $request, Atelierenligne $atelierenligne, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $atelierenligne->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($atelierenligne);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_atelierenligne', [], Response::HTTP_SEE_OTHER);
    }
}
