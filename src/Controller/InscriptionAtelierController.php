<?php

namespace App\Controller;

use App\Entity\Inscriptionatelier;
use App\Entity\Atelierenligne;
use App\Entity\User;
use App\Repository\InscriptionatelierRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use DateTime;

class InscriptionAtelierController extends AbstractController
{
    #[Route('/atelier/inscription/{id}', name: 'app_inscription_atelier')]
    public function inscrire(int $id, EntityManagerInterface $entityManager, Security $security): Response
    {
        $today = new DateTime();

        // Récupérer l'utilisateur connecté
        $user = $security->getUser();
        if (!$user instanceof User) {
            throw $this->createAccessDeniedException('Vous devez être connecté pour vous inscrire à un atelier.');
        }

        $atelier = $entityManager->getRepository(Atelierenligne::class)->find($id);
        if (!$atelier) {
            throw $this->createNotFoundException('Atelier non trouvé.');
        }

        // Vérifier si l'utilisateur est déjà inscrit
        $existingInscription = $entityManager->getRepository(Inscriptionatelier::class)->findOneBy([
            'id_user' => $user,
            'atelier' => $atelier
        ]);

        if ($existingInscription) {
            $this->addFlash('info', 'Vous êtes déjà inscrit à cet atelier.');
            return $this->redirectToRoute('app_inscriptions');
        }

        // Créer l'inscription
        $inscription = new Inscriptionatelier();
        $inscription->setIdUser($user);
        $inscription->setAtelier($atelier);
        $inscription->setDateinscri(new DateTime());
        $inscription->setStatut('À venir');
       
        

        $entityManager->persist($inscription);
        $entityManager->flush();

        $inscriptions = $entityManager->getRepository(Inscriptionatelier::class)->findBy(['id_user' => $user]);

        $this->addFlash('success', 'Inscription réussie à l\'atelier : ' . $atelier->getTitre());

        return $this->render('frontoffice/HomePage/front_atelier/inscription_atelier/inscriptionatelier.html.twig', [
            'inscriptions' => $inscriptions,
            'flash_message' => 'Vous êtes inscrit à un nouvel atelier!'
        ]);
    }

    #[Route('/inscriptionclient', name: 'app_inscriptions', methods: ['GET'])]
    public function showinscri(InscriptionatelierRepository $inscriptionsatelierRepository, EntityManagerInterface $entityManager, Security $security): Response
    {
        // Récupérer l'utilisateur connecté
        $user = $security->getUser();
        if (!$user instanceof User) {
            throw $this->createAccessDeniedException('Vous devez être connecté pour voir vos inscriptions.');
        }

        // Récupérer toutes les inscriptions de l'utilisateur
        $inscriptions = $inscriptionsatelierRepository->findBy(['id_user' => $user]);

        $today = new DateTime();

        foreach ($inscriptions as $inscription) {
            $atelier = $inscription->getAtelier();
            $dateCours = $atelier->getDateCours();

            if ($dateCours === null) {
                $inscription->setStatut('Date non définie');
            } elseif ($dateCours instanceof DateTime) {
                $dateAtelier = $dateCours;
            } else {
                $dateAtelier = new DateTime($dateCours);
            }

            // Mettre à jour le statut en fonction de la date
            if ($dateAtelier < $today) {
                $inscription->setStatut('Terminé');
            } elseif ($dateAtelier > $today) {
                $inscription->setStatut('À venir');
            } else {
                $inscription->setStatut('En cours aujourd\'hui');
            }

            $entityManager->persist($inscription);
        }

        $entityManager->flush();

        return $this->render('frontoffice/HomePage/front_atelier/inscription_atelier/inscriptionatelier.html.twig', [
            'inscriptions' => $inscriptions,
        ]);
    }

    #[Route('/annulation/{id}', name: 'app_annulation', methods: ['POST'])]
    public function delete(Request $request, Inscriptionatelier $inscriptionatelier, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $inscriptionatelier->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($inscriptionatelier);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_inscriptions', [], Response::HTTP_SEE_OTHER);
    }
}
