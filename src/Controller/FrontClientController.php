<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\MateriauxRepository;
use Symfony\Component\HttpFoundation\Request;


final class FrontClientController extends AbstractController
{
    #[Route('/front', name: 'app_front_client')]
    public function index(MateriauxRepository $materiauxRepository): Response
    {   
        $materiauxes = $materiauxRepository->findAll();

        // Vérifier si les données sont bien récupérées
        if (empty($materiauxes)) {
            dump("Aucun matériau trouvé !"); 
        }

        // Passer les matériaux à Twig
        return $this->render('FrontOffice/front_client/frontclient.html.twig', [
            'materiauxes' => $materiauxes, 
        ]);
    }
    public function rechercheMateriaux(Request $request, MateriauxRepository $materiauxRepository): Response
    {
        $search = $request->query->get('search', ''); // Récupère la valeur de la recherche ou une chaîne vide

        // Récupère les matériaux correspondant à la recherche
        $materiauxes = $materiauxRepository->findByName($search);

        return $this->render('materiaux/index.html.twig', [
            'materiauxes' => $materiauxes,
        ]);
    }
}
