<?php

namespace App\Controller;

use App\Entity\Produits;
use App\Entity\SousCategories;
use App\Repository\ProduitsRepository;
use App\Repository\SousCategoriesRepository;

use App\Service\PanierService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PanierController extends AbstractController
{


    #[Route('/panier', name: 'app_panier')]
    public function index(PanierService $panierService): Response
    {
        
        return $this->render('panier/index.html.twig', [
            'panier' => $panierService->getTotal()
        ]);
    }


    #[Route('/panier/add/{produits_id}', name: 'app_panier_add')]
    public function addToRoute(PanierService $panierService, int $produits_id): Response
    {
        $panierService->addToPanier($produits_id);
        return $this->redirectToRoute('app_panier');
    }


    #[Route('/panier/removeAll', name: 'app_panier_removeAll')]
    public function removeAll(PanierService $panierService): Response
    {
        $panierService->removePanierAll();
        return $this->redirectToRoute('app_accueil');
    }


    #[Route('/panier/remove/{produits_id}', name: 'app_panier_remove')]
    public function removeToPanier(PanierService $panierService, int $produits_id): Response
    {
        $panierService->removeToPanier($produits_id);
        return $this->redirectToRoute('app_panier');
    }



    #[Route('/panier/decrease/{produits_id}', name: 'app_panier_decrease')]
    public function decreaseToRoute(PanierService $panierService, int $produits_id): Response
    {
        $panierService->decreaseToPanier($produits_id);
        return $this->redirectToRoute('app_panier');
    }
}