<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BackoffController extends AbstractController
{
    #[Route('/backoff', name: 'app_backoff')]
    public function index(): Response
    {
        return $this->render('backoff/admin/baseback.html.twig', [
            'controller_name' => 'BackoffController',
        ]);
    }
}
