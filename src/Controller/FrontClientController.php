<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class FrontClientController extends AbstractController
{
    #[Route('/front/client', name: 'app_front_client')]
    public function index(): Response
    {
        return $this->render('frontoffice/front_client/frontclient.html.twig', [
            'controller_name' => 'FrontClientController',
        ]);
    }
}
