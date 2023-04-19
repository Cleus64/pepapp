<?php

namespace App\DataFixtures;

use App\Entity\Tache;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class TacheFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $tache = new Tache();
        $tache->setNom("Rupture de la chaîne bactérienne toppings");
        $tache->setPeriodicite($this->getReference(PeriodiciteFixtures::GROUPE_BIHEBDOMADAIRE));
        $tache->setEquipement($this->getReference(EquipementFixtures::GROUPE_SHAKE));
        $manager->persist($tache);

        $tache = new Tache();
        $tache->setNom("Nettoyage du cylindre à Glaçons");
        $tache->setPeriodicite($this->getReference(PeriodiciteFixtures::GROUPE_HEBDOMADAIRE));
        $tache->setEquipement($this->getReference(EquipementFixtures::GROUPE_ABS));
        $manager->persist($tache);

        $tache = new Tache();
        $tache->setNom("Contrôle du niveau de sel");
        $tache->setPeriodicite($this->getReference(PeriodiciteFixtures::GROUPE_HEBDOMADAIRE));
        $tache->setEquipement($this->getReference(EquipementFixtures::GROUPE_ADOUCISSEUR));
        $manager->persist($tache);

        $tache = new Tache();
        $tache->setNom("Inspection hebdomadaire");
        $tache->setPeriodicite($this->getReference(PeriodiciteFixtures::GROUPE_HEBDOMADAIRE));
        $tache->setEquipement($this->getReference(EquipementFixtures::GROUPE_ADJ));
        $manager->persist($tache);

        $tache = new Tache();
        $tache->setNom("Nettoyage des grilles des évaporateurs");
        $tache->setPeriodicite($this->getReference(PeriodiciteFixtures::GROUPE_HEBDOMADAIRE));
        $tache->setEquipement($this->getReference(EquipementFixtures::GROUPE_CHAMBREFROIDE));
        $manager->persist($tache);

        $tache = new Tache();
        $tache->setNom("Test des coup de poing de sécurité, arrêts d'urgence");
        $tache->setPeriodicite($this->getReference(PeriodiciteFixtures::GROUPE_HEBDOMADAIRE));
        $tache->setEquipement($this->getReference(EquipementFixtures::GROUPE_CONVOYEUR));
        $manager->persist($tache);

        $tache = new Tache();
        $tache->setNom("Nettoyage et aseptisation des grilles et des supports");
        $tache->setPeriodicite($this->getReference(PeriodiciteFixtures::GROUPE_HEBDOMADAIRE));
        $tache->setEquipement($this->getReference(EquipementFixtures::GROUPE_FOUR));
        $manager->persist($tache);

        $tache = new Tache();
        $tache->setNom("Nettoyage Arrière");
        $tache->setPeriodicite($this->getReference(PeriodiciteFixtures::GROUPE_HEBDOMADAIRE));
        $tache->setEquipement($this->getReference(EquipementFixtures::GROUPE_FRITEUSE));
        $manager->persist($tache);

        $tache = new Tache();
        $tache->setNom("Contôle du temps de cuisson");
        $tache->setPeriodicite($this->getReference(PeriodiciteFixtures::GROUPE_HEBDOMADAIRE));
        $tache->setEquipement($this->getReference(EquipementFixtures::GROUPE_GRILL));
        $manager->persist($tache);

        $tache = new Tache();
        $tache->setNom("Nettoyage des bords");
        $tache->setPeriodicite($this->getReference(PeriodiciteFixtures::GROUPE_HEBDOMADAIRE));
        $tache->setEquipement($this->getReference(EquipementFixtures::GROUPE_GRILL));
        $manager->persist($tache);

        $tache = new Tache();
        $tache->setNom("Nettoyage de extérieur et arrère");
        $tache->setPeriodicite($this->getReference(PeriodiciteFixtures::GROUPE_HEBDOMADAIRE));
        $tache->setEquipement($this->getReference(EquipementFixtures::GROUPE_GRILL));
        $manager->persist($tache);

        $tache = new Tache();
        $tache->setNom("Nettoyage bac à grains et bec");
        $tache->setPeriodicite($this->getReference(PeriodiciteFixtures::GROUPE_HEBDOMADAIRE));
        $tache->setEquipement($this->getReference(EquipementFixtures::GROUPE_CAFE));
        $manager->persist($tache);

        $tache = new Tache();
        $tache->setNom("Contrôle volume et température");
        $tache->setPeriodicite($this->getReference(PeriodiciteFixtures::GROUPE_HEBDOMADAIRE));
        $tache->setEquipement($this->getReference(EquipementFixtures::GROUPE_CAFE));
        $manager->persist($tache);

        $tache = new Tache();
        $tache->setNom("Nettoyage poudre hebdomadaire");
        $tache->setPeriodicite($this->getReference(PeriodiciteFixtures::GROUPE_HEBDOMADAIRE));
        $tache->setEquipement($this->getReference(EquipementFixtures::GROUPE_CAFE));
        $manager->persist($tache);

        $tache = new Tache();
        $tache->setNom("Nettoyage hebdomadaire");
        $tache->setPeriodicite($this->getReference(PeriodiciteFixtures::GROUPE_HEBDOMADAIRE));
        $tache->setEquipement($this->getReference(EquipementFixtures::GROUPE_JUS));
        $manager->persist($tache);

        $tache = new Tache();
        $tache->setNom("Nettoyage hebdomadaire");
        $tache->setPeriodicite($this->getReference(PeriodiciteFixtures::GROUPE_HEBDOMADAIRE));
        $tache->setEquipement($this->getReference(EquipementFixtures::GROUPE_LAVE_PLATEAUX));
        $manager->persist($tache);

        $tache = new Tache();
        $tache->setNom("Rupture chaîne bactérienne sirops");
        $tache->setPeriodicite($this->getReference(PeriodiciteFixtures::GROUPE_HEBDOMADAIRE));
        $tache->setEquipement($this->getReference(EquipementFixtures::GROUPE_SHAKE));
        $manager->persist($tache);

        $tache = new Tache();
        $tache->setNom("Nettoyage des filtres à air");
        $tache->setPeriodicite($this->getReference(PeriodiciteFixtures::GROUPE_HEBDOMADAIRE));
        $tache->setEquipement($this->getReference(EquipementFixtures::GROUPE_SHAKE));
        $manager->persist($tache);

        $tache = new Tache();
        $tache->setNom("Nettoyage et aseptisation des bains marie et pompes");
        $tache->setPeriodicite($this->getReference(PeriodiciteFixtures::GROUPE_HEBDOMADAIRE));
        $tache->setEquipement($this->getReference(EquipementFixtures::GROUPE_SHAKE));
        $manager->persist($tache);

        $tache = new Tache();
        $tache->setNom("Détartrage de la chambre à vapeur");
        $tache->setPeriodicite($this->getReference(PeriodiciteFixtures::GROUPE_HEBDOMADAIRE));
        $tache->setEquipement($this->getReference(EquipementFixtures::GROUPE_STEAMER));
        $manager->persist($tache);

        $tache = new Tache();
        $tache->setNom("Aseptisation des raccords");
        $tache->setPeriodicite($this->getReference(PeriodiciteFixtures::GROUPE_HEBDOMADAIRE));
        $tache->setEquipement($this->getReference(EquipementFixtures::GROUPE_SYSTEME_BOISSONS));
        $manager->persist($tache);

        $tache = new Tache();
        $tache->setNom("Contrôle des température boissons");
        $tache->setPeriodicite($this->getReference(PeriodiciteFixtures::GROUPE_HEBDOMADAIRE));
        $tache->setEquipement($this->getReference(EquipementFixtures::GROUPE_SYSTEME_BOISSONS));
        $manager->persist($tache);

        $tache = new Tache();
        $tache->setNom("Détartrage et aseptisation du bec eau courante");
        $tache->setPeriodicite($this->getReference(PeriodiciteFixtures::GROUPE_HEBDOMADAIRE));
        $tache->setEquipement($this->getReference(EquipementFixtures::GROUPE_SYSTEME_BOISSONS));
        $manager->persist($tache);

        $tache = new Tache();
        $tache->setNom("Verification calibrage 2 testo, huile en cours d'utilisation");
        $tache->setPeriodicite($this->getReference(PeriodiciteFixtures::GROUPE_HEBDOMADAIRE));
        $tache->setEquipement($this->getReference(EquipementFixtures::GROUPE_TESTO));
        $manager->persist($tache);

        $tache = new Tache();
        $tache->setNom("Contrôle temps de cuisson");
        $tache->setPeriodicite($this->getReference(PeriodiciteFixtures::GROUPE_HEBDOMADAIRE));
        $tache->setEquipement($this->getReference(EquipementFixtures::GROUPE_TOASTER_UNIVERSEL));
        $manager->persist($tache);

        $tache = new Tache();
        $tache->setNom("Serrage des boulons et des vis des pieds");
        $tache->setPeriodicite($this->getReference(PeriodiciteFixtures::GROUPE_HEBDOMADAIRE));
        $tache->setEquipement($this->getReference(EquipementFixtures::GROUPE_TOASTER_UNIVERSEL));
        $manager->persist($tache);

        $tache = new Tache();
        $tache->setNom("Contrôle de la température et calibration");
        $tache->setPeriodicite($this->getReference(PeriodiciteFixtures::GROUPE_BIMENSUEL));
        $tache->setEquipement($this->getReference(EquipementFixtures::GROUPE_FRITEUSE));
        $manager->persist($tache);

        $tache = new Tache();
        $tache->setNom("Contrôle de la température et calibration");
        $tache->setPeriodicite($this->getReference(PeriodiciteFixtures::GROUPE_BIMENSUEL));
        $tache->setEquipement($this->getReference(EquipementFixtures::GROUPE_GRILL));
        $manager->persist($tache);

        $tache = new Tache();
        $tache->setNom("Nettoyage bi mensuel");
        $tache->setPeriodicite($this->getReference(PeriodiciteFixtures::GROUPE_BIMENSUEL));
        $tache->setEquipement($this->getReference(EquipementFixtures::GROUPE_LAVE_PLATEAUX));
        $manager->persist($tache);

        $tache = new Tache();
        $tache->setNom("Aseptisation, rupture chaîne bactérienne");
        $tache->setPeriodicite($this->getReference(PeriodiciteFixtures::GROUPE_BIMENSUEL));
        $tache->setEquipement($this->getReference(EquipementFixtures::GROUPE_SHAKE));
        $manager->persist($tache);

        $tache = new Tache();
        $tache->setNom("Détartrage circuit eau et bac à glaçons");
        $tache->setPeriodicite($this->getReference(PeriodiciteFixtures::GROUPE_MENSUEL));
        $tache->setEquipement($this->getReference(EquipementFixtures::GROUPE_ABS));
        $manager->persist($tache);

        $tache = new Tache();
        $tache->setNom("Nettoyage du groupe froid en toiture");
        $tache->setPeriodicite($this->getReference(PeriodiciteFixtures::GROUPE_MENSUEL));
        $tache->setEquipement($this->getReference(EquipementFixtures::GROUPE_ABS));
        $manager->persist($tache);

        $tache = new Tache();
        $tache->setNom("Contrôle des ratios et volumes");
        $tache->setPeriodicite($this->getReference(PeriodiciteFixtures::GROUPE_MENSUEL));
        $tache->setEquipement($this->getReference(EquipementFixtures::GROUPE_ABS));
        $manager->persist($tache);

        $tache = new Tache();
        $tache->setNom("Inspection mensuelle");
        $tache->setPeriodicite($this->getReference(PeriodiciteFixtures::GROUPE_MENSUEL));
        $tache->setEquipement($this->getReference(EquipementFixtures::GROUPE_ADJ));
        $manager->persist($tache);

        $tache = new Tache();
        $tache->setNom("Nettoyage des condenseurs");
        $tache->setPeriodicite($this->getReference(PeriodiciteFixtures::GROUPE_MENSUEL));
        $tache->setEquipement($this->getReference(EquipementFixtures::GROUPE_APPAREIL_FRIGORIFIQUE));
        $manager->persist($tache);

        $tache = new Tache();
        $tache->setNom("Nettoyage des connexions flexibles");
        $tache->setPeriodicite($this->getReference(PeriodiciteFixtures::GROUPE_MENSUEL));
        $tache->setEquipement($this->getReference(EquipementFixtures::GROUPE_CONTENEUR));
        $manager->persist($tache);

        $tache = new Tache();
        $tache->setNom("Contrôle du dosage");
        $tache->setPeriodicite($this->getReference(PeriodiciteFixtures::GROUPE_MENSUEL));
        $tache->setEquipement($this->getReference(EquipementFixtures::GROUPE_DISTRIBUTEUR_SAUCE));
        $manager->persist($tache);

        $tache = new Tache();
        $tache->setNom("Contrôle des températures et câble d'alimentation");
        $tache->setPeriodicite($this->getReference(PeriodiciteFixtures::GROUPE_MENSUEL));
        $tache->setEquipement($this->getReference(EquipementFixtures::GROUPE_GRILL));
        $manager->persist($tache);

        $tache = new Tache();
        $tache->setNom("Contrôle temps de récupération");
        $tache->setPeriodicite($this->getReference(PeriodiciteFixtures::GROUPE_MENSUEL));
        $tache->setEquipement($this->getReference(EquipementFixtures::GROUPE_FRITEUSE));
        $manager->persist($tache);

        $tache = new Tache();
        $tache->setNom("Contrôle limite haute");
        $tache->setPeriodicite($this->getReference(PeriodiciteFixtures::GROUPE_MENSUEL));
        $tache->setEquipement($this->getReference(EquipementFixtures::GROUPE_FRITEUSE));
        $manager->persist($tache);

        $tache = new Tache();
        $tache->setNom("Nettoyage de l'intérieur");
        $tache->setPeriodicite($this->getReference(PeriodiciteFixtures::GROUPE_MENSUEL));
        $tache->setEquipement($this->getReference(EquipementFixtures::GROUPE_GRILL));
        $manager->persist($tache);

        $tache = new Tache();
        $tache->setNom("Calibration mensuelle de la sonde de température");
        $tache->setPeriodicite($this->getReference(PeriodiciteFixtures::GROUPE_MENSUEL));
        $tache->setEquipement($this->getReference(EquipementFixtures::GROUPE_GRILL));
        $manager->persist($tache);

        $tache = new Tache();
        $tache->setNom("Calibration des zones de chauffe");
        $tache->setPeriodicite($this->getReference(PeriodiciteFixtures::GROUPE_MENSUEL));
        $tache->setEquipement($this->getReference(EquipementFixtures::GROUPE_GRILL));
        $manager->persist($tache);

        $tache = new Tache();
        $tache->setNom("Détartrage et aseptisation");
        $tache->setPeriodicite($this->getReference(PeriodiciteFixtures::GROUPE_MENSUEL));
        $tache->setEquipement($this->getReference(EquipementFixtures::GROUPE_MACHINE_GLACONS));
        $manager->persist($tache);

        $tache = new Tache();
        $tache->setNom("Contrôle de température de coulée");
        $tache->setPeriodicite($this->getReference(PeriodiciteFixtures::GROUPE_MENSUEL));
        $tache->setEquipement($this->getReference(EquipementFixtures::GROUPE_CAFE));
        $manager->persist($tache);

        $tache = new Tache();
        $tache->setNom("Nettoyage filtre à air");
        $tache->setPeriodicite($this->getReference(PeriodiciteFixtures::GROUPE_MENSUEL));
        $tache->setEquipement($this->getReference(EquipementFixtures::GROUPE_JUS));
        $manager->persist($tache);

        $tache = new Tache();
        $tache->setNom("Contrôle du ratio");
        $tache->setPeriodicite($this->getReference(PeriodiciteFixtures::GROUPE_MENSUEL));
        $tache->setEquipement($this->getReference(EquipementFixtures::GROUPE_JUS));
        $manager->persist($tache);

        $tache = new Tache();
        $tache->setNom("Remplacement des joints");
        $tache->setPeriodicite($this->getReference(PeriodiciteFixtures::GROUPE_MENSUEL));
        $tache->setEquipement($this->getReference(EquipementFixtures::GROUPE_SHAKE));
        $manager->persist($tache);

        $tache = new Tache();
        $tache->setNom("Contrôle température de tirage et réservoir");
        $tache->setPeriodicite($this->getReference(PeriodiciteFixtures::GROUPE_MENSUEL));
        $tache->setEquipement($this->getReference(EquipementFixtures::GROUPE_SHAKE));
        $manager->persist($tache);

        $tache = new Tache();
        $tache->setNom("Contrôle température et volume toppings");
        $tache->setPeriodicite($this->getReference(PeriodiciteFixtures::GROUPE_MENSUEL));
        $tache->setEquipement($this->getReference(EquipementFixtures::GROUPE_SHAKE));
        $manager->persist($tache);

        $tache = new Tache();
        $tache->setNom("Changement de lame");
        $tache->setPeriodicite($this->getReference(PeriodiciteFixtures::GROUPE_MENSUEL));
        $tache->setEquipement($this->getReference(EquipementFixtures::GROUPE_SPATULE));
        $manager->persist($tache);
        
        $tache = new Tache();
        $tache->setNom("Remplacement du pré filtre");
        $tache->setPeriodicite($this->getReference(PeriodiciteFixtures::GROUPE_MENSUEL));
        $tache->setEquipement($this->getReference(EquipementFixtures::GROUPE_SYSTEME_BOISSONS));
        $manager->persist($tache);

        $tache = new Tache();
        $tache->setNom("Test huile neuve");
        $tache->setPeriodicite($this->getReference(PeriodiciteFixtures::GROUPE_MENSUEL));
        $tache->setEquipement($this->getReference(EquipementFixtures::GROUPE_TESTO));
        $manager->persist($tache);

        $tache = new Tache();
        $tache->setNom("Contrôle et calibration température");
        $tache->setPeriodicite($this->getReference(PeriodiciteFixtures::GROUPE_MENSUEL));
        $tache->setEquipement($this->getReference(EquipementFixtures::GROUPE_TOASTER_UNIVERSEL));
        $manager->persist($tache);

        $tache = new Tache();
        $tache->setNom("Contrôle couvercles, plateaux à pains et spatules");
        $tache->setPeriodicite($this->getReference(PeriodiciteFixtures::GROUPE_BIHEBDOMADAIRE));
        $tache->setEquipement($this->getReference(EquipementFixtures::GROUPE_TOASTER_UNIVERSEL));
        $manager->persist($tache);

        $tache = new Tache();
        $tache->setNom("Contrôle et calibration température");
        $tache->setPeriodicite($this->getReference(PeriodiciteFixtures::GROUPE_BIHEBDOMADAIRE));
        $tache->setEquipement($this->getReference(EquipementFixtures::GROUPE_UHC));
        $manager->persist($tache);

        $tache = new Tache();
        $tache->setNom("Nettoyage des ventilateurs");
        $tache->setPeriodicite($this->getReference(PeriodiciteFixtures::GROUPE_BIHEBDOMADAIRE));
        $tache->setEquipement($this->getReference(EquipementFixtures::GROUPE_UHC));
        $manager->persist($tache);


        $manager->flush();
    }
}
