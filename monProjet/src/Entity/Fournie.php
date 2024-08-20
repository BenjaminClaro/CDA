<?php

namespace App\Entity;

use App\Repository\FournieRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FournieRepository::class)]
class Fournie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $quantite = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date = null;

    #[ORM\ManyToOne]
    private ?produits $produits = null;

    #[ORM\ManyToOne]
    private ?fournisseurs $fournisseurs = null;

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

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): static
    {
        $this->date = $date;

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

    public function getFournisseurs(): ?fournisseurs
    {
        return $this->fournisseurs;
    }

    public function setFournisseurs(?fournisseurs $fournisseurs): static
    {
        $this->fournisseurs = $fournisseurs;

        return $this;
    }
}
