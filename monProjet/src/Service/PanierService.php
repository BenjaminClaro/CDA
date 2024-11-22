<?php

namespace App\Service;


use App\Controller\PanierController;
use App\Entity\Produits;
use App\Entity\SousRubriques;
use App\Repository\ProduitsRepository;
use App\Repository\SousRubriquesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class PanierService {

    private RequestStack $requestStack;
    private EntityManagerInterface $em;

    public function __construct(RequestStack $requestStack, EntityManagerInterface $em ){
        $this->requestStack = $requestStack; 
        $this->em = $em; 
    }


    public function addToPanier(int $id): void{

        $panier = $this->getSession()->get('panier', []);
        if(!empty($panier[$id])){
            $panier[$id]++;
        }else{
            $panier[$id] = 1;
        }


        $this->getSession()->set('panier', $panier);
    }
           

    public function removePanierAll(){
        return $this->getSession()->remove('panier');
    }



    public function removeToPanier(string $id){
        $panier = $this->requestStack->getSession()->get('panier', []);
        unset($panier[$id]);
        return $this->getSession()->set('panier', $panier);
    }





    public function getTotal() : array {
        $panier = $this->getSession()->get('panier');
        $panierData = [];
        if($panier){
            foreach($panier as $produits_id => $quantite){
                $produits = $this->em->getRepository(Produits::class)->findOneBy(['id' => $produits_id]);
                if(!$produits){
                    //
                }

                $panierData[] = [
                    'produits' => $produits,
                    'quantité' => $quantite
                ];
            }
        }
        return $panierData;
    }



    public function decreaseToPanier(string $id){
        $panier = $this->getSession()->get('panier', []);
        if($panier[$id] > 1){
            $panier[$id]--;
        }else{
            unset($panier[$id]);
        }


        $this->getSession()->set('panier', $panier);
    }



    private function getSession() : SessionInterface{
        return $this->requestStack->getSession();
    }

}

?>