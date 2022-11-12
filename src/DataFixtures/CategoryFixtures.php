<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class CategoryFixtures extends Fixture
{

    public const SMARTPHONE = 'smartphone';
    public const TABLETTE = 'tablette';
    public const ECOUTEUR = 'ecouteur';


    public function load(ObjectManager $manager): void
    {
        $category = new Category();
        $category->setName('Smartphone');
        $manager->persist($category);
        $this->addReference(self::SMARTPHONE, $category);

        $category = new Category();
        $category->setName('Tablette');
        $manager->persist($category);
        $this->addReference(self::TABLETTE, $category);

        $category = new Category();
        $category->setName('Ecouteur');
        $manager->persist($category);
        $this->addReference(self::ECOUTEUR, $category);

        $manager->flush();
    }
}
