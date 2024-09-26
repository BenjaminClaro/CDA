<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Templates\Index\index;
use Templates\Souscategories\souscat_id;
use App\Repository\SousRubriquesRepository;
use App\Repository\RubriquesRepository;
use App\Repository\ProduitsRepository;

class ProduitsController extends AbstractController
{
    #[Route('/produits', name: 'app_produits')]
    public function index(RubriquesRepository $rubriquesRepository, SousRubriquesRepository $sousrubriquesRepository, ProduitsRepository $produitsRepository): Response
    {
        $produits = $produitsRepository->findAll();
        $rubrique = $rubriquesRepository->findAll();
        $sousrubrique = $sousrubriquesRepository->findAll();
    
        return $this->render('produits/index.html.twig', [
            'controller_name' => 'produitsController',
            'rubriques' => $rubrique,
            'sousrubriques' => $sousrubrique,
            'produits' => $produits,
        ]);
    }


    #[Route('/produits/{sous_rubrique_id}', name: 'app_produits2', methods:['GET'])]
    public function index2(RubriquesRepository $rubriquesRepository, SousRubriquesRepository $sousrubriquesRepository, ProduitsRepository $produitsRepository, int $sous_rubrique_id): Response
    {

        $sousrubrique = $sousrubriquesRepository->find($sous_rubrique_id);

        return $this->render('produits/produit_id.html.twig', [
            'controller_name' => 'produitsController',

            'produits' => $produitsRepository->findBy(['sous_rubrique'=>$sous_rubrique_id]),
        ]);
    }

}
