<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SouscategoriesController extends AbstractController
{
    #[Route('/souscategories', name: 'app_souscategories')]
    public function index(): Response
    {
        return $this->render('souscategories/index.html.twig', [
            'controller_name' => 'SouscategoriesController',
        ]);
    }
}
