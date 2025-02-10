<?php 
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontUser extends AbstractController
{
    #[Route('/front', name: 'front')]
    public function index(): Response
    {

        return $this->render('FrontOffice\HomePage\home.html.twig');
    }

   
}
