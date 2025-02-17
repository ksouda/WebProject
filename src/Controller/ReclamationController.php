<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Entity\User;
use App\Form\ReclamationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/reclamation')]
class ReclamationController extends AbstractController
{
    // front
    #[Route('/ajouter', name: 'app_reclamation_ajouter')]
    public function ajouter(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reclamation = new Reclamation();

        $reclamation->setStatut('En attente');

        $form = $this->createForm(ReclamationType::class, $reclamation, [
            'attr' => ['novalidate' => 'novalidate'], // Désactiver la validation HTML5
        ]);
        $form->handleRequest($request);     
            
    if ($form->isSubmitted() && $form->isValid()) {
        // Récupérer l'utilisateur avec ID = 1
        $user = $entityManager->getRepository(User::class)->find(1);

        if (!$user) {
            throw $this->createNotFoundException('Utilisateur par défaut non trouvé.');
        }

        // Assigner l'utilisateur par défaut (ID = 1) à la réclamation
        $reclamation->setUser($user);
            
        $entityManager->persist($reclamation);
        $entityManager->flush(); 

        $this->addFlash('success', 'Réclamation ajoutée avec succès.');

        return $this->redirectToRoute('app_reclamation_liste_client');
        }

        return $this->render('frontoffice/HomePage/client/reclamation/ajouter.html.twig', [
            'form' => $form->createView(),
        ]);
    }
// front
  


    // back
    #[Route('/admin/liste', name: 'app_reclamation_liste_admin')]
public function liste(EntityManagerInterface $entityManager): Response
{
    $reclamations = $entityManager->getRepository(Reclamation::class)->findAll();

    return $this->render('admin/reclamation/liste.html.twig', [
        'reclamations' => $reclamations,
    ]);
}

// front
#[Route('/modifier/{id}', name: 'app_reclamation_modifier')]
public function modifier(Request $request, EntityManagerInterface $entityManager, Reclamation $reclamation): Response
{
    $form = $this->createForm(ReclamationType::class, $reclamation, [
        'attr' => ['novalidate' => 'novalidate'], // Désactiver la validation HTML5
    ]);
    $form->handleRequest($request);

    if ($form->isSubmitted()) { 
        if ($form->isValid()) { 
            $entityManager->flush(); 
            $this->addFlash('success', 'Réclamation modifiée avec succès.');
            return $this->redirectToRoute('app_reclamation_consulter_client', [
                'id' => $reclamation->getId()
            ]);
        } else {
            
            $this->addFlash('error', 'Veuillez vérifier les informations saisies.'); 
        }
    }

    return $this->render('frontoffice/HomePage/client/reclamation/modifier.html.twig', [
        'form' => $form->createView(),
        'reclamation' => $reclamation,
    ]);
}
// front

#[Route('/supprimer/{id}', name: 'app_reclamation_supprimer', methods: ['POST'])]
public function supprimer(EntityManagerInterface $entityManager, Reclamation $reclamation): Response
{
    $entityManager->remove($reclamation);
    $entityManager->flush();

    $this->addFlash('success', 'Réclamation supprimée avec succès.');
    return $this->redirectToRoute('app_reclamation_liste_client');
}
// back

#[Route('/modifier-statut/{id}', name: 'app_reclamation_modifier_statut', methods: ['POST'])]
public function modifierStatut(Reclamation $reclamation, Request $request, EntityManagerInterface $entityManager): Response
{
    $nouveauStatut = $request->request->get('statut');
    if (in_array($nouveauStatut, ['En attente', 'En cours', 'Répondue'])) {
        $reclamation->setStatut($nouveauStatut);
        $entityManager->flush();
        $this->addFlash('success', 'Statut mis à jour avec succès.');
    } else {
        $this->addFlash('error', 'Statut invalide.');
    }
    return $this->redirectToRoute('app_reclamation_liste_admin');
}
// back
#[Route('/admin/{id}/consulter', name: 'app_reclamation_consulter_admin', methods: ['GET'])]
public function consulterAdmin(Reclamation $reclamation, EntityManagerInterface $entityManager): Response
{
    $reponseExiste = $reclamation->getReponse() !== null;

    return $this->render('admin/reclamation/consulter.html.twig', [
        'reclamation' => $reclamation,
        'reponseExiste' => $reponseExiste,
    ]);
}
// front
#[Route('/client/{id}/consulter', name: 'app_reclamation_consulter_client', methods: ['GET'])]
public function consulterClient(Reclamation $reclamation, EntityManagerInterface $entityManager): Response
{
    $reponseExiste = $reclamation->getReponse() !== null;

    return $this->render('frontoffice/HomePage/client/reclamation/consulter.html.twig', [
        'reclamation' => $reclamation,
        'reponseExiste' => $reponseExiste,
    ]);
}

}
