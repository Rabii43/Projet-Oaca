<?php

namespace App\Entity;

use App\Repository\UserRepository;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource(
 *     collectionOperations={"post","get"},
 *     itemOperations={"get", "put", "delete"}
 * )
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $name;


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $email;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $activer;

    /**
     * @ORM\ManyToMany(targetEntity=Marche::class, mappedBy="relation")
     */
    private $marches;

    /**
     * @ORM\OneToMany(targetEntity=Fournisseur::class, mappedBy="fournisseur_user")
     */
    private $fournisseurs;

    /**
     * @ORM\OneToMany(targetEntity=marche::class, mappedBy="user")
     */
    private $user_marche;

    /**
     * @ORM\OneToOne(targetEntity=situation::class, inversedBy="user", cascade={"persist", "remove"})
     */
    private $user_situation;

    /**
     * @ORM\ManyToOne(targetEntity=direct::class, inversedBy="users")
     */
    private $user_direct;

    public function __construct()
    {
        $this->marches = new ArrayCollection();
        $this->fournisseurs = new ArrayCollection();
        $this->user_marche = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getActiver(): ?bool
    {
        return $this->activer;
    }

    public function setActiver(?bool $activer): self
    {
        $this->activer = $activer;

        return $this;
    }

    /**
     * @return Collection<int, Fournisseur>
     */
    public function getFournisseurs(): Collection
    {
        return $this->fournisseurs;
    }

    public function addFournisseur(Fournisseur $fournisseur): self
    {
        if (!$this->fournisseurs->contains($fournisseur)) {
            $this->fournisseurs[] = $fournisseur;
            $fournisseur->setFournisseurUser($this);
        }

        return $this;
    }

    public function removeFournisseur(Fournisseur $fournisseur): self
    {
        if ($this->fournisseurs->removeElement($fournisseur)) {
            // set the owning side to null (unless already changed)
            if ($fournisseur->getFournisseurUser() === $this) {
                $fournisseur->setFournisseurUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, marche>
     */
    public function getUserMarche(): Collection
    {
        return $this->user_marche;
    }

    public function addUserMarche(marche $userMarche): self
    {
        if (!$this->user_marche->contains($userMarche)) {
            $this->user_marche[] = $userMarche;
            $userMarche->setUser($this);
        }

        return $this;
    }

    public function removeUserMarche(marche $userMarche): self
    {
        if ($this->user_marche->removeElement($userMarche)) {
            // set the owning side to null (unless already changed)
            if ($userMarche->getUser() === $this) {
                $userMarche->setUser(null);
            }
        }

        return $this;
    }

    public function getUserSituation(): ?situation
    {
        return $this->user_situation;
    }

    public function setUserSituation(?situation $user_situation): self
    {
        $this->user_situation = $user_situation;

        return $this;
    }

    public function getUserDirect(): ?direct
    {
        return $this->user_direct;
    }

    public function setUserDirect(?direct $user_direct): self
    {
        $this->user_direct = $user_direct;

        return $this;
    }

    
}