<?php

namespace App\Entity;

use App\Repository\FournisseurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FournisseurRepository::class)
 */
class Fournisseur
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $societe;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $add_msg;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $tel_prof;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $tel_per;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $tel_mobil;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $num_telecopier;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $page_web;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $ville;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $pays_region;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $code_postal;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $remarque;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSociete(): ?string
    {
        return $this->societe;
    }

    public function setSociete(?string $societe): self
    {
        $this->societe = $societe;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getAddMsg(): ?string
    {
        return $this->add_msg;
    }

    public function setAddMsg(?string $add_msg): self
    {
        $this->add_msg = $add_msg;

        return $this;
    }

    public function getTelProf(): ?string
    {
        return $this->tel_prof;
    }

    public function setTelProf(?string $tel_prof): self
    {
        $this->tel_prof = $tel_prof;

        return $this;
    }

    public function getTelPer(): ?string
    {
        return $this->tel_per;
    }

    public function setTelPer(?string $tel_per): self
    {
        $this->tel_per = $tel_per;

        return $this;
    }

    public function getTelMobil(): ?string
    {
        return $this->tel_mobil;
    }

    public function setTelMobil(?string $tel_mobil): self
    {
        $this->tel_mobil = $tel_mobil;

        return $this;
    }

    public function getNumTelecopier(): ?string
    {
        return $this->num_telecopier;
    }

    public function setNumTelecopier(?string $num_telecopier): self
    {
        $this->num_telecopier = $num_telecopier;

        return $this;
    }

    public function getPageWeb(): ?string
    {
        return $this->page_web;
    }

    public function setPageWeb(?string $page_web): self
    {
        $this->page_web = $page_web;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getPaysRegion(): ?string
    {
        return $this->pays_region;
    }

    public function setPaysRegion(?string $pays_region): self
    {
        $this->pays_region = $pays_region;

        return $this;
    }

    public function getCodePostal(): ?string
    {
        return $this->code_postal;
    }

    public function setCodePostal(?string $code_postal): self
    {
        $this->code_postal = $code_postal;

        return $this;
    }

    public function getRemarque(): ?string
    {
        return $this->remarque;
    }

    public function setRemarque(?string $remarque): self
    {
        $this->remarque = $remarque;

        return $this;
    }
}
