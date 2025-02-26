<?php

namespace App\Controller;
use App\Entity\Materiaux;
use App\Form\MateriauxType;
use App\Repository\MateriauxRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\MailerInterface;




//a modifier
#[Route('/materiaux')]
final class MateriauxController extends AbstractController
{
        /// Static user ID (si vous travaillez avec un utilisateur spécifique)
private static $userId = 1;

#[Route(name: 'app_materiaux_index', methods: ['GET'])]
public function index(
    MateriauxRepository $materiauxRepository, 
    UserRepository $userRepository, 
    MailerInterface $mailer, 
    EntityManagerInterface $entityManager
): Response 
{
    // Récupérer tous les matériaux
    $materiaux = $materiauxRepository->findAll();

    // Initialiser les tableaux pour les statistiques
    $labels = [];
    $data = [];
    $lowStock = false;
    $lowStockUsers = []; // Stocke les utilisateurs affectés

    // Parcourir les matériaux pour vérifier les seuils de stock
    foreach ($materiaux as $materiel) {
        $labels[] = $materiel->getNomMateriel();
        $data[] = $materiel->getQuantiteStock();

        // Vérifier les seuils pour la notification
        if ($materiel->getQuantiteStock() <= $materiel->getSeuilMin()) {
            $lowStock = true;

            // Utiliser l'ID de l'utilisateur statique pour retrouver l'utilisateur associé
            $user = $userRepository->find(self::$userId); // Recherche de l'utilisateur avec l'ID statique

            dump('Matériel en rupture :', $materiel->getNomMateriel());
            dump('Utilisateur associé :', $user ? $user->getId() : 'Aucun utilisateur');
            dump('Email associé :', $user ? $user->getEmail() : 'Aucun email');

            // Si l'utilisateur a un email, on ajoute cet email à la liste des utilisateurs pour envoyer un mail
            if ($user && $user->getEmail()) {
                // Si un seuil faible est détecté, envoyer l'email
                $lowStockUsers[$user->getEmail()][] = $materiel->getNomMateriel();
            }
        }
    }

    // Si des matériaux sont en rupture de stock, envoyer un e-mail
    if ($lowStock) {
        $this->addFlash('low_stock', '⚠️ Attention : Certains matériaux ont un stock insuffisant.');
        dump('Flash ajouté : Stock insuffisant détecté'); // Tester si le flash fonctionne

        dump('Liste des utilisateurs avec stock insuffisant :', $lowStockUsers); // Déboguer

        // Envoyer des emails aux utilisateurs
        foreach ($lowStockUsers as $email => $materiauxNames) {
            dump("Tentative d'envoi d'email à : " . $email); // Debug avant envoi
            $this->sendLowStockEmail($mailer, $email, $materiauxNames);
        }
    }

    // Rendre la vue avec les données nécessaires
    return $this->render('backoff/materiaux/index.html.twig', [
        'materiauxes' => $materiaux,
        'labels' => $labels,
        'data' => $data,
    ]);
}

private function sendLowStockEmail(MailerInterface $mailer, string $recipientEmail, array $materiauxNames): void
    {
        // Créer l'email
        $email = (new Email())
            ->from('ton.email@gmail.com') // Changez ceci si nécessaire
            ->to($recipientEmail)
            ->subject('⚠️ Alerte stock : Quantité faible de matériaux')
            ->html(
                '<p>Bonjour,</p>
                 <p>Les matériaux suivants sont en rupture de stock : <strong>' . implode(', ', $materiauxNames) . '</strong>.</p>
                 <p>Merci de vérifier le stock et de prendre les mesures nécessaires.</p>
                 <p>Cordialement,<br> L\'équipe YEDAYETNA</p>'
            );

        // Envoyer l'email
        try {
            $mailer->send($email);
            dump('✅ Email envoyé à ' . $recipientEmail);
        } catch (\Exception $e) {
            dump('❌ Erreur lors de l\'envoi de l\'email : ' . $e->getMessage());
        }
    }
    
#[Route('/search', name: 'app_materiaux_search', methods: ['GET'])]
public function search(Request $request, MateriauxRepository $materiauxRepository): JsonResponse
{
    $query = $request->query->get('q', '');

    if (empty($query)) {
        return new JsonResponse([]);
    }

    $materiaux = $materiauxRepository->searchByTerm($query);

    $results = [];

    foreach ($materiaux as $materiel) {
        $results[] = [
            'id' => $materiel->getId(),
            'nomMateriel' => $materiel->getNomMateriel(),
            'quantiteStock' => $materiel->getQuantiteStock(),
            'seuilMin' => $materiel->getSeuilMin(),
            'categorie'=> $materiel->getCategorie(),
            'description'=> $materiel->getDescription(),
            'photo'=> $materiel->getPhoto(),
            

        ];
    }

    return new JsonResponse($results);
}


    #[Route('/new', name: 'app_materiaux_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $materiaux = new Materiaux();
        $form = $this->createForm(MateriauxType::class, $materiaux);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            dump($form->getErrors(true)); 
            $entityManager->persist($materiaux);
            $entityManager->flush();

            return $this->redirectToRoute('app_materiaux_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('backoff/materiaux/new.html.twig', [
            'materiaux' => $materiaux,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_materiaux_show', methods: ['GET'])]
    public function show(Materiaux $materiaux): Response
    {
        return $this->render('backoff/materiaux/show.html.twig', [
            'materiaux' => $materiaux,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_materiaux_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Materiaux $materiaux, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(MateriauxType::class, $materiaux);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_materiaux_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('backoff/materiaux/edit.html.twig', [
            'materiaux' => $materiaux,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_materiaux_delete', methods: ['POST'])]
    public function delete(Request $request, Materiaux $materiaux, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$materiaux->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($materiaux);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_materiaux_index', [], Response::HTTP_SEE_OTHER);
    }

    
}