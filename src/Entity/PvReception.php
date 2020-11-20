<?php

namespace App\Entity;

use App\Repository\PvReceptionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PvReceptionRepository::class)
 */
class PvReception
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
    private $designation;

    /**
     * @ORM\Column(type="integer")
     */
    private $qteDemande;

    /**
     * @ORM\Column(type="integer")
     */
    private $qteRecu;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $marque;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $observation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDesignation(): ?string
    {
        return $this->designation;
    }

    public function setDesignation(string $designation): self
    {
        $this->designation = $designation;

        return $this;
    }

    public function getQteDemande(): ?int
    {
        return $this->qteDemande;
    }

    public function setQteDemande(int $qteDemande): self
    {
        $this->qteDemande = $qteDemande;

        return $this;
    }

    public function getQteRecu(): ?int
    {
        return $this->qteRecu;
    }

    public function setQteRecu(int $qteRecu): self
    {
        $this->qteRecu = $qteRecu;

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

    public function getObservation(): ?string
    {
        return $this->observation;
    }

    public function setObservation(string $observation): self
    {
        $this->observation = $observation;

        return $this;
    }
}
