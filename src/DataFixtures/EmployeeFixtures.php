<?php

namespace App\DataFixtures;

use App\Entity\Employee;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class EmployeeFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $employees=[
            [
            "prenom"=>'Rémi',
            ],
            [
            "prenom"=>'Andy',
            ],
            [
            "prenom"=>'Joël',
            ],
            [
            "prenom"=>'Florian',
            ],
            [
            "prenom"=>'Loïc',
            ],
            [
            "prenom"=>'Geetha',
            ],
            [
            "prenom"=>'Lucie',
            ],
            [
            "prenom"=>'Haatim',
            ],
            [
            "prenom"=>'Sindu',
            ],
            [
            "prenom"=>'Cyril',
            ],
            [
            "prenom"=>'Bruno',
            ],
            [
            "prenom"=>'Kelly',
            ],
            
        ];
        foreach ($employees as $employee) {
            $newEmployee = new Employee();
            $newEmployee->setPrenom($employee["prenom"]);
            $manager->persist($newEmployee);
    }


        $manager->flush();
    }
}
