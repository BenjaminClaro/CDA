<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Repository\RubriquesRepository;

class IndexController extends AbstractController
{
    #[Route('/', name: 'app_index')]
    public function index(RubriquesRepository $rubriquesRepository): Response
    {

        $rubriques = $rubriquesRepository->findAll();

        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
            'rubriques' => $rubriques,
        ]);
    }
}
