<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Repository\RubriquesRepository;
use App\Repository\SousRubriquesRepository;

class IndexController extends AbstractController
{
    #[Route('/', name: 'app_index')]
    public function index(RubriquesRepository $rubriquesRepository, SousRubriquesRepository $sousrubriquesRepository): Response
    {

        $rubrique = $rubriquesRepository->findAll();
        $sousrubrique = $sousrubriquesRepository->findAll();

        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
            'rubriques' => $rubrique,
            'sousrubriques' => $sousrubrique,
        ]);
    }
}
