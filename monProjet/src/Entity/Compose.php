<?php

namespace App\Entity;

use App\Repository\ComposeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ComposeRepository::class)]
class Compose
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $quantite = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 5, scale: 2)]
    private ?string $reduction = null;

    #[ORM\ManyToOne]
    private ?produits $produits = null;

    #[ORM\ManyToOne]
    private ?commandes $commandes = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getReduction(): ?string
    {
        return $this->reduction;
    }

    public function setReduction(string $reduction): static
    {
        $this->reduction = $reduction;

        return $this;
    }

    public function getProduits(): ?produits
    {
        return $this->produits;
    }

    public function setProduits(?produits $produits): static
    {
        $this->produits = $produits;

        return $this;
    }

    public function getCommandes(): ?commandes
    {
        return $this->commandes;
    }

    public function setCommandes(?commandes $commandes): static
    {
        $this->commandes = $commandes;

        return $this;
    }
}
