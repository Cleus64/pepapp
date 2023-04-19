<?php

namespace App\Entity;

use App\Repository\TacheRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use PhpParser\Node\Expr\FuncCall;

#[ORM\Entity(repositoryClass: TacheRepository::class)]
class Tache
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;


    #[ORM\ManyToOne(inversedBy: 'taches')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Periodicite $periodicite = null;


    #[ORM\ManyToOne(inversedBy: 'tache')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Equipement $equipement = null;

    #[ORM\ManyToOne(inversedBy: 'tache')]
    private ?Restaurant $restaurant = null;

    #[ORM\OneToMany(mappedBy: 'tache', targetEntity: Date::class)]
    private Collection $dates;

    public function __construct()
    {
        $this->dates = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->nom;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPeriodicite(): ?Periodicite
    {
        return $this->periodicite;
    }

    public function setPeriodicite(?Periodicite $periodicite): self
    {
        $this->periodicite = $periodicite;

        return $this;
    }

    public function getEquipement(): ?Equipement
    {
        return $this->equipement;
    }

    public function setEquipement(?Equipement $equipement): self
    {
        $this->equipement = $equipement;

        return $this;
    }

    public function getRestaurant(): ?Restaurant
    {
        return $this->restaurant;
    }

    public function setRestaurant(?Restaurant $restaurant): self
    {
        $this->restaurant = $restaurant;

        return $this;
    }

    /**
     * @return Collection<int, Date>
     */
    public function getDates(): Collection
    {
        return $this->dates;
    }

    public function addDate(Date $date): self
    {
        if (!$this->dates->contains($date)) {
            $this->dates->add($date);
            $date->setTache($this);
        }

        return $this;
    }

    public function removeDate(Date $date): self
    {
        if ($this->dates->removeElement($date)) {
            // set the owning side to null (unless already changed)
            if ($date->getTache() === $this) {
                $date->setTache(null);
            }
        }

        return $this;
    }


}
