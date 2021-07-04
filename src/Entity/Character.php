<?php

namespace App\Entity;

use App\Repository\CharacterRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CharacterRepository::class)
 */
class Character
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
     * @ORM\Column(type="integer")
     */
    private $strength;

    /**
     * @ORM\Column(type="integer")
     */
    private $agility;

    /**
     * @ORM\Column(type="integer")
     */
    private $intellect;

    /**
     * @ORM\Column(type="integer")
     */
    private $willpower;

    /**
     * @ORM\Column(type="integer")
     */
    private $health;

    /**
     * @ORM\Column(type="integer")
     */
    private $healingRate;

    /**
     * @ORM\Column(type="integer")
     */
    private $defense;

    /**
     * @ORM\Column(type="integer")
     */
    private $perception;

    /**
     * @ORM\Column(type="integer")
     */
    private $insanity;

    /**
     * @ORM\Column(type="integer")
     */
    private $insanityMax;

    /**
     * @ORM\Column(type="integer")
     */
    private $corruption;

    /**
     * @ORM\Column(type="integer")
     */
    private $power;

    /**
     * @ORM\Column(type="integer")
     */
    private $size;

    /**
     * @ORM\Column(type="integer")
     */
    private $speed;

    /**
     * @ORM\Column(type="integer")
     */
    private $level;

    /**
     * @ORM\ManyToMany(targetEntity=Talent::class, inversedBy="characters")
     */
    private $talents;

    /**
     * @ORM\ManyToMany(targetEntity=Spell::class, inversedBy="characters")
     */
    private $spells;

    /**
     * @ORM\ManyToMany(targetEntity=Team::class, mappedBy="chracters")
     */
    private $teams;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="characters")
     * @ORM\JoinColumn(nullable=false)
     */
    private $owner;

    public function __construct()
    {
        $this->talents = new ArrayCollection();
        $this->spells = new ArrayCollection();
        $this->teams = new ArrayCollection();
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

    public function getStrength(): ?int
    {
        return $this->strength;
    }

    public function setStrength(int $strength): self
    {
        $this->strength = $strength;

        return $this;
    }

    public function getAgility(): ?int
    {
        return $this->agility;
    }

    public function setAgility(int $agility): self
    {
        $this->agility = $agility;

        return $this;
    }

    public function getIntellect(): ?int
    {
        return $this->intellect;
    }

    public function setIntellect(int $intellect): self
    {
        $this->intellect = $intellect;

        return $this;
    }

    public function getWillpower(): ?int
    {
        return $this->willpower;
    }

    public function setWillpower(int $willpower): self
    {
        $this->willpower = $willpower;

        return $this;
    }

    public function getHealth(): ?int
    {
        return $this->health;
    }

    public function setHealth(int $health): self
    {
        $this->health = $health;

        return $this;
    }

    public function getHealingRate(): ?int
    {
        return $this->healingRate;
    }

    public function setHealingRate(int $healingRate): self
    {
        $this->healingRate = $healingRate;

        return $this;
    }

    public function getDefense(): ?int
    {
        return $this->defense;
    }

    public function setDefense(int $defense): self
    {
        $this->defense = $defense;

        return $this;
    }

    public function getPerception(): ?int
    {
        return $this->perception;
    }

    public function setPerception(int $perception): self
    {
        $this->perception = $perception;

        return $this;
    }

    public function getInsanity(): ?int
    {
        return $this->insanity;
    }

    public function setInsanity(int $insanity): self
    {
        $this->insanity = $insanity;

        return $this;
    }

    public function getInsanityMax(): ?int
    {
        return $this->insanityMax;
    }

    public function setInsanityMax(int $insanityMax): self
    {
        $this->insanityMax = $insanityMax;

        return $this;
    }

    public function getCorruption(): ?int
    {
        return $this->corruption;
    }

    public function setCorruption(int $corruption): self
    {
        $this->corruption = $corruption;

        return $this;
    }

    public function getPower(): ?int
    {
        return $this->power;
    }

    public function setPower(int $power): self
    {
        $this->power = $power;

        return $this;
    }

    public function getSize(): ?int
    {
        return $this->size;
    }

    public function setSize(int $size): self
    {
        $this->size = $size;

        return $this;
    }

    public function getSpeed(): ?int
    {
        return $this->speed;
    }

    public function setSpeed(int $speed): self
    {
        $this->speed = $speed;

        return $this;
    }

    public function getLevel(): ?int
    {
        return $this->level;
    }

    public function setLevel(int $level): self
    {
        $this->level = $level;

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
        }

        return $this;
    }

    public function removeTalent(Talent $talent): self
    {
        $this->talents->removeElement($talent);

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
        }

        return $this;
    }

    public function removeSpell(Spell $spell): self
    {
        $this->spells->removeElement($spell);

        return $this;
    }

    /**
     * @return Collection|Team[]
     */
    public function getTeams(): Collection
    {
        return $this->teams;
    }

    public function addTeam(Team $team): self
    {
        if (!$this->teams->contains($team)) {
            $this->teams[] = $team;
            $team->addChracter($this);
        }

        return $this;
    }

    public function removeTeam(Team $team): self
    {
        if ($this->teams->removeElement($team)) {
            $team->removeChracter($this);
        }

        return $this;
    }

    public function getOwner(): ?User
    {
        return $this->owner;
    }

    public function setOwner(?User $owner): self
    {
        $this->owner = $owner;

        return $this;
    }
}
