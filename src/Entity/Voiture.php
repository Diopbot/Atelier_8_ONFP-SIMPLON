<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use App\Repository\VoitureRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VoitureRepository::class)
 */
#[ApiResource(normalizationContext: ['groups' => ['voiture']])]
class Voiture
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"voiture"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=10)
     * @Groups({"voiture"})
     */
    private $matricule;

    /**
     * @ORM\Column(type="string", length=40)
     * @Groups({"voiture"})
     */
    private $marque;

    /**
     * @ORM\Column(type="string", length=40, nullable=true)
     * @Groups({"voiture"})
     */
    private $model;

    /**
     * @ORM\Column(type="boolean")
     * @Groups({"voiture"})
     */
    private $assurance;

    /**
     * @ORM\Column(type="boolean")
     * @Groups({"voiture"})
     */
    private $visiteTechnique;

    /**
     * @ORM\Column(type="boolean")
     * @Groups({"voiture"})
     */
    private $carteGrise;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @Groups({"voiture"})
     */
    private $materielSecours;

    /**
     * @ORM\ManyToOne(targetEntity=Chauffeur::class, inversedBy="voitures")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"voiture"})
     */
    private $chauffeur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(string $matricule): self
    {
        $this->matricule = $matricule;

        return $this;
    }

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque(string $marque): self
    {
        $this->marque = $marque;

        return $this;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(?string $model): self
    {
        $this->model = $model;

        return $this;
    }

    public function getAssurance(): ?bool
    {
        return $this->assurance;
    }

    public function setAssurance(bool $assurance): self
    {
        $this->assurance = $assurance;

        return $this;
    }

    public function getVisiteTechnique(): ?bool
    {
        return $this->visiteTechnique;
    }

    public function setVisiteTechnique(bool $visiteTechnique): self
    {
        $this->visiteTechnique = $visiteTechnique;

        return $this;
    }

    public function getCarteGrise(): ?bool
    {
        return $this->carteGrise;
    }

    public function setCarteGrise(bool $carteGrise): self
    {
        $this->carteGrise = $carteGrise;

        return $this;
    }

    public function getMaterielSecours(): ?bool
    {
        return $this->materielSecours;
    }

    public function setMaterielSecours(?bool $materielSecours): self
    {
        $this->materielSecours = $materielSecours;

        return $this;
    }

    public function getChauffeur(): ?Chauffeur
    {
        return $this->chauffeur;
    }

    public function setChauffeur(?Chauffeur $chauffeur): self
    {
        $this->chauffeur = $chauffeur;

        return $this;
    }
}
