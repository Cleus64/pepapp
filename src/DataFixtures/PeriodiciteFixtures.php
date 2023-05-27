<?php

namespace App\DataFixtures;

use App\Entity\Periodicite;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PeriodiciteFixtures extends Fixture
{
    //===================================================================//
    //==========================PROPRIETES ==============================//
    //===================================================================//
    public const QUOTIDIEN="groupe-quotidien";
    public const BIHEBDOMADAIRE="bihebdomadaire";
    public const HEBDOMADAIRE="hebdomadaire";
    public const BIMENSUEL="groupe-bimensuel";
    public const MENSUEL="groupe-mensuel";
    public const TRIMESTRIEL="groupe-trimestriel";
    public const EXCEPTIONNEL="groupe-exceptionnel";

    //===================================================================//
    //==========================METHODES=================================//
    //===================================================================//

    public function load(ObjectManager $manager): void
    {
        $periodicite = new Periodicite();
        $periodicite->setGroupe("Quotidien");
        $manager->persist($periodicite);
        $this->addReference(self::QUOTIDIEN, $periodicite);

        $periodicite = new Periodicite();
        $periodicite->setGroupe("Bihebdomadaire");
        $manager->persist($periodicite);
        $this->addReference(self::BIHEBDOMADAIRE, $periodicite);

        $periodicite = new Periodicite();
        $periodicite->setGroupe("Hebdomadaire");
        $manager->persist($periodicite);
        $this->addReference(self::HEBDOMADAIRE, $periodicite);

        $periodicite = new Periodicite();
        $periodicite->setGroupe("Bimensuel");
        $manager->persist($periodicite);
        $this->addReference(self::BIMENSUEL, $periodicite);

        $periodicite = new Periodicite();
        $periodicite->setGroupe("Mensuel");
        $manager->persist($periodicite);
        $this->addReference(self::MENSUEL, $periodicite);

        $periodicite = new Periodicite();
        $periodicite->setGroupe("Trimestriel");
        $manager->persist($periodicite);
        $this->addReference(self::TRIMESTRIEL, $periodicite);

        $periodicite = new Periodicite();
        $periodicite->setGroupe("Exceptionnel");
        $manager->persist($periodicite);
        $this->addReference(self::EXCEPTIONNEL, $periodicite);

        $manager->flush();
    }
}
