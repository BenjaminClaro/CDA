<?php

namespace App\Entity;

use App\Repository\ContiensRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ContiensRepository::class)]
class Contiens
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    private ?produits $produit = null;

    #[ORM\ManyToOne]
    private ?Livraison $livraison = null;

    #[ORM\Column]
    private ?int $quantite = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProduit(): ?produits
    {
        return $this->produit;
    }

    public function setProduit(?produits $produit): static
    {
        $this->produit = $produit;

        return $this;
    }

    public function getLivraison(): ?Livraison
    {
        return $this->livraison;
    }

    public function setLivraison(?Livraison $livraison): static
    {
        $this->livraison = $livraison;

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): static
    {
        $this->quantite = $quantite;

        return $this;
    }
}
