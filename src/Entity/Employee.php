<?php

namespace App\Entity;

use App\Repository\EmployeeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EmployeeRepository::class)]
class Employee
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom = null;

    #[ORM\OneToMany(mappedBy: 'employee', targetEntity: Date::class)]
    private Collection $date;

    public function __construct()
    {
        $this->date = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->prenom;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * @return Collection<int, Date>
     */
    public function getDate(): Collection
    {
        return $this->date;
    }

    public function addDate(Date $date): self
    {
        if (!$this->date->contains($date)) {
            $this->date->add($date);
            $date->setEmployee($this);
        }

        return $this;
    }

    public function removeDate(Date $date): self
    {
        if ($this->date->removeElement($date)) {
            // set the owning side to null (unless already changed)
            if ($date->getEmployee() === $this) {
                $date->setEmployee(null);
            }
        }

        return $this;
    }
}
