<?php

namespace App\Controller;

use App\Entity\Inscriptionatelier;
use App\Entity\AtelierenLigne;
use App\Entity\User;
use App\Repository\InscriptionatelierRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use DateTime;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;




class InscriptionAtelierController extends AbstractController
{
    const id_user = 5; 
    

    #[Route('/atelier/inscription/{id}', name: 'app_inscription_atelier')]
    public function inscrire(int $id, EntityManagerInterface $entityManager, EventDispatcherInterface $dispatcher, MailerInterface $mailer): Response
    {
    // Récupérer l'utilisateur à partir de l'ID défini
    $user = $entityManager->getRepository(User::class)->find(self::id_user);
    if (!$user) {
        throw $this->createNotFoundException('Utilisateur non trouvé.');
    }

    $atelier = $entityManager->getRepository(AtelierEnLigne::class)->find($id);
    if (!$atelier) {
        throw $this->createNotFoundException('Atelier non trouvé.');
    }

    // Vérifier si l'utilisateur est déjà inscrit
    $existingInscription = $entityManager->getRepository(Inscriptionatelier::class)->findOneBy([
        'id_user' => $user, // Remplace 'id_user' par 'idUser'
        'atelier' => $atelier
    ]);

    if ($existingInscription) {
        $this->addFlash('info', 'Vous êtes déjà inscrit à cet atelier.');
        return $this->redirectToRoute('app_inscriptions');
    }

    $inscription = new Inscriptionatelier();
    $inscription->setIdUser($user);
    $inscription->setAtelier($atelier);
    $inscription->setDateinscri(new \DateTime());
    $inscription->setStatut('À venir'); 

    $entityManager->persist($inscription);
    $entityManager->flush();


    $this->addFlash('success', 'Inscription réussie à l\'atelier : ' . $atelier->getTitre());

    $email = (new Email())
    ->from('ton.email@gmail.com')
    ->to($user->getEmail())
    ->subject('Confirmation d\'inscription à l\'atelier')
    ->html(
        '<p>Bonjour ' . $user->getNom() . ',</p>
         <p>Merci de vous être inscrit à l\'atelier : <strong>' . $atelier->getTitre() . '</strong>.</p>
         <p>La session aura lieu le <strong>' . $atelier->getDatecours()->format("d/m/Y") . '</strong> à <strong>' . $atelier->getDatecours()->format("H:i") . '</strong>.</p>
         <p>Nous avons hâte de vous y voir !</p>
         <p>Cordialement,<br> L\'équipe YEDAYETNA</p>'
    );

    $mailer->send($email);
    
    $inscriptionsQuery = $entityManager->getRepository(Inscriptionatelier::class)->createQueryBuilder('i')
        ->leftJoin('i.atelier', 'a') // Jointure avec l'entité Atelier
        ->where('i.id_user = :id_user')
        ->setParameter('id_user', self::id_user)
        ->orderBy('a.datecours', 'DESC') // Tri par datecours en ordre décroissant
        ->getQuery();

    // Exécuter la requête pour obtenir les résultats
    $inscriptions = $inscriptionsQuery->getResult();


    return $this->render('frontoffice/front_atelier/inscription_atelier/inscriptionatelier.html.twig', [
        'inscriptions' =>  $inscriptions,
        'flash_message' => 'Vous êtes inscrit à un nouvel atelier!'
    ]);
}

    #[Route('/inscriptionclient', name: 'app_inscriptions', methods: ['GET'])]
    public function showinscri(InscriptionatelierRepository $inscriptionsatelierRepository, EntityManagerInterface $entityManager): Response
    {
        // Créer une requête QueryBuilder pour récupérer les inscriptions triées par datecours DESC
        $inscriptionsQuery = $inscriptionsatelierRepository->createQueryBuilder('i')
            ->leftJoin('i.atelier', 'a') // Jointure avec l'entité Atelier
            ->where('i.id_user = :id_user')
            ->setParameter('id_user', self::id_user)
            ->orderBy('a.datecours', 'DESC') // Tri par datecours en ordre décroissant
            ->getQuery();

        // Exécuter la requête pour obtenir les résultats
        $inscriptions = $inscriptionsQuery->getResult();

        $today = new DateTime(); // Date actuelle

        foreach ($inscriptions as $inscription) {
            $atelier = $inscription->getAtelier(); // Supposons que l'inscription ait une relation avec un atelier
            $dateCours = $atelier->getDateCours(); // Récupérer la date du cours de l'atelier

            if ($dateCours === null) {
                $inscription->setStatut('Date non définie'); // Gérer le cas où la date n'est pas définie
            } elseif ($dateCours instanceof DateTime) {
                $dateAtelier = $dateCours; // Si c'est déjà un objet DateTime
            } else {
                $dateAtelier = new DateTime($dateCours); // Créer un objet DateTime à partir de la chaîne
            }

            // Comparer les dates et changer le statut
            if ($dateAtelier < $today) {
                $inscription->setStatut('Terminé'); // Atelier déjà terminé
            } elseif ($dateAtelier > $today) {
                $inscription->setStatut('À venir'); // Atelier à venir
            } else {
                $inscription->setStatut('En cours aujourd\'hui'); // Atelier aujourd'hui
            }

            // Persister les modifications dans la base de données
            $entityManager->persist($inscription);
        }

        // Enregistrer toutes les modifications
        $entityManager->flush();

        // Renvoyer les données à la vue pour affichage
        return $this->render('frontoffice/front_atelier/inscription_atelier/inscriptionatelier.html.twig', [
            'inscriptions' => $inscriptions, // Les inscriptions triées sont envoyées à la vue
            ]);
        }

        
        #[Route('/{id}', name: 'app_annulation', methods: ['POST'])]
        public function delete(Request $request, Inscriptionatelier $inscriptionatelier, EntityManagerInterface $entityManager): Response
        {
            if ($this->isCsrfTokenValid('delete'.$inscriptionatelier->getId(), $request->getPayload()->getString('_token'))) {
                $entityManager->remove($inscriptionatelier);
                $entityManager->flush();
            }

            return $this->redirectToRoute('app_inscriptions', [], Response::HTTP_SEE_OTHER);
        }
}




