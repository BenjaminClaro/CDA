<?php

namespace App\Controller;


use App\Templates\Panier;

use App\Entity\Commandes;
use App\Entity\Produits; 
use App\Entity\Rubriques;
use App\Entity\Utilisateurs;
use App\Repository\ProduitsRepository;
use App\Repository\RubriquesRepository;
use App\Form\CommandeType;
use Symfony\Component\HttpFoundation\Request;
use App\Service\PanierService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Validator\Constraints\DateTime;


class CommandeController extends AbstractController
{
    #[Route('/commande', name: 'app_commande')]
    public function index(PanierService $panierService, Request $request, EntityManagerInterface $entityManager, #[CurrentUser] ?Utilisateurs $utilisateurs): Response
    {

        $form = $this->createForm(CommandeType::class);
        $form->handleRequest($request);
        
        



        if ($form->isSubmitted() && $form->isValid()) {



           
            $message = new Commandes();

            
            $data = $form->getData();
            
            $message = $data;

            $message->setUtilisateurs($this->getUser());
            
            $entityManager->persist($message);
            $entityManager->flush();

            // Redirection vers accueil
            return $this->redirectToRoute('app_accueil');
        }
        return $this->render('commande/index.html.twig', [
            'controller_name' => 'CommandeController',
            'panier' => $panierService->getTotal(),
            'form' => $form
        ]);
    }
}