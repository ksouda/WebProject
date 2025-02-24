<?php

namespace App\Controller;
use App\Entity\Materiaux;
use App\Form\MateriauxType;
use App\Repository\MateriauxRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;



#[Route('/materiaux')]
final class MateriauxController extends AbstractController
{
    
    #[Route(name: 'app_materiaux_index', methods: ['GET'])]
public function index(MateriauxRepository $materiauxRepository): Response
{
    // Récupérer tous les matériaux
    $materiaux = $materiauxRepository->findAll();

    // Initialiser les tableaux pour les statistiques
    $labels = [];
    $data = [];

    // Vérifier les seuils et ajouter les alertes
    foreach ($materiaux as $materiel) {
        $labels[] = $materiel->getNomMateriel();
        $data[] = $materiel->getQuantiteStock();

        if ($materiel->getQuantiteStock() <= $materiel->getSeuilMin()) {
            $this->addFlash('alert', '⚠️ Stock faible pour : ' . $materiel->getNomMateriel());
        }
    }

    // Rendre la vue avec les données nécessaires
    return $this->render('backoff/materiaux/index.html.twig', [
        'materiauxes' => $materiaux,
        'labels' => $labels,
        'data' => $data,
    ]);
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
