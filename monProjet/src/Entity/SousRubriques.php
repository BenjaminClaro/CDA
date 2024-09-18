<?php

namespace App\Entity;

use App\Repository\SousRubriquesRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Rubriques;

#[ORM\Entity(repositoryClass: SousRubriquesRepository::class)]
class SousRubriques
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $photo = null;

    #[ORM\ManyToOne]
    private ?rubriques $rubrique = null;

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

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): static
    {
        $this->photo = $photo;

        return $this;
    }

    public function getRubrique(): ?rubriques
    {
        return $this->rubrique;
    }

    public function setRubrique(?rubriques $rubrique): static
    {
        $this->rubrique = $rubrique;

        return $this;
    }
}
