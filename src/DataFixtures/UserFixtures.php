<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordHasherInterface $userPasswordHasherInterface)
    {
        $this->encoder = $userPasswordHasherInterface;
    }
    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setEmail('chaira10@hotmail.fr');
        $user->setRoles(['ROLE_USER']);
        $user->setPassword($this->encoder->hashPassword($user,'12345'));
        $user->setLastName('Chaira');
        $user->setFirstname('Ment');
        $manager->persist($user);

        $manager->flush();
    }
}
