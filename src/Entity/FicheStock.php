<?php

namespace App\Entity;

use App\Repository\FicheStockRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FicheStockRepository::class)
 */
class FicheStock
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $NumLot;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $provenance;

    /**
     * @ORM\Column(type="integer")
     */
    private $qteEntrer;

    /**
     * @ORM\Column(type="integer")
     */
    private $qteSortie;

    /**
     * @ORM\Column(type="integer")
     */
    private $perte;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $observation;

    /**
     * @ORM\ManyToOne(targetEntity=Materiels::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $materiel;

    /**
     * @ORM\ManyToOne(targetEntity=PvReception::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $pv;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lieuStock;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumLot(): ?string
    {
        return $this->NumLot;
    }

    public function setNumLot(string $NumLot): self
    {
        $this->NumLot = $NumLot;

        return $this;
    }

    public function getProvenance(): ?string
    {
        return $this->provenance;
    }

    public function setProvenance(string $provenance): self
    {
        $this->provenance = $provenance;

        return $this;
    }

    public function getQteEntrer(): ?int
    {
        return $this->qteEntrer;
    }

    public function setQteEntrer(int $qteEntrer): self
    {
        $this->qteEntrer = $qteEntrer;

        return $this;
    }

    public function getQteSortie(): ?int
    {
        return $this->qteSortie;
    }

    public function setQteSortie(int $qteSortie): self
    {
        $this->qteSortie = $qteSortie;

        return $this;
    }

    public function getPerte(): ?int
    {
        return $this->perte;
    }

    public function setPerte(int $perte): self
    {
        $this->perte = $perte;

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

    public function getMateriel(): ?Materiels
    {
        return $this->materiel;
    }

    public function setMateriel(?Materiels $materiel): self
    {
        $this->materiel = $materiel;

        return $this;
    }

    public function getPv(): ?PvReception
    {
        return $this->pv;
    }

    public function setPv(?PvReception $pv): self
    {
        $this->pv = $pv;

        return $this;
    }

    public function getLieuStock(): ?string
    {
        return $this->lieuStock;
    }

    public function setLieuStock(string $lieuStock): self
    {
        $this->lieuStock = $lieuStock;

        return $this;
    }
}
