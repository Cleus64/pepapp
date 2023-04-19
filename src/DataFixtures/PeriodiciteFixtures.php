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
    public const GROUPE_QUOTIDIEN="groupe-quotidien";
    public const GROUPE_BIHEBDOMADAIRE="groupe_bihebdomadaire";
    public const GROUPE_HEBDOMADAIRE="groupe_hebdomadaire";
    public const GROUPE_BIMENSUEL="groupe-bimensuel";
    public const GROUPE_MENSUEL="groupe-mensuel";
    public const GROUPE_TRIMESTRIEL="groupe-trimestriel";
    public const GROUPE_EXCEPTIONNEL="groupe-exceptionnel";

    //===================================================================//
    //==========================METHODES=================================//
    //===================================================================//

    public function load(ObjectManager $manager): void
    {
        $periodicite = new Periodicite();
        $periodicite->setGroupe("Quotidien");
        $manager->persist($periodicite);
        $this->addReference(self::GROUPE_QUOTIDIEN, $periodicite);

        $periodicite = new Periodicite();
        $periodicite->setGroupe("Bihebdomadaire");
        $manager->persist($periodicite);
        $this->addReference(self::GROUPE_BIHEBDOMADAIRE, $periodicite);

        $periodicite = new Periodicite();
        $periodicite->setGroupe("Hebdomadaire");
        $manager->persist($periodicite);
        $this->addReference(self::GROUPE_HEBDOMADAIRE, $periodicite);

        $periodicite = new Periodicite();
        $periodicite->setGroupe("Bimensuel");
        $manager->persist($periodicite);
        $this->addReference(self::GROUPE_BIMENSUEL, $periodicite);

        $periodicite = new Periodicite();
        $periodicite->setGroupe("Mensuel");
        $manager->persist($periodicite);
        $this->addReference(self::GROUPE_MENSUEL, $periodicite);

        $periodicite = new Periodicite();
        $periodicite->setGroupe("Trimestriel");
        $manager->persist($periodicite);
        $this->addReference(self::GROUPE_TRIMESTRIEL, $periodicite);

        $periodicite = new Periodicite();
        $periodicite->setGroupe("Exceptionnel");
        $manager->persist($periodicite);
        $this->addReference(self::GROUPE_EXCEPTIONNEL, $periodicite);

        $manager->flush();
    }
}
