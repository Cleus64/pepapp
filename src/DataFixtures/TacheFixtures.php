<?php

namespace App\DataFixtures;

use App\Entity\Tache;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class TacheFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $taches =[
            [
                "nom" => "Shake - Rupture de la chaîne bactérienne toppings",
                "periodicite" => (PeriodiciteFixtures::BIHEBDOMADAIRE),
                "equipement" => (EquipementFixtures::SHAKE)
            ],
            [
                "nom" => "ABS - Nettoyage du cylindre à Glaçons",
                "periodicite" => (PeriodiciteFixtures::HEBDOMADAIRE),
                "equipement" => (EquipementFixtures::ABS)
            ],
            [
                "nom" => "Adoucisseur - Contrôle du niveau de sel",
                "periodicite" => (PeriodiciteFixtures::HEBDOMADAIRE),
                "equipement" => (EquipementFixtures::ADOUCISSEUR)
            ],
            [
                "nom" => "Aire de jeu - Inspection hebdomadaire",
                "periodicite" => (PeriodiciteFixtures::HEBDOMADAIRE),
                "equipement" => (EquipementFixtures::ADJ)
            ],
            [
                "nom" => "Chambre froide - Nettoyage des grilles des évaporateurs",
                "periodicite" => (PeriodiciteFixtures::HEBDOMADAIRE),
                "equipement" => (EquipementFixtures::CHAMBREFROIDE)
            ],
            [
                "nom" => "Convoyeur - Test des coup de poing de sécurité, arrêts d'urgence",
                "periodicite" => (PeriodiciteFixtures::HEBDOMADAIRE),
                "equipement" => (EquipementFixtures::CONVOYEUR)
            ],
            [
                "nom" => "Four - Nettoyage et aseptisation des grilles et des supports",
                "periodicite" => (PeriodiciteFixtures::HEBDOMADAIRE),
                "equipement" => (EquipementFixtures::FOUR)
            ],
            [
                "nom" => "Friteuse - Nettoyage Arrière",
                "periodicite" => (PeriodiciteFixtures::HEBDOMADAIRE),
                "equipement" => (EquipementFixtures::FRITEUSE)
            ],
            [
                "nom" => "Grill - Contôle du temps de cuisson",
                "periodicite" => (PeriodiciteFixtures::HEBDOMADAIRE),
                "equipement" => (EquipementFixtures::GRILL)
            ],
            [
                "nom" => "Grill - Nettoyage des bords",
                "periodicite" => (PeriodiciteFixtures::HEBDOMADAIRE),
                "equipement" => (EquipementFixtures::GRILL)
            ],
            [
                "nom" => "Grill - Nettoyage de extérieur et arrère",
                "periodicite" => (PeriodiciteFixtures::HEBDOMADAIRE),
                "equipement" => (EquipementFixtures::GRILL)
            ],
            [
                "nom" => "Machine à café - Nettoyage bac à grains et bec",
                "periodicite" => (PeriodiciteFixtures::HEBDOMADAIRE),
                "equipement" => (EquipementFixtures::CAFE)
            ],
            [
                "nom" => "Machine à café - Contrôle volume et température",
                "periodicite" => (PeriodiciteFixtures::HEBDOMADAIRE),
                "equipement" => (EquipementFixtures::CAFE)
            ],
            [
                "nom" => "Machine à café - Nettoyage poudre hebdomadaire",
                "periodicite" => (PeriodiciteFixtures::HEBDOMADAIRE),
                "equipement" => (EquipementFixtures::CAFE)
            ],
            [
                "nom" => "Machine à jus d'orange - Nettoyage hebdomadaire",
                "periodicite" => (PeriodiciteFixtures::HEBDOMADAIRE),
                "equipement" => (EquipementFixtures::JUS)
            ],
            [
                "nom" => "Lave Plateaux - Nettoyage hebdomadaire",
                "periodicite" => (PeriodiciteFixtures::HEBDOMADAIRE),
                "equipement" => (EquipementFixtures::LAVE_PLATEAUX)
            ],
            [
                "nom" => "Shake - Rupture chaîne bactérienne sirops",
                "periodicite" => (PeriodiciteFixtures::HEBDOMADAIRE),
                "equipement" => (EquipementFixtures::SHAKE)
            ],
            [
                "nom" => "Shake - Nettoyage des filtres à air",
                "periodicite" => (PeriodiciteFixtures::HEBDOMADAIRE),
                "equipement" => (EquipementFixtures::SHAKE)
            ],
            [
                "nom" => "Shake - Nettoyage et aseptisation des bains marie et pompes",
                "periodicite" => (PeriodiciteFixtures::HEBDOMADAIRE),
                "equipement" => (EquipementFixtures::SHAKE)
            ],
            [
                "nom" => "Steamer - Détartrage de la chambre à vapeur",
                "periodicite" => (PeriodiciteFixtures::HEBDOMADAIRE),
                "equipement" => (EquipementFixtures::STEAMER)
            ],
            [
                "nom" => "Systeme boissons - Aseptisation des raccords",
                "periodicite" => (PeriodiciteFixtures::HEBDOMADAIRE),
                "equipement" => (EquipementFixtures::SYSTEME_BOISSONS)
            ],
            [
                "nom" => "Systeme boissons - Contrôle des température boissons",
                "periodicite" => (PeriodiciteFixtures::HEBDOMADAIRE),
                "equipement" => (EquipementFixtures::SYSTEME_BOISSONS)
            ],
            [
                "nom" => "Systeme boissons - Détartrage et aseptisation du bec eau courante",
                "periodicite" => (PeriodiciteFixtures::HEBDOMADAIRE),
                "equipement" => (EquipementFixtures::SYSTEME_BOISSONS)
            ],
            [
                "nom" => "Testo - Verification calibrage 2 testo, huile en cours d'utilisation",
                "periodicite" => (PeriodiciteFixtures::HEBDOMADAIRE),
                "equipement" => (EquipementFixtures::TESTO)
            ],
            [
                "nom" => "Toaster Universel - Contrôle temps de cuisson",
                "periodicite" => (PeriodiciteFixtures::HEBDOMADAIRE),
                "equipement" => (EquipementFixtures::TOASTER_UNIVERSEL)
            ],
            [
                "nom" => "Toaster Universel - Serrage des boulons et des vis des pieds",
                "periodicite" => (PeriodiciteFixtures::HEBDOMADAIRE),
                "equipement" => (EquipementFixtures::TOASTER_UNIVERSEL)
            ],
            [
                "nom" => "Friteuse - Contrôle de la température et calibration",
                "periodicite" => (PeriodiciteFixtures::BIMENSUEL),
                "equipement" => (EquipementFixtures::FRITEUSE)
            ],
            [
                "nom" => "Grill - Contrôle de la température et calibration",
                "periodicite" => (PeriodiciteFixtures::BIMENSUEL),
                "equipement" => (EquipementFixtures::GRILL)
            ],
            [
                "nom" => "Lave Plateaux - Nettoyage bi mensuel",
                "periodicite" => (PeriodiciteFixtures::BIMENSUEL),
                "equipement" => (EquipementFixtures::LAVE_PLATEAUX)
            ],
            [
                "nom" => "Shake - Aseptisation, rupture chaîne bactérienne",
                "periodicite" => (PeriodiciteFixtures::BIMENSUEL),
                "equipement" => (EquipementFixtures::SHAKE)
            ],
            [
                "nom" => "ABS - Détartrage circuit eau et bac à glaçons",
                "periodicite" => (PeriodiciteFixtures::MENSUEL),
                "equipement" => (EquipementFixtures::ABS)
            ],
            [
                "nom" => "ABS - Nettoyage du groupe froid en toiture",
                "periodicite" => (PeriodiciteFixtures::MENSUEL),
                "equipement" => (EquipementFixtures::ABS)
            ],
            [
                "nom" => "ABS - Contrôle des ratios et volumes",
                "periodicite" => (PeriodiciteFixtures::MENSUEL),
                "equipement" => (EquipementFixtures::ABS)
            ],
            [
                "nom" => "Aire de jeux - Inspection mensuelle",
                "periodicite" => (PeriodiciteFixtures::MENSUEL),
                "equipement" => (EquipementFixtures::ADJ)
            ],
            [
                "nom" => "Appareils Frigorifiques - Nettoyage des condenseurs",
                "periodicite" => (PeriodiciteFixtures::MENSUEL),
                "equipement" => (EquipementFixtures::APPAREIL_FRIGORIFIQUE)
            ],
            [
                "nom" => "Conteneur - Nettoyage des connexions flexibles",
                "periodicite" => (PeriodiciteFixtures::MENSUEL),
                "equipement" => (EquipementFixtures::CONTENEUR)
            ],
            [
                "nom" => "Distributeur Sauce - Contrôle du dosage",
                "periodicite" => (PeriodiciteFixtures::MENSUEL),
                "equipement" => (EquipementFixtures::DISTRIBUTEUR_SAUCE)
            ],
            [
                "nom" => "Grill - Contrôle des températures et câble d'alimentation",
                "periodicite" => (PeriodiciteFixtures::MENSUEL),
                "equipement" => (EquipementFixtures::GRILL)
            ],
            [
                "nom" => "Friteuse - Contrôle temps de récupération",
                "periodicite" => (PeriodiciteFixtures::MENSUEL),
                "equipement" => (EquipementFixtures::FRITEUSE)
            ],
            [
                "nom" => "Friteuse - Contrôle limite haute",
                "periodicite" => (PeriodiciteFixtures::MENSUEL),
                "equipement" => (EquipementFixtures::FRITEUSE)
            ],
            [
                "nom" => "Grill - Nettoyage de l'intérieur",
                "periodicite" => (PeriodiciteFixtures::MENSUEL),
                "equipement" => (EquipementFixtures::GRILL)
            ],
            [
                "nom" => "Grill - Calibration mensuelle de la sonde de température",
                "periodicite" => (PeriodiciteFixtures::MENSUEL),
                "equipement" => (EquipementFixtures::GRILL)
            ],
            [
                "nom" => "Grill - Calibration des zones de chauffe",
                "periodicite" => (PeriodiciteFixtures::MENSUEL),
                "equipement" => (EquipementFixtures::GRILL)
            ],
            [
                "nom" => "Machine à glaçons - Détartrage et aseptisation",
                "periodicite" => (PeriodiciteFixtures::MENSUEL),
                "equipement" => (EquipementFixtures::MACHINE_GLACONS)
            ],
            [
                "nom" => "Machine à café - Contrôle de température de coulée",
                "periodicite" => (PeriodiciteFixtures::MENSUEL),
                "equipement" => (EquipementFixtures::CAFE)
            ],
            [
                "nom" => "Machine à jus d'orange - Nettoyage filtre à air",
                "periodicite" => (PeriodiciteFixtures::MENSUEL),
                "equipement" => (EquipementFixtures::JUS)
            ],
            [
                "nom" => "Machine à jus d'orange - Contrôle du ratio",
                "periodicite" => (PeriodiciteFixtures::MENSUEL),
                "equipement" => (EquipementFixtures::JUS)
            ],
            [
                "nom" => "Shake - Contrôle température de tirage et réservoir",
                "periodicite" => (PeriodiciteFixtures::MENSUEL),
                "equipement" => (EquipementFixtures::SHAKE)
            ],
            [
                "nom" => "Spatule - Changement de lame",
                "periodicite" => (PeriodiciteFixtures::MENSUEL),
                "equipement" => (EquipementFixtures::SPATULE)
            ],
            [
                "nom" => "Systeme boissons - Remplacement du pré filtre",
                "periodicite" => (PeriodiciteFixtures::MENSUEL),
                "equipement" => (EquipementFixtures::SYSTEME_BOISSONS)
            ],
            [
                "nom" => "Testo - Test huile neuve",
                "periodicite" => (PeriodiciteFixtures::MENSUEL),
                "equipement" => (EquipementFixtures::TESTO)
            ],
            [
                "nom" => "Toaster Universel - Contrôle et calibration température",
                "periodicite" => (PeriodiciteFixtures::MENSUEL),
                "equipement" => (EquipementFixtures::TOASTER_UNIVERSEL)
            ],
            [
                "nom" => "Toaster Universel - Contrôle couvercles, plateaux à pains et spatules",
                "periodicite" => (PeriodiciteFixtures::BIMENSUEL),
                "equipement" => (EquipementFixtures::TOASTER_UNIVERSEL)
            ],
            [
                "nom" => "UHC - Contrôle et calibration température",
                "periodicite" => (PeriodiciteFixtures::BIMENSUEL),
                "equipement" => (EquipementFixtures::UHC)
            ],
            [
                "nom" => "UHC - Nettoyage des ventilateurs",
                "periodicite" => (PeriodiciteFixtures::BIMENSUEL),
                "equipement" => (EquipementFixtures::UHC)
            ],
        ];
        foreach ($taches as $tache) {
            $newTache = new Tache();
            $newTache->setNom($tache["nom"]);
            $newTache->setPeriodicite($this->getReference($tache["periodicite"]));
            $newTache->setEquipement($this->getReference($tache["equipement"]));
            $manager->persist($newTache);
        };
        $manager->flush();
    }
}
