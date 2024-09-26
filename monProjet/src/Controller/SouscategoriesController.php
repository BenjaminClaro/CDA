<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Templates\Index\index;
use App\Repository\SousRubriquesRepository;
use App\Repository\RubriquesRepository;


class SouscategoriesController extends AbstractController
    {


    #[Route('/souscategories', name: 'app_souscategories')]
    public function index0(RubriquesRepository $rubriquesRepository, SousRubriquesRepository $sousrubriquesRepository): Response
    {
    
        $rubrique = $rubriquesRepository->findAll();
        $sousrubrique = $sousrubriquesRepository->findAll();
    
        return $this->render('souscategories/index.html.twig', [
            'controller_name' => 'SouscategoriesController',
            'rubriques' => $rubrique,
            'sousrubriques' => $sousrubrique,
        ]);
    }


    #[Route('/souscategories/{rubrique_id}', name: 'app_souscategories2', methods:['GET'])]
    public function index(RubriquesRepository $rubriquesRepository, SousRubriquesRepository $sousrubriquesRepository, int $rubrique_id): Response
    {

        $rubriques = $rubriquesRepository->find($rubrique_id);

        return $this->render('souscategories/souscat_id.html.twig', [
            'controller_name' => 'SouscategoriesController',

            'sousrubriques' => $sousrubriquesRepository->findBy(['rubrique'=>$rubrique_id]),
        ]);
    }




}
