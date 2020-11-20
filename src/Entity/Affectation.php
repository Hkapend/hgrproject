<?php

namespace App\Entity;

use App\Repository\AffectationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AffectationRepository::class)
 */
class Affectation
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
    private $qte;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\ManyToOne(targetEntity=Materiels::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $materiel;

    /**
     * @ORM\ManyToOne(targetEntity=FicheStock::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $stock;

    /**
     * @ORM\ManyToOne(targetEntity=Service::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $service;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQte(): ?int
    {
        return $this->qte;
    }

    public function setQte(int $qte): self
    {
        $this->qte = $qte;

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

    public function getMateriel(): ?Materiels
    {
        return $this->materiel;
    }

    public function setMateriel(?Materiels $materiel): self
    {
        $this->materiel = $materiel;

        return $this;
    }

    public function getStock(): ?FicheStock
    {
        return $this->stock;
    }

    public function setStock(?FicheStock $stock): self
    {
        $this->stock = $stock;

        return $this;
    }

    public function getService(): ?Service
    {
        return $this->service;
    }

    public function setService(?Service $service): self
    {
        $this->service = $service;

        return $this;
    }
}
