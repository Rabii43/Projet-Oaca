<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\MarcheRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=MarcheRepository::class)
 */
class Marche
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $MN;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $annee;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nAO;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date_CME;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date_CA;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date_NPV;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date_CPV;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date_CDF;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $objet;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nt_devise;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nt_dt;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $min_max_mt;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $n_ord_SV;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date_acc;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $date_LC;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $delair;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dellai_achev;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date_ord_SV;

    /**
     * @ORM\Column(type="text")
     */
    private $observation;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $garentie;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date_recp_DF;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nReg_DF;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date_dot;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $titre;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date_AL_PV;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date_fax_CDF;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dtSUPDF1;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dtSupDB1;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dtSupDF2;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dtSupDB2;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dtSupDF3;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dtSupDB3;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dtSupDF;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dtSupDB4;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dtSupDF5;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dtSupDB5;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $NBTSup;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMN(): ?int
    {
        return $this->MN;
    }

    public function setMN(?int $MN): self
    {
        $this->MN = $MN;

        return $this;
    }

    public function getAnnee(): ?int
    {
        return $this->annee;
    }

    public function setAnnee(?int $annee): self
    {
        $this->annee = $annee;

        return $this;
    }

    public function getNAO(): ?int
    {
        return $this->nAO;
    }

    public function setNAO(?int $nAO): self
    {
        $this->nAO = $nAO;

        return $this;
    }

    public function getDateCME(): ?\DateTimeInterface
    {
        return $this->date_CME;
    }

    public function setDateCME(?\DateTimeInterface $date_CME): self
    {
        $this->date_CME = $date_CME;

        return $this;
    }

    public function getDateCA(): ?\DateTimeInterface
    {
        return $this->date_CA;
    }

    public function setDateCA(?\DateTimeInterface $date_CA): self
    {
        $this->date_CA = $date_CA;

        return $this;
    }

    public function getDateNPV(): ?\DateTimeInterface
    {
        return $this->date_NPV;
    }

    public function setDateNPV(?\DateTimeInterface $date_NPV): self
    {
        $this->date_NPV = $date_NPV;

        return $this;
    }

    public function getDateCPV(): ?\DateTimeInterface
    {
        return $this->date_CPV;
    }

    public function setDateCPV(?\DateTimeInterface $date_CPV): self
    {
        $this->date_CPV = $date_CPV;

        return $this;
    }

    public function getDateCDF(): ?\DateTimeInterface
    {
        return $this->date_CDF;
    }

    public function setDateCDF(?\DateTimeInterface $date_CDF): self
    {
        $this->date_CDF = $date_CDF;

        return $this;
    }

    public function getObjet(): ?string
    {
        return $this->objet;
    }

    public function setObjet(?string $objet): self
    {
        $this->objet = $objet;

        return $this;
    }

    public function getNtDevise(): ?int
    {
        return $this->nt_devise;
    }

    public function setNtDevise(?int $nt_devise): self
    {
        $this->nt_devise = $nt_devise;

        return $this;
    }

    public function getNtDt(): ?int
    {
        return $this->nt_dt;
    }

    public function setNtDt(?int $nt_dt): self
    {
        $this->nt_dt = $nt_dt;

        return $this;
    }

    public function getMinMaxMt(): ?int
    {
        return $this->min_max_mt;
    }

    public function setMinMaxMt(?int $min_max_mt): self
    {
        $this->min_max_mt = $min_max_mt;

        return $this;
    }

    public function getNOrdSV(): ?int
    {
        return $this->n_ord_SV;
    }

    public function setNOrdSV(?int $n_ord_SV): self
    {
        $this->n_ord_SV = $n_ord_SV;

        return $this;
    }

    public function getDateAcc(): ?\DateTimeInterface
    {
        return $this->date_acc;
    }

    public function setDateAcc(?\DateTimeInterface $date_acc): self
    {
        $this->date_acc = $date_acc;

        return $this;
    }

    public function getDateLC(): ?string
    {
        return $this->date_LC;
    }

    public function setDateLC(?string $date_LC): self
    {
        $this->date_LC = $date_LC;

        return $this;
    }

    public function getDelair(): ?string
    {
        return $this->delair;
    }

    public function setDelair(?string $delair): self
    {
        $this->delair = $delair;

        return $this;
    }

    public function getDellaiAchev(): ?\DateTimeInterface
    {
        return $this->dellai_achev;
    }

    public function setDellaiAchev(?\DateTimeInterface $dellai_achev): self
    {
        $this->dellai_achev = $dellai_achev;

        return $this;
    }

    public function getDateOrdSV(): ?\DateTimeInterface
    {
        return $this->date_ord_SV;
    }

    public function setDateOrdSV(?\DateTimeInterface $date_ord_SV): self
    {
        $this->date_ord_SV = $date_ord_SV;

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

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getGarentie(): ?string
    {
        return $this->garentie;
    }

    public function setGarentie(?string $garentie): self
    {
        $this->garentie = $garentie;

        return $this;
    }

    public function getDateRecpDF(): ?\DateTimeInterface
    {
        return $this->date_recp_DF;
    }

    public function setDateRecpDF(?\DateTimeInterface $date_recp_DF): self
    {
        $this->date_recp_DF = $date_recp_DF;

        return $this;
    }

    public function getNRegDF(): ?int
    {
        return $this->nReg_DF;
    }

    public function setNRegDF(?int $nReg_DF): self
    {
        $this->nReg_DF = $nReg_DF;

        return $this;
    }

    public function getDateDot(): ?\DateTimeInterface
    {
        return $this->date_dot;
    }

    public function setDateDot(?\DateTimeInterface $date_dot): self
    {
        $this->date_dot = $date_dot;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(?string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDateALPV(): ?\DateTimeInterface
    {
        return $this->date_AL_PV;
    }

    public function setDateALPV(?\DateTimeInterface $date_AL_PV): self
    {
        $this->date_AL_PV = $date_AL_PV;

        return $this;
    }

    public function getDateFaxCDF(): ?\DateTimeInterface
    {
        return $this->date_fax_CDF;
    }

    public function setDateFaxCDF(?\DateTimeInterface $date_fax_CDF): self
    {
        $this->date_fax_CDF = $date_fax_CDF;

        return $this;
    }

    public function getDtSUPDF1(): ?\DateTimeInterface
    {
        return $this->dtSUPDF1;
    }

    public function setDtSUPDF1(?\DateTimeInterface $dtSUPDF1): self
    {
        $this->dtSUPDF1 = $dtSUPDF1;

        return $this;
    }

    public function getDtSupDB1(): ?\DateTimeInterface
    {
        return $this->dtSupDB1;
    }

    public function setDtSupDB1(?\DateTimeInterface $dtSupDB1): self
    {
        $this->dtSupDB1 = $dtSupDB1;

        return $this;
    }

    public function getDtSupDF2(): ?\DateTimeInterface
    {
        return $this->dtSupDF2;
    }

    public function setDtSupDF2(?\DateTimeInterface $dtSupDF2): self
    {
        $this->dtSupDF2 = $dtSupDF2;

        return $this;
    }

    public function getDtSupDB2(): ?\DateTimeInterface
    {
        return $this->dtSupDB2;
    }

    public function setDtSupDB2(?\DateTimeInterface $dtSupDB2): self
    {
        $this->dtSupDB2 = $dtSupDB2;

        return $this;
    }

    public function getDtSupDF3(): ?\DateTimeInterface
    {
        return $this->dtSupDF3;
    }

    public function setDtSupDF3(?\DateTimeInterface $dtSupDF3): self
    {
        $this->dtSupDF3 = $dtSupDF3;

        return $this;
    }

    public function getDtSupDB3(): ?\DateTimeInterface
    {
        return $this->dtSupDB3;
    }

    public function setDtSupDB3(?\DateTimeInterface $dtSupDB3): self
    {
        $this->dtSupDB3 = $dtSupDB3;

        return $this;
    }

    public function getDtSupDF(): ?\DateTimeInterface
    {
        return $this->dtSupDF;
    }

    public function setDtSupDF(?\DateTimeInterface $dtSupDF): self
    {
        $this->dtSupDF = $dtSupDF;

        return $this;
    }

    public function getDtSupDB4(): ?\DateTimeInterface
    {
        return $this->dtSupDB4;
    }

    public function setDtSupDB4(?\DateTimeInterface $dtSupDB4): self
    {
        $this->dtSupDB4 = $dtSupDB4;

        return $this;
    }

    public function getDtSupDF5(): ?\DateTimeInterface
    {
        return $this->dtSupDF5;
    }

    public function setDtSupDF5(?\DateTimeInterface $dtSupDF5): self
    {
        $this->dtSupDF5 = $dtSupDF5;

        return $this;
    }

    public function getDtSupDB5(): ?\DateTimeInterface
    {
        return $this->dtSupDB5;
    }

    public function setDtSupDB5(?\DateTimeInterface $dtSupDB5): self
    {
        $this->dtSupDB5 = $dtSupDB5;

        return $this;
    }

    public function getNBTSup(): ?int
    {
        return $this->NBTSup;
    }

    public function setNBTSup(?int $NBTSup): self
    {
        $this->NBTSup = $NBTSup;

        return $this;
    }
}
