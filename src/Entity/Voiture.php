<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\VoitureRepository;
use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\Types\Boolean;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass="App\Repository\VoitureRepository", repositoryClass=VoitureRepository::class)
 * @ApiResource(
 *     normalizationContext: ['groups' => ['read']],
       denormalizationContext: ['groups' => ['write']],
 * )
 */
class Voiture
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */

    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $matricule;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $marque;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $modele;

    /**
     * @ORM\Column(type="boolean", length=255)
     */
    private $assurance;

    /**
     * @ORM\Column(type="boolean")
     */
    private $visiteTechnique;

    /**
     * @ORM\Column(type="boolean", length=255)
     */
    private $carteGrise;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $pneuSecours;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $materielSecours;

    /**
     * @ORM\ManyToOne(targetEntity=Chauffeur::class, inversedBy="voitures")
     * @ORM\JoinColumn(nullable=false)
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

    public function getModele(): ?string
    {
        return $this->modele;
    }

    public function setModele(string $modele): self
    {
        $this->modele = $modele;

        return $this;
    }

    public function getAssurance(): ?bool
    {
        return $this->assurance;
    }

    public function setAssurance(string $assurance): self
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

    public function setCarteGrise(string $carteGrise): self
    {
        $this->carteGrise = $carteGrise;

        return $this;
    }

    public function getPneuSecours(): ?bool
    {
        return $this->pneuSecours;
    }

    public function setPneuSecours(?bool $pneuSecours): self
    {
        $this->pneuSecours = $pneuSecours;

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
