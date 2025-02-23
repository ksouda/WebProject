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


    #[Route('/ajouter/{id}', name: 'app_reponse_ajouter')]
    public function ajouter(Reclamation $reclamation, Request $request, EntityManagerInterface $entityManager): Response
    {
        
        if ($reclamation->getReponse()) {
            $this->addFlash('warning', 'Cette réclamation a déjà une réponse.');
            return $this->redirectToRoute('app_reclamation_liste_admin');
        }

        $reponse = new Reponse();
        $reponse->setReclamation($reclamation);

        $form = $this->createForm(ReponseType::class, $reponse, [
            'attr' => ['novalidate' => 'novalidate'], 
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $finale = $form->get('finale')->getData();  // Récupérez l'état de la case à cocher
            $reponse->setFinale($finale); // Mettez à jour le champ finale

            $reclamation->setReponse($reponse);

            $reclamation->updateStatutBasedOnReponse(); //Mettez à jour le statut de la réclamation

            $entityManager->persist($reponse);
            try{
                $entityManager->persist($reclamation);
                $entityManager->flush(); // Flusher à nouveau pour mettre à jour le statut
                //dump("Flush successful!!"); 
                return $this->redirectToRoute('app_reclamation_consulter_admin', ['id' => $reclamation->getId()]);
            } catch (\Exception $e) {
            
                dump("Flush error: " . $e->getMessage()); 
            }
            die;

            $this->addFlash('success', 'Réponse ajoutée avec succès.');
            //return $this->redirectToRoute('app_reclamation_consulter_admin', ['id' => $reclamation->getId()]);
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
            $reclamation->updateStatutBasedOnReponse();
            $entityManager->persist($reclamation);
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
    

    /*
    #[Route('/admin/liste', name: 'app_reponse_liste_admin')]
    public function liste(EntityManagerInterface $entityManager): Response
    {
        $reclamations = $entityManager->getRepository(Reclamation::class)->findAll();
    
        return $this->render('backoff/admin/reclamation/liste.html.twig', [
            'reclamations' => $reclamations,
        ]);
    }*/

}
