<?php

namespace App\Entity;

use App\Repository\SpellRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SpellRepository::class)
 */
class Spell
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
    private $tradition;

    /**
     * @ORM\Column(type="integer")
     */
    private $rank;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $label;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $area;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $duration;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $target;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $requirement;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $damage;

    /**
     * @ORM\Column(type="string", length=2500, nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $twentyPlus;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $triggered;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $sacrifice;

    /**
     * @ORM\ManyToMany(targetEntity=Tag::class, inversedBy="spells")
     */
    private $tags;

    public function __construct()
    {
        $this->tags = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTradition(): ?string
    {
        return $this->tradition;
    }

    public function setTradition(string $tradition): self
    {
        $this->tradition = $tradition;

        return $this;
    }

    public function getRank(): ?int
    {
        return $this->rank;
    }

    public function setRank(int $rank): self
    {
        $this->rank = $rank;

        return $this;
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

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getArea(): ?string
    {
        return $this->area;
    }

    public function setArea(?string $area): self
    {
        $this->area = $area;

        return $this;
    }

    public function getDuration(): ?string
    {
        return $this->duration;
    }

    public function setDuration(?string $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    public function getTarget(): ?string
    {
        return $this->target;
    }

    public function setTarget(?string $target): self
    {
        $this->target = $target;

        return $this;
    }

    public function getRequirement(): ?string
    {
        return $this->requirement;
    }

    public function setRequirement(?string $requirement): self
    {
        $this->requirement = $requirement;

        return $this;
    }

    public function getDamage(): ?string
    {
        return $this->damage;
    }

    public function setDamage(?string $damage): self
    {
        $this->damage = $damage;

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

    public function getTwentyPlus(): ?string
    {
        return $this->twentyPlus;
    }

    public function setTwentyPlus(?string $twentyPlus): self
    {
        $this->twentyPlus = $twentyPlus;

        return $this;
    }

    public function getTriggered(): ?string
    {
        return $this->triggered;
    }

    public function setTriggered(?string $triggered): self
    {
        $this->triggered = $triggered;

        return $this;
    }

    public function getSacrifice(): ?string
    {
        return $this->sacrifice;
    }

    public function setSacrifice(?string $sacrifice): self
    {
        $this->sacrifice = $sacrifice;

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
}
