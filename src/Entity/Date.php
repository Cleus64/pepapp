<?php

namespace App\Entity;

use App\Repository\DateRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DateRepository::class)]
class Date
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $libDate = null;

    #[ORM\ManyToOne(inversedBy: 'date')]
    private ?User $user = null;

    #[ORM\ManyToOne(inversedBy: 'dates')]
    private ?Tache $tache = null;

    #[ORM\ManyToOne(inversedBy: 'date')]
    private ?Employee $employee = null;

    public function __toString()
    {
        return $this->getEmployee();
    }
    
    public function __construct()
    {
        $this->libDate = new \DateTime('now');
    }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibDate(): ?\DateTimeInterface
    {
        return $this->libDate;
    }

    public function setLibDate(\DateTimeInterface $libDate): self
    {
        $this->libDate = $libDate;
        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getTache(): ?Tache
    {
        return $this->tache;
    }

    public function setTache(?Tache $tache): self
    {
        $this->tache = $tache;

        return $this;
    }

    public function getEmployee(): ?Employee
    {
        return $this->employee;
    }

    public function setEmployee(?Employee $employee): self
    {
        $this->employee = $employee;

        return $this;
    }
}
