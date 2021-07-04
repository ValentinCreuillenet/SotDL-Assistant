<?php

namespace App\Entity;

use App\Repository\TagRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TagRepository::class)
 */
class Tag
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
    private $short;

    /**
     * @ORM\Column(type="string", length=500)
     */
    private $description;

    /**
     * @ORM\ManyToMany(targetEntity=Spell::class, mappedBy="tags")
     */
    private $spells;

    /**
     * @ORM\ManyToMany(targetEntity=Talent::class, mappedBy="tags")
     */
    private $talents;

    /**
     * @ORM\ManyToMany(targetEntity=Creature::class, mappedBy="tags")
     */
    private $creatures;

    public function __construct()
    {
        $this->spells = new ArrayCollection();
        $this->talents = new ArrayCollection();
        $this->creatures = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getShort(): ?string
    {
        return $this->short;
    }

    public function setShort(string $short): self
    {
        $this->short = $short;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection|Spell[]
     */
    public function getSpells(): Collection
    {
        return $this->spells;
    }

    public function addSpell(Spell $spell): self
    {
        if (!$this->spells->contains($spell)) {
            $this->spells[] = $spell;
            $spell->addTag($this);
        }

        return $this;
    }

    public function removeSpell(Spell $spell): self
    {
        if ($this->spells->removeElement($spell)) {
            $spell->removeTag($this);
        }

        return $this;
    }

    /**
     * @return Collection|Talent[]
     */
    public function getTalents(): Collection
    {
        return $this->talents;
    }

    public function addTalent(Talent $talent): self
    {
        if (!$this->talents->contains($talent)) {
            $this->talents[] = $talent;
            $talent->addTag($this);
        }

        return $this;
    }

    public function removeTalent(Talent $talent): self
    {
        if ($this->talents->removeElement($talent)) {
            $talent->removeTag($this);
        }

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
            $creature->addTag($this);
        }

        return $this;
    }

    public function removeCreature(Creature $creature): self
    {
        if ($this->creatures->removeElement($creature)) {
            $creature->removeTag($this);
        }

        return $this;
    }
}
