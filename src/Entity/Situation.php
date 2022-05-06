<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\SituationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=SituationRepository::class)
 */
class Situation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=marche::class, inversedBy="situation", cascade={"persist", "remove"})
     */
    private $situation_marche;

    /**
     * @ORM\OneToOne(targetEntity=User::class, mappedBy="user_situation", cascade={"persist", "remove"})
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSituationMarche(): ?marche
    {
        return $this->situation_marche;
    }

    public function setSituationMarche(?marche $situation_marche): self
    {
        $this->situation_marche = $situation_marche;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        // unset the owning side of the relation if necessary
        if ($user === null && $this->user !== null) {
            $this->user->setUserSituation(null);
        }

        // set the owning side of the relation if necessary
        if ($user !== null && $user->getUserSituation() !== $this) {
            $user->setUserSituation($this);
        }

        $this->user = $user;

        return $this;
    }

    
}
