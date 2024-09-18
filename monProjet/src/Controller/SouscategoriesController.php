<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Repository\SousRubriquesRepository;
use App\Repository\RubriquesRepository;


class SouscategoriesController extends AbstractController
{
    #[Route('/souscategories', name: 'app_souscategories')]
    public function index(RubriquesRepository $rubriquesRepository, SousRubriquesRepository $sousrubriquesRepository): Response
    {

        $sousrubriques = $sousrubriquesRepository->findAll();
        $rubriques = $rubriquesRepository->findAll();

        return $this->render('souscategories/index.html.twig', [
            'controller_name' => 'SouscategoriesController',
            'sousrubriques' => $sousrubriques,
            'rubriques' => $rubriques,
        ]);
    }
}
