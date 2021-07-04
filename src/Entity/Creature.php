<?php

namespace App\Entity;

use App\Repository\CreatureRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CreatureRepository::class)
 */
class Creature
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
    private $difficulty;

    /**
     * @ORM\Column(type="integer")
     */
    private $size;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $spook;

    /**
     * @ORM\Column(type="integer")
     */
    private $perception;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $sight;

    /**
     * @ORM\Column(type="integer")
     */
    private $defense;

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
    private $speed;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $moveTrait;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $immune;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $weakness;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    private $defenseTrait;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $otherTraits;

    /**
     * @ORM\Column(type="integer")
     */
    private $insanity;

    /**
     * @ORM\Column(type="integer")
     */
    private $corruption;

    /**
     * @ORM\Column(type="string", length=2500, nullable=true)
     */
    private $attackOptions;

    /**
     * @ORM\Column(type="string", length=2500, nullable=true)
     */
    private $specialAttacks;

    /**
     * @ORM\Column(type="string", length=2500, nullable=true)
     */
    private $specialActions;

    /**
     * @ORM\Column(type="string", length=2500, nullable=true)
     */
    private $endOfRound;

    /**
     * @ORM\Column(type="integer")
     */
    private $power;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $race;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    private $description;

    /**
     * @ORM\ManyToMany(targetEntity=Spell::class, inversedBy="creatures")
     */
    private $spells;

    /**
     * @ORM\ManyToMany(targetEntity=Tag::class, inversedBy="creatures")
     */
    private $tags;

    /**
     * @ORM\ManyToMany(targetEntity=Team::class, mappedBy="creatures")
     */
    private $teams;

    public function __construct()
    {
        $this->spells = new ArrayCollection();
        $this->tags = new ArrayCollection();
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

    public function getDifficulty(): ?int
    {
        return $this->difficulty;
    }

    public function setDifficulty(int $difficulty): self
    {
        $this->difficulty = $difficulty;

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

    public function getSpook(): ?string
    {
        return $this->spook;
    }

    public function setSpook(?string $spook): self
    {
        $this->spook = $spook;

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

    public function getSight(): ?string
    {
        return $this->sight;
    }

    public function setSight(?string $sight): self
    {
        $this->sight = $sight;

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

    public function getSpeed(): ?int
    {
        return $this->speed;
    }

    public function setSpeed(int $speed): self
    {
        $this->speed = $speed;

        return $this;
    }

    public function getMoveTrait(): ?string
    {
        return $this->moveTrait;
    }

    public function setMoveTrait(string $moveTrait): self
    {
        $this->moveTrait = $moveTrait;

        return $this;
    }

    public function getImmune(): ?string
    {
        return $this->immune;
    }

    public function setImmune(string $immune): self
    {
        $this->immune = $immune;

        return $this;
    }

    public function getWeakness(): ?string
    {
        return $this->weakness;
    }

    public function setWeakness(string $weakness): self
    {
        $this->weakness = $weakness;

        return $this;
    }

    public function getDefenseTrait(): ?string
    {
        return $this->defenseTrait;
    }

    public function setDefenseTrait(string $defenseTrait): self
    {
        $this->defenseTrait = $defenseTrait;

        return $this;
    }

    public function getOtherTraits(): ?string
    {
        return $this->otherTraits;
    }

    public function setOtherTraits(string $otherTraits): self
    {
        $this->otherTraits = $otherTraits;

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

    public function getCorruption(): ?int
    {
        return $this->corruption;
    }

    public function setCorruption(int $corruption): self
    {
        $this->corruption = $corruption;

        return $this;
    }

    public function getAttackOptions(): ?string
    {
        return $this->attackOptions;
    }

    public function setAttackOptions(?string $attackOptions): self
    {
        $this->attackOptions = $attackOptions;

        return $this;
    }

    public function getSpecialAttacks(): ?string
    {
        return $this->specialAttacks;
    }

    public function setSpecialAttacks(?string $specialAttacks): self
    {
        $this->specialAttacks = $specialAttacks;

        return $this;
    }

    public function getSpecialActions(): ?string
    {
        return $this->specialActions;
    }

    public function setSpecialActions(?string $specialActions): self
    {
        $this->specialActions = $specialActions;

        return $this;
    }

    public function getEndOfRound(): ?string
    {
        return $this->endOfRound;
    }

    public function setEndOfRound(?string $endOfRound): self
    {
        $this->endOfRound = $endOfRound;

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

    public function getRace(): ?string
    {
        return $this->race;
    }

    public function setRace(?string $race): self
    {
        $this->race = $race;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
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
        }

        return $this;
    }

    public function removeSpell(Spell $spell): self
    {
        $this->spells->removeElement($spell);

        return $this;
    }

    /**
     * @return Collection|Tag[]
     */
    public function getTags(): Collection
    {
        return $this->tags;
    }

    public function addTag(Tag $tag): self
    {
        if (!$this->tags->contains($tag)) {
            $this->tags[] = $tag;
        }

        return $this;
    }

    public function removeTag(Tag $tag): self
    {
        $this->tags->removeElement($tag);

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
            $team->addCreature($this);
        }

        return $this;
    }

    public function removeTeam(Team $team): self
    {
        if ($this->teams->removeElement($team)) {
            $team->removeCreature($this);
        }

        return $this;
    }
}
