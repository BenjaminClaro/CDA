<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Templates\Index\index;
use App\Repository\SousRubriquesRepository;
use App\Repository\RubriquesRepository;


class SouscategoriesController extends AbstractController
    {#[Route('/souscategories', name: 'app_souscategories')]
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

    #[Route('/souscategories/{rubrique}', name: 'app_souscategories2', methods:['GET'])]
    public function index2(RubriquesRepository $rubriquesRepository, SousRubriquesRepository $sousrubriquesRepository, int $rubrique): Response
    {


        $rubriques = $rubriquesRepository->find($rubrique);

        return $this->render('souscategories/souscat_id.html.twig', [
            'controller_name' => 'SouscategoriesController',

            'sousrubriques' => $sousrubriquesRepository->findBy(['rubriques'=>$rubrique]),
        ]);
    }
}
