<?php

namespace App\Entity;

use App\Repository\AncestryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AncestryRepository::class)
 */
class Ancestry
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
     * @ORM\Column(type="string", length=255)
     */
    private $startingAttributes;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $perception;

    /**
     * @ORM\Column(type="integer")
     */
    private $defense;

    /**
     * @ORM\Column(type="integer")
     */
    private $health;

    /**
     * @ORM\Column(type="integer")
     */
    private $healingRate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $size;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $speed;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $power;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $insanity;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $corruption;

    /**
     * @ORM\ManyToMany(targetEntity=Talent::class, inversedBy="ancestries")
     */
    private $talents;

    /**
     * @ORM\OneToOne(targetEntity=Level::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $levelFour;

    public function __construct()
    {
        $this->talents = new ArrayCollection();
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

    public function getStartingAttributes(): ?string
    {
        return $this->startingAttributes;
    }

    public function setStartingAttributes(string $startingAttributes): self
    {
        $this->startingAttributes = $startingAttributes;

        return $this;
    }

    public function getPerception(): ?string
    {
        return $this->perception;
    }

    public function setPerception(string $perception): self
    {
        $this->perception = $perception;

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

    public function getSize(): ?string
    {
        return $this->size;
    }

    public function setSize(string $size): self
    {
        $this->size = $size;

        return $this;
    }

    public function getSpeed(): ?string
    {
        return $this->speed;
    }

    public function setSpeed(string $speed): self
    {
        $this->speed = $speed;

        return $this;
    }

    public function getPower(): ?string
    {
        return $this->power;
    }

    public function setPower(string $power): self
    {
        $this->power = $power;

        return $this;
    }

    public function getInsanity(): ?string
    {
        return $this->insanity;
    }

    public function setInsanity(string $insanity): self
    {
        $this->insanity = $insanity;

        return $this;
    }

    public function getCorruption(): ?string
    {
        return $this->corruption;
    }

    public function setCorruption(string $corruption): self
    {
        $this->corruption = $corruption;

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

    public function getLevelFour(): ?Level
    {
        return $this->levelFour;
    }

    public function setLevelFour(Level $levelFour): self
    {
        $this->levelFour = $levelFour;

        return $this;
    }
}
