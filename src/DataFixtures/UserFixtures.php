<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use App\DataFixtures\RestaurantFixtures;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
        //===============PROPRIETES=============// 
        private $encoder;

        //============CONSTRUCTEUR=============//
        public function __construct(UserPasswordHasherInterface $encoder)
        {
            $this->encoder = $encoder;
        }
        
    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setEmail('admin@admin.com');
        $user->setRoles(['ROLE_USER','ROLE_ADMIN']);
        $user->setPassword($this->encoder->hashPassword($user, 'pass'));
        $user->addRestaurant($this->getReference(RestaurantFixtures::GROUPE_BDA));
        $user->addRestaurant($this->getReference(RestaurantFixtures::GROUPE_TEY));
        $manager->persist($user);

        $manager->flush();
    }
}
