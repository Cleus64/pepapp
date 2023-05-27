<?php

namespace App\Entity;

use App\Entity\Notes;
use App\Entity\Tache;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\RestaurantRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;

#[ORM\Entity(repositoryClass: RestaurantRepository::class)]
// #[ApiResource(normalizationContext: ['groups' => ['restaurant']])]
class Restaurant
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\OneToMany(mappedBy: 'restaurant', targetEntity: Notes::class, orphanRemoval: true)]
    private Collection $notes;

    #[ORM\OneToMany(mappedBy: 'restaurant', targetEntity: Tache::class)]
    private Collection $tache;

    #[ORM\ManyToMany(targetEntity: User::class, mappedBy: 'restaurants')]
    private Collection $users;



    public function __construct()
    {
        $this->notes = new ArrayCollection();
        $this->tache = new ArrayCollection();
        $this->users = new ArrayCollection();
        
    }

    public function __toString()
    {
        return $this->getNom();
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
     * @return Collection<int, Notes>
     */
    public function getNotes(): Collection
    {
        return $this->notes;
    }

    public function addNote(Notes $note): self
    {
        if (!$this->notes->contains($note)) {
            $this->notes->add($note);
            $note->setRestaurant($this);
        }

        return $this;
    }

    public function removeNote(Notes $note): self
    {
        if ($this->notes->removeElement($note)) {
            // set the owning side to null (unless already changed)
            if ($note->getRestaurant() === $this) {
                $note->setRestaurant(null);
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
            $tache->setRestaurant($this);
        }

        return $this;
    }

    public function removeTache(Tache $tache): self
    {
        if ($this->tache->removeElement($tache)) {
            // set the owning side to null (unless already changed)
            if ($tache->getRestaurant() === $this) {
                $tache->setRestaurant(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users->add($user);
            $user->addRestaurant($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->removeElement($user)) {
            $user->removeRestaurant($this);
        }

        return $this;
    }


}
