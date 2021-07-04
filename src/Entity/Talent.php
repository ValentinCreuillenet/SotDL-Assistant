<?php

namespace App\Entity;

use App\Repository\TalentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TalentRepository::class)
 */
class Talent
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
     * @ORM\Column(type="string", length=1000)
     */
    private $description;

    /**
     * @ORM\ManyToMany(targetEntity=Tag::class, inversedBy="talents")
     */
    private $tags;

    /**
     * @ORM\ManyToMany(targetEntity=Character::class, mappedBy="talents")
     */
    private $characters;

    /**
     * @ORM\ManyToMany(targetEntity=Level::class, mappedBy="talents")
     */
    private $levels;

    /**
     * @ORM\ManyToMany(targetEntity=Path::class, mappedBy="talents")
     */
    private $paths;

    /**
     * @ORM\ManyToMany(targetEntity=Ancestry::class, mappedBy="talents")
     */
    private $ancestries;

    public function __construct()
    {
        $this->tags = new ArrayCollection();
        $this->characters = new ArrayCollection();
        $this->levels = new ArrayCollection();
        $this->paths = new ArrayCollection();
        $this->ancestries = new ArrayCollection();
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
     * @return Collection|Character[]
     */
    public function getCharacters(): Collection
    {
        return $this->characters;
    }

    public function addCharacter(Character $character): self
    {
        if (!$this->characters->contains($character)) {
            $this->characters[] = $character;
            $character->addTalent($this);
        }

        return $this;
    }

    public function removeCharacter(Character $character): self
    {
        if ($this->characters->removeElement($character)) {
            $character->removeTalent($this);
        }

        return $this;
    }

    /**
     * @return Collection|Level[]
     */
    public function getLevels(): Collection
    {
        return $this->levels;
    }

    public function addLevel(Level $level): self
    {
        if (!$this->levels->contains($level)) {
            $this->levels[] = $level;
            $level->addTalent($this);
        }

        return $this;
    }

    public function removeLevel(Level $level): self
    {
        if ($this->levels->removeElement($level)) {
            $level->removeTalent($this);
        }

        return $this;
    }

    /**
     * @return Collection|Path[]
     */
    public function getPaths(): Collection
    {
        return $this->paths;
    }

    public function addPath(Path $path): self
    {
        if (!$this->paths->contains($path)) {
            $this->paths[] = $path;
            $path->addTalent($this);
        }

        return $this;
    }

    public function removePath(Path $path): self
    {
        if ($this->paths->removeElement($path)) {
            $path->removeTalent($this);
        }

        return $this;
    }

    /**
     * @return Collection|Ancestry[]
     */
    public function getAncestries(): Collection
    {
        return $this->ancestries;
    }

    public function addAncestry(Ancestry $ancestry): self
    {
        if (!$this->ancestries->contains($ancestry)) {
            $this->ancestries[] = $ancestry;
            $ancestry->addTalent($this);
        }

        return $this;
    }

    public function removeAncestry(Ancestry $ancestry): self
    {
        if ($this->ancestries->removeElement($ancestry)) {
            $ancestry->removeTalent($this);
        }

        return $this;
    }
}
