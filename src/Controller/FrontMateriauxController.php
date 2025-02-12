<?php
namespace App\Controller;

use App\Repository\MateriauxRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class FrontMateriauxController extends AbstractController
{
    #[Route('/front/materiaux', name: 'app_front_materiaux')]
    public function indexfront(MateriauxRepository $materiauxRepository): Response
    {
        // Récupérer tous les matériaux depuis la base de données
        $materiaux = $materiauxRepository->findAll();

        return $this->render('FrontOffice/front_client/indexfront.html.twig', [
            'materiauxes' => $materiaux,
        ]);
    }
}
