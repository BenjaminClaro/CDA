<?php

namespace App\Entity;

use App\Repository\ProduitsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProduitsRepository::class)]
class Produits
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $prix_achat = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $prix_vente = null;

    #[ORM\Column(length: 255)]
    private ?string $photo = null;

    #[ORM\Column]
    private ?int $stock = null;

    #[ORM\ManyToOne]
    private ?SousRubriques $sous_rubrique = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getPrixAchat(): ?string
    {
        return $this->prix_achat;
    }

    public function setPrixAchat(string $prix_achat): static
    {
        $this->prix_achat = $prix_achat;

        return $this;
    }

    public function getPrixVente(): ?string
    {
        return $this->prix_vente;
    }

    public function setPrixVente(string $prix_vente): static
    {
        $this->prix_vente = $prix_vente;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): static
    {
        $this->photo = $photo;

        return $this;
    }

    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function setStock(int $stock): static
    {
        $this->stock = $stock;

        return $this;
    }

    public function getSousRubrique(): ?SousRubriques
    {
        return $this->sous_rubrique;
    }

    public function setSousRubrique(?SousRubriques $sous_rubrique): static
    {
        $this->sous_rubrique = $sous_rubrique;

        return $this;
    }
}
