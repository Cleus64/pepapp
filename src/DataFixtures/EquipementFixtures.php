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
    public const SHAKE="Shake-Sundae";
    public const ABS="groupe-abs";
    public const ADOUCISSEUR="adoucisseur";
    public const ADJ="groupe-adj";
    public const CHAMBREFROIDE="groupe-chambre-froide";
    public const CONVOYEUR="groupe-convoyeur";
    public const FOUR="groupe-four";
    public const FRITEUSE="groupe-friteuse";
    public const GRILL="groupe-grill";
    public const CAFE="groupe-machine-cafe";
    public const JUS="groupe-jus";
    public const LAVE_PLATEAUX="groupe-lave-plateaux";
    public const STEAMER="groupe-steamer";
    public const SYSTEME_BOISSONS="groupe-systeme-boissons";
    public const TESTO="groupe-testo";
    public const TOASTER_UNIVERSEL="groupe-toaster-universel";
    public const APPAREIL_FRIGORIFIQUE="groupe-appareil-frigorifique";
    public const CONTENEUR="groupe-conteneur";
    public const DISTRIBUTEUR_SAUCE="groupe-distributeur-sauce";
    public const MACHINE_GLACONS="groupe-machine-glacons";
    public const SPATULE="groupe-spatule";
    public const UHC="groupe-uhc";

    public function load(ObjectManager $manager): void
    {
        $equipements =[
            [
                "nom" => "Shake Sundae",
                "self" => (self::SHAKE)
            ],
            [
                "nom" => "ABS",
                "self" => (self::ABS)
            ],
            [
                "nom" => "Adoucisseur",
                "self" => (self::ADOUCISSEUR)
            ],
            [
                "nom" => "Aire de jeux",
                "self" => (self::ADJ)
            ],
            [
                "nom" => "Chambre froide",
                "self" => (self::CHAMBREFROIDE)
            ],
            [
                "nom" => "Convoyeur",
                "self" => (self::CONVOYEUR)
            ],
            [
                "nom" => "Four",
                "self" => (self::FOUR)
            ],
            [
                "nom" => "Friteuse",
                "self" => (self::FRITEUSE)
            ],
            [
                "nom" => "Grill",
                "self" => (self::GRILL)
            ],
            [
                "nom" => "Machine à café",
                "self" => (self::CAFE)
            ],
            [
                "nom" => "Lave Plateaux",
                "self" => (self::LAVE_PLATEAUX)
            ],
            [
                "nom" => "Machine à jus d'orange",
                "self" => (self::JUS)
            ],
            [
                "nom" => "Steamer",
                "self" => (self::STEAMER)
            ],
            [
                "nom" => "Système boissons",
                "self" => (self::SYSTEME_BOISSONS)
            ],
            [
                "nom" => "Testo",
                "self" => (self::TESTO)
            ],
            [
                "nom" => "Toaster Universel",
                "self" => (self::TOASTER_UNIVERSEL)
            ],
            [
                "nom" => "Appareil Frigorifique",
                "self" => (self::APPAREIL_FRIGORIFIQUE)
            ],
            [
                "nom" => "Conteneur huiles usagées",
                "self" => (self::CONTENEUR)
            ],
            [
                "nom" => "Distributeur sauce",
                "self" => (self::DISTRIBUTEUR_SAUCE)
            ],
            [
                "nom" => "Spatule",
                "self" => (self::SPATULE)
            ],
            [
                "nom" => "UHC",
                "self" => (self::UHC)
            ],
            [
                "nom" => "Machine à glaçons",
                "self" => (self::MACHINE_GLACONS)
            ],
        ];
        foreach ($equipements as $equipement) {
            $newEquipement = new Equipement();
            $newEquipement->setNom($equipement["nom"]);
            $manager->persist($newEquipement);
            $this->addReference($equipement["self"], $newEquipement);
        };
        
        $manager->flush();
    }
}
