<?php

namespace App\Entity;

use App\Repository\EstLivreRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EstLivreRepository::class)]
class EstLivre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse_livraison = null;

    #[ORM\ManyToOne]
    private ?commandes $commandes = null;

    #[ORM\ManyToOne]
    private ?produits $produits = null;

    #[ORM\ManyToOne]
    private ?utilisateurs $utilisateurs = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getAdresseLivraison(): ?string
    {
        return $this->adresse_livraison;
    }

    public function setAdresseLivraison(string $adresse_livraison): static
    {
        $this->adresse_livraison = $adresse_livraison;

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

    public function getProduits(): ?produits
    {
        return $this->produits;
    }

    public function setProduits(?produits $produits): static
    {
        $this->produits = $produits;

        return $this;
    }

    public function getUtilisateurs(): ?utilisateurs
    {
        return $this->utilisateurs;
    }

    public function setUtilisateurs(?utilisateurs $utilisateurs): static
    {
        $this->utilisateurs = $utilisateurs;

        return $this;
    }
}
