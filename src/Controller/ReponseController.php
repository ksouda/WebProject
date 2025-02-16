<?php

namespace App\Controller;

use App\Entity\Reponse;
use App\Entity\Reclamation;
use App\Form\ReponseType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/reponse')]
class ReponseController extends AbstractController
{
    #[Route('/admin/liste', name: 'app_reponse_liste_admin')]
    public function liste(EntityManagerInterface $entityManager): Response
    {
        $reclamations = $entityManager->getRepository(Reclamation::class)->findAll();
    
        return $this->render('backoff/admin/reclamation/liste.html.twig', [
            'reclamations' => $reclamations,
        ]);
    }


    #[Route('/ajouter/{id}', name: 'app_reponse_ajouter')]
    public function ajouter(Reclamation $reclamation, Request $request, EntityManagerInterface $entityManager): Response
    {
        
        if ($reclamation->getReponse()) {
            $this->addFlash('warning', 'Cette réclamation a déjà une réponse.');
            return $this->redirectToRoute('app_reponse_liste_admin');
        }

        $reponse = new Reponse();
        $reponse->setReclamation($reclamation);

        $form = $this->createForm(ReponseType::class, $reponse, [
            'attr' => ['novalidate' => 'novalidate'], 
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($reponse);
            $entityManager->flush();

            $this->addFlash('success', 'Réponse ajoutée avec succès.');
            return $this->redirectToRoute('app_reclamation_consulter_admin', ['id' => $reclamation->getId()]);
        }

        return $this->render('backoff/admin/reclamation/ajouter.html.twig', [
            'form' => $form->createView(),
            'reclamation' => $reclamation
        ]);
    }


    #[Route('/client/liste', name: 'app_reponse_liste_client')]
    public function listeClient(EntityManagerInterface $entityManager): Response
    {
        // Récupérer toutes les réclamations avec leurs réponses
        $reclamations = $entityManager->getRepository(Reclamation::class)->findAll();

        return $this->render('backoff/admin/reclamation/liste.html.twig', [
            'reclamations' => $reclamations,
        ]);
    }


    #[Route('/modifier/{id}', name: 'app_reponse_modifier')]
    public function modifier(Reponse $reponse, Request $request, EntityManagerInterface $entityManager): Response
    {
        $reclamation = $reponse->getReclamation();
        
        $form = $this->createForm(ReponseType::class, $reponse, [
            'attr' => ['novalidate' => 'novalidate'], 
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush(); 
            $this->addFlash('success', 'Réponse modifiée avec succès.');
            return $this->redirectToRoute('app_reclamation_consulter_admin', [
            'id' => $reclamation->getId()
            ]);
        }

        return $this->render('backoff/admin/reclamation/modifier.html.twig', [
            'form' => $form->createView(),
            'reponse' => $reponse
        ]);
    }
    

}
