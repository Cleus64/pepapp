<?php

namespace App\DataFixtures;

use App\Entity\Equipement;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class EquipementFixtures extends Fixture
{
    //===================================================================//
    //==========================PROPRIETES ==============================//
    //===================================================================//
    public const GROUPE_SHAKE="Shake-Sundae";
    public const GROUPE_ABS="groupe-abs";
    public const GROUPE_ADOUCISSEUR="groupe_adoucisseur";
    public const GROUPE_ADJ="groupe-adj";
    public const GROUPE_CHAMBREFROIDE="groupe-chambre-froide";
    public const GROUPE_CONVOYEUR="groupe-convoyeur";
    public const GROUPE_FOUR="groupe-four";
    public const GROUPE_FRITEUSE="groupe-friteuse";
    public const GROUPE_GRILL="groupe-grill";
    public const GROUPE_CAFE="groupe-machine-cafe";
    public const GROUPE_JUS="groupe-jus";
    public const GROUPE_LAVE_PLATEAUX="groupe-lave-plateaux";
    public const GROUPE_STEAMER="groupe-steamer";
    public const GROUPE_SYSTEME_BOISSONS="groupe-systeme-boissons";
    public const GROUPE_TESTO="groupe-testo";
    public const GROUPE_TOASTER_UNIVERSEL="groupe-toaster-universel";
    public const GROUPE_APPAREIL_FRIGORIFIQUE="groupe-appareil-frigorifique";
    public const GROUPE_CONTENEUR="groupe-conteneur";
    public const GROUPE_DISTRIBUTEUR_SAUCE="groupe-distributeur-sauce";
    public const GROUPE_MACHINE_GLACONS="groupe-machine-glacons";
    public const GROUPE_SPATULE="groupe-spatule";
    public const GROUPE_UHC="groupe-uhc";

    public function load(ObjectManager $manager): void
    {
        $equipement = new Equipement();
        $equipement->setNom("Shake Sundae");
        $manager->persist($equipement);
        $this->addReference(self::GROUPE_SHAKE, $equipement);

        $equipement = new Equipement();
        $equipement->setNom("ABS");
        $manager->persist($equipement);
        $this->addReference(self::GROUPE_ABS, $equipement);

        $equipement = new Equipement();
        $equipement->setNom("Adoucisseur");
        $manager->persist($equipement);
        $this->addReference(self::GROUPE_ADOUCISSEUR, $equipement);

        $equipement = new Equipement();
        $equipement->setNom("Aire de jeux");
        $manager->persist($equipement);
        $this->addReference(self::GROUPE_ADJ, $equipement);

        $equipement = new Equipement();
        $equipement->setNom("Chambres Froides");
        $manager->persist($equipement);
        $this->addReference(self::GROUPE_CHAMBREFROIDE, $equipement);

        $equipement = new Equipement();
        $equipement->setNom("Convoyeur");
        $manager->persist($equipement);
        $this->addReference(self::GROUPE_CONVOYEUR, $equipement);

        $equipement = new Equipement();
        $equipement->setNom("Four");
        $manager->persist($equipement);
        $this->addReference(self::GROUPE_FOUR, $equipement);

        $equipement = new Equipement();
        $equipement->setNom("Friteuses");
        $manager->persist($equipement);
        $this->addReference(self::GROUPE_FRITEUSE, $equipement);

        $equipement = new Equipement();
        $equipement->setNom("Grills");
        $manager->persist($equipement);
        $this->addReference(self::GROUPE_GRILL, $equipement);

        $equipement = new Equipement();
        $equipement->setNom("Machine à café");
        $manager->persist($equipement);
        $this->addReference(self::GROUPE_CAFE, $equipement);

        $equipement = new Equipement();
        $equipement->setNom("Machine à jus d'orange");
        $manager->persist($equipement);
        $this->addReference(self::GROUPE_JUS, $equipement);

        $equipement = new Equipement();
        $equipement->setNom("Lave Plateaux");
        $manager->persist($equipement);
        $this->addReference(self::GROUPE_LAVE_PLATEAUX, $equipement);

        $equipement = new Equipement();
        $equipement->setNom("Steamer");
        $manager->persist($equipement);
        $this->addReference(self::GROUPE_STEAMER, $equipement);

        $equipement = new Equipement();
        $equipement->setNom("Système boissons");
        $manager->persist($equipement);
        $this->addReference(self::GROUPE_SYSTEME_BOISSONS, $equipement);

        $equipement = new Equipement();
        $equipement->setNom("Testo");
        $manager->persist($equipement);
        $this->addReference(self::GROUPE_TESTO, $equipement);

        $equipement = new Equipement();
        $equipement->setNom("Toaster universel");
        $manager->persist($equipement);
        $this->addReference(self::GROUPE_TOASTER_UNIVERSEL, $equipement);

        $equipement = new Equipement();
        $equipement->setNom("Appareils frigorifiques");
        $manager->persist($equipement);
        $this->addReference(self::GROUPE_APPAREIL_FRIGORIFIQUE, $equipement);

        $equipement = new Equipement();
        $equipement->setNom("Conteneur conservateur huiles usagées");
        $manager->persist($equipement);
        $this->addReference(self::GROUPE_CONTENEUR, $equipement);

        $equipement = new Equipement();
        $equipement->setNom("Distributeur sauce");
        $manager->persist($equipement);
        $this->addReference(self::GROUPE_DISTRIBUTEUR_SAUCE, $equipement);

        $equipement = new Equipement();
        $equipement->setNom("Machine à Glaçons");
        $manager->persist($equipement);
        $this->addReference(self::GROUPE_MACHINE_GLACONS, $equipement);

        $equipement = new Equipement();
        $equipement->setNom("Spatules");
        $manager->persist($equipement);
        $this->addReference(self::GROUPE_SPATULE, $equipement);

        $equipement = new Equipement();
        $equipement->setNom("UHC");
        $manager->persist($equipement);
        $this->addReference(self::GROUPE_UHC, $equipement);

        $manager->flush();
    }
}
