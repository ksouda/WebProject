<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class IndexController extends AbstractController
{
    #[Route('/app_home', name: 'app_home')]
    public function index(): Response
    {
        $this->denyAccessUnlessGranted('ROLE_CLIENT');
        return $this->render('FrontOffice/HomePage/frontuser.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }
}
