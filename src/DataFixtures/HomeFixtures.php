<?php

namespace App\DataFixtures;

use App\Entity\Home;
use App\DataFixtures\CarouselFixtures;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class HomeFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $home = new Home();
        $home->setTitle('Home');
        $home->setText('Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s');
        $home->setIsActive(1);
        $home->addCarousel($this->getReference(CarouselFixtures::CAROUSEL1));
        $manager->persist($home);

        $manager->flush();
    }
    public function getDependencies()
    {
        return [
            CarouselFixtures::class,
            
        ];
    }
}
