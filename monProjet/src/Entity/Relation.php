<?php

namespace App\Entity;

use App\Repository\RelationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RelationRepository::class)]
class Relation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    private ?fournisseurs $fournisseurs = null;

    #[ORM\ManyToOne]
    private ?utilisateurs $utilisateurs = null;

    public function getId(): ?int
    {
        return $this->id;
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
