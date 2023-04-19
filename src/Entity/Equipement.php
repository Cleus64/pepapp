<?php

namespace App\Entity;

use App\Repository\EquipementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EquipementRepository::class)]
class Equipement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\OneToMany(mappedBy: 'equipement', targetEntity: Fiches::class)]
    private Collection $fiches;

    #[ORM\OneToMany(mappedBy: 'equipement', targetEntity: Tache::class, orphanRemoval: true)]
    private Collection $tache;

    public function __construct()
    {
        $this->fiches = new ArrayCollection();
        $this->tache = new ArrayCollection();
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

    /**
     * @return Collection<int, Fiches>
     */
    public function getFiches(): Collection
    {
        return $this->fiches;
    }

    public function addFich(Fiches $fich): self
    {
        if (!$this->fiches->contains($fich)) {
            $this->fiches->add($fich);
            $fich->setEquipement($this);
        }

        return $this;
    }

    public function removeFich(Fiches $fich): self
    {
        if ($this->fiches->removeElement($fich)) {
            // set the owning side to null (unless already changed)
            if ($fich->getEquipement() === $this) {
                $fich->setEquipement(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Tache>
     */
    public function getTache(): Collection
    {
        return $this->tache;
    }

    public function addTache(Tache $tache): self
    {
        if (!$this->tache->contains($tache)) {
            $this->tache->add($tache);
            $tache->setEquipement($this);
        }

        return $this;
    }

    public function removeTache(Tache $tache): self
    {
        if ($this->tache->removeElement($tache)) {
            // set the owning side to null (unless already changed)
            if ($tache->getEquipement() === $this) {
                $tache->setEquipement(null);
            }
        }

        return $this;
    }
}
