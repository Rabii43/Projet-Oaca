<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\DirectRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=DirectRepository::class)
 */
class Direct
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
    private $libelle;

    /**
     * @ORM\OneToOne(targetEntity=marche::class, inversedBy="direct", cascade={"persist", "remove"})
     */
    private $direct_marche;

    /**
     * @ORM\OneToMany(targetEntity=User::class, mappedBy="user_direct")
     */
    private $users;

    public function __construct()
    {
        $this->users = new ArrayCollection();
    }

    
    
    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(?string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getDirectMarche(): ?marche
    {
        return $this->direct_marche;
    }

    public function setDirectMarche(?marche $direct_marche): self
    {
        $this->direct_marche = $direct_marche;

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
            $user->setUserDirect($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->removeElement($user)) {
            // set the owning side to null (unless already changed)
            if ($user->getUserDirect() === $this) {
                $user->setUserDirect(null);
            }
        }

        return $this;
    }

    


   
}
