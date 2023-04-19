<?php

namespace App\DataFixtures;

use App\Entity\Restaurant;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class RestaurantFixtures extends Fixture
{

    public const GROUPE_TEY="groupe-tey";
    public const GROUPE_BDA="groupe_bda";

    public function load(ObjectManager $manager): void
    {

        $restaurant = new Restaurant();
        $restaurant->setNom("TEY");
        $manager->persist($restaurant);
        $this->addReference(self::GROUPE_TEY, $restaurant);

        $restaurant = new Restaurant();
        $restaurant->setNom("BDA");
        $manager->persist($restaurant);
        $this->addReference(self::GROUPE_BDA, $restaurant);

        $manager->flush();
    }
}
