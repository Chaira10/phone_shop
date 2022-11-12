<?php

namespace App\DataFixtures;

use App\Entity\Carousel;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class CarouselFixtures extends Fixture
{
    public const CAROUSEL1 = 'Carousel';
    public function load(ObjectManager $manager): void
    {
        $carousel = new Carousel();
        $carousel->setImage('home.png');
        $carousel->setText('Lorem Ipsum is simply dummy text of the printing');
        $manager->persist($carousel);
        $this->addReference(self::CAROUSEL1, $carousel);

        $manager->flush();
    }
}
