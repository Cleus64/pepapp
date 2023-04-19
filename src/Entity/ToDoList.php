<?php

namespace App\Entity;

use App\Repository\ToDoListRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ToDoListRepository::class)]
class ToDoList
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $list = null;

    #[ORM\OneToOne(mappedBy: 'toDoList', cascade: ['persist', 'remove'])]
    private ?User $User = null;




    public function getId(): ?int
    {
        return $this->id;
    }

    public function getList(): ?string
    {
        return $this->list;
    }

    public function setList(?string $list): self
    {
        $this->list = $list;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->User;
    }

    public function setUser(?User $User): self
    {
        // unset the owning side of the relation if necessary
        if ($User === null && $this->User !== null) {
            $this->User->setToDoList(null);
        }

        // set the owning side of the relation if necessary
        if ($User !== null && $User->getToDoList() !== $this) {
            $User->setToDoList($this);
        }

        $this->User = $User;

        return $this;
    }



}
