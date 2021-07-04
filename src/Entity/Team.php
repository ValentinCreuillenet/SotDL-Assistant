<?php

namespace App\Entity;

use App\Repository\TeamRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TeamRepository::class)
 */
class Team
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
    private $name;

    /**
     * @ORM\ManyToMany(targetEntity=Character::class, inversedBy="teams")
     */
    private $chracters;

    /**
     * @ORM\ManyToMany(targetEntity=Creature::class, inversedBy="teams")
     */
    private $creatures;

    /**
     * @ORM\ManyToMany(targetEntity=User::class, mappedBy="teams")
     */
    private $users;

    public function __construct()
    {
        $this->chracters = new ArrayCollection();
        $this->creatures = new ArrayCollection();
        $this->users = new ArrayCollection();
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

    /**
     * @return Collection|Character[]
     */
    public function getChracters(): Collection
    {
        return $this->chracters;
    }

    public function addChracter(Character $chracter): self
    {
        if (!$this->chracters->contains($chracter)) {
            $this->chracters[] = $chracter;
        }

        return $this;
    }

    public function removeChracter(Character $chracter): self
    {
        $this->chracters->removeElement($chracter);

        return $this;
    }

    /**
     * @return Collection|Creature[]
     */
    public function getCreatures(): Collection
    {
        return $this->creatures;
    }

    public function addCreature(Creature $creature): self
    {
        if (!$this->creatures->contains($creature)) {
            $this->creatures[] = $creature;
        }

        return $this;
    }

    public function removeCreature(Creature $creature): self
    {
        $this->creatures->removeElement($creature);

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
            $user->addTeam($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->removeElement($user)) {
            $user->removeTeam($this);
        }

        return $this;
    }
}
