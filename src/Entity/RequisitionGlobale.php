<?php

namespace App\Entity;

use App\Repository\RequisitionGlobaleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RequisitionGlobaleRepository::class)
 */
class RequisitionGlobale
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Materiels::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $materiel;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantite;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $observation;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;

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
