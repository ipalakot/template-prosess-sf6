<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DeafaultController extends AbstractController
{
    #[Route('/deafault', name: 'app_deafault')]
    public function index(): Response
    {
        return $this->render('deafault/index.html.twig', [
            'controller_name' => 'DeafaultController',
        ]);
    }
}
