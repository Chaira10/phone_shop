<?php

namespace App\DataFixtures;

use App\Entity\Carrier;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class CarrierFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $carrier = new Carrier();
        $carrier->setName('Colissimo');
        $carrier->setDescription('Livraison sous 48h');
        $carrier->setPrice(7.99);
        $manager->persist($carrier);

        $carrier = new Carrier();
        $carrier->setName('Chronopost');
        $carrier->setDescription('Livraison sous 24h');
        $carrier->setPrice(9.99);
        $manager->persist($carrier);

        $carrier = new Carrier();
        $carrier->setName('Mondial Relay');
        $carrier->setDescription('Livraison sous 72h');
        $carrier->setPrice(5.99);
        $manager->persist($carrier);

        $manager->flush();
    }
}
