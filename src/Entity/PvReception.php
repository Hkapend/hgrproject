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

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\ManyToOne(targetEntity=Materiels::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $numpv;

    /**
     * @ORM\Column(type="integer")
     */
    private $valeur;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getDescription(): ?Materiels
    {
        return $this->description;
    }

    public function setDescription(?Materiels $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getNumpv(): ?string
    {
        return $this->numpv;
    }

    public function setNumpv(string $numpv): self
    {
        $this->numpv = $numpv;

        return $this;
    }

    public function getValeur(): ?int
    {
        return $this->valeur;
    }

    public function setValeur(int $valeur): self
    {
        $this->valeur = $valeur;

        return $this;
    }
}
