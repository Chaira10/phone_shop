<?php

namespace App\DataFixtures;

use App\Entity\Product;
use App\DataFixtures\CategoryFixtures;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class ProductFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $product = new Product();
        $product->setName('APPLE iPhone 14 Pro Max 128GB Gold');
        $product->setSlug('apple-iphone-14-pro-max-128gb-gold');
        $product->setImage('iphonegold.png');
        $product->setSubtitle(' iPhone 14 Pro Max');
        $product->setDescription('Taille de la diagonale : 6.7pouces
        Résolution du capteur : 48 mégapixels
        Capacité de la mémoire interne : 128 GB
        CPU 6 cœurs avec 2 cœurs de performance et 4 cœurs à haute efficacité énergétique. GPU 5 cœurs. Neural Engine 16 cœurs.
        Génération à haut débit mobile : 5G
        Système d\'exploitation : iOS 16
        Fonctions du téléphone : Contrôle vocal. VoiceOver. Zoom. Loupe. Prise en charge RTT et TTY. Siri et Dictée. Écrire à Siri. Contrôle de sélection. Sous‑titres codés. AssistiveTouch. Contenu énoncé. Toucher le dos de l’appareil.
        Couleur du boitier : Or');
        $product->setPrice(759);
        $product->setCategory($this->getReference(CategoryFixtures::SMARTPHONE));
        $manager->persist($product);

        $product = new Product();
        $product->setName('APPLE iPhone 14 Pro Max 128GB Gold');
        $product->setSlug('apple-iphone-14-pro-max-128gb-gold');
        $product->setImage('iphonesilver.png');
        $product->setSubtitle(' iPhone 14 Pro Max');
        $product->setDescription('Taille de la diagonale : 6.7pouces
        Résolution du capteur : 48 mégapixels
        Capacité de la mémoire interne : 128 GB
        CPU 6 cœurs avec 2 cœurs de performance et 4 cœurs à haute efficacité énergétique. GPU 5 cœurs. Neural Engine 16 cœurs.
        Génération à haut débit mobile : 5G
        Système d\'exploitation : iOS 16
        Fonctions du téléphone : Contrôle vocal. VoiceOver. Zoom. Loupe. Prise en charge RTT et TTY. Siri et Dictée. Écrire à Siri. Contrôle de sélection. Sous‑titres codés. AssistiveTouch. Contenu énoncé. Toucher le dos de l’appareil.
        Couleur du boitier : Or');
        $product->setPrice(759);
        $product->setCategory($this->getReference(CategoryFixtures::SMARTPHONE));
        $manager->persist($product);

        $product = new Product();
        $product->setName('APPLE iPhone 14 Pro Max 128GB Gold');
        $product->setSlug('apple-iphone-14-pro-max-128gb-gold');
        $product->setImage('iphoneblack.png');
        $product->setSubtitle(' iPhone 14 Pro Max');
        $product->setDescription('Taille de la diagonale : 6.7pouces
        Résolution du capteur : 48 mégapixels
        Capacité de la mémoire interne : 128 GB
        CPU 6 cœurs avec 2 cœurs de performance et 4 cœurs à haute efficacité énergétique. GPU 5 cœurs. Neural Engine 16 cœurs.
        Génération à haut débit mobile : 5G
        Système d\'exploitation : iOS 16
        Fonctions du téléphone : Contrôle vocal. VoiceOver. Zoom. Loupe. Prise en charge RTT et TTY. Siri et Dictée. Écrire à Siri. Contrôle de sélection. Sous‑titres codés. AssistiveTouch. Contenu énoncé. Toucher le dos de l’appareil.
        Couleur du boitier : Or');
        $product->setPrice(759);
        $product->setCategory($this->getReference(CategoryFixtures::SMARTPHONE));
        $manager->persist($product);

        $product = new Product();
        $product->setName('APPLE iPhone 14 Pro Max 128GB Gold');
        $product->setSlug('apple-iphone-14-pro-max-128gb-gold');
        $product->setImage('iphonepurple.png');
        $product->setSubtitle(' iPhone 14 Pro Max');
        $product->setDescription('Taille de la diagonale : 6.7pouces
        Résolution du capteur : 48 mégapixels
        Capacité de la mémoire interne : 128 GB
        CPU 6 cœurs avec 2 cœurs de performance et 4 cœurs à haute efficacité énergétique. GPU 5 cœurs. Neural Engine 16 cœurs.
        Génération à haut débit mobile : 5G
        Système d\'exploitation : iOS 16
        Fonctions du téléphone : Contrôle vocal. VoiceOver. Zoom. Loupe. Prise en charge RTT et TTY. Siri et Dictée. Écrire à Siri. Contrôle de sélection. Sous‑titres codés. AssistiveTouch. Contenu énoncé. Toucher le dos de l’appareil.
        Couleur du boitier : Or');
        $product->setPrice(759);
        $product->setCategory($this->getReference(CategoryFixtures::SMARTPHONE));
        $manager->persist($product);

        $product = new Product();
        $product->setName('SAMSUNG Galaxy Z Flip4 256 Go Lavande');
        $product->setSlug('samsung-galaxy-z-flip4-256-go-lavande');
        $product->setImage('Galaxypurple.png');
        $product->setSubtitle('Galaxy Z Flip4');
        $product->setDescription('Taille de la diagonale : 6.7 pouces
        Capacité de la batterie : 3700 mAh
        Capacité de la mémoire interne : 256 Go
        8 cœurs
        RAM : 8 Go
        Génération à haut débit mobile : 5G
        Protection : Verre ultra mince de Samsung
        Système d\'exploitation : Android 12');
        $product->setPrice(1169);
        $product->setCategory($this->getReference(CategoryFixtures::SMARTPHONE));
        $manager->persist($product);

        $product = new Product();
        $product->setName('SAMSUNG Galaxy Z Flip4 256 Go Gold');
        $product->setSlug('samsung-galaxy-z-flip4-256-go-lavande');
        $product->setImage('Galaxygold.png');
        $product->setSubtitle('Galaxy Z Flip4');
        $product->setDescription('Taille de la diagonale : 6.7 pouces
        Capacité de la batterie : 3700 mAh
        Capacité de la mémoire interne : 256 Go
        8 cœurs
        RAM : 8 Go
        Génération à haut débit mobile : 5G
        Protection : Verre ultra mince de Samsung
        Système d\'exploitation : Android 12');
        $product->setPrice(1169);
        $product->setCategory($this->getReference(CategoryFixtures::SMARTPHONE));
        $manager->persist($product);

        $product = new Product();
        $product->setName('SAMSUNG Galaxy Z Flip4 256 Go Black');
        $product->setSlug('samsung-galaxy-z-flip4-256-go-lavande');
        $product->setImage('Galaxyblack.png');
        $product->setSubtitle('Galaxy Z Flip4');
        $product->setDescription('Taille de la diagonale : 6.7 pouces
        Capacité de la batterie : 3700 mAh
        Capacité de la mémoire interne : 256 Go
        8 cœurs
        RAM : 8 Go
        Génération à haut débit mobile : 5G
        Protection : Verre ultra mince de Samsung
        Système d\'exploitation : Android 12');
        $product->setPrice(1169);
        $product->setCategory($this->getReference(CategoryFixtures::SMARTPHONE));
        $manager->persist($product);

        $product = new Product();
        $product->setName('XIAOMI 12 256Go 5G Violet');
        $product->setSlug('xiaomi-12-256go-5g-violet');
        $product->setImage('xiaomipurple.png');
        $product->setSubtitle('XIAOMI 12');
        $product->setDescription('Taille de la diagonale : 6.28pouces
        Résolution du capteur : 8K et 4K HDR10+
        Capacité de la batterie : 4500 mAh
        Capacité de la mémoire interne : 256 Go
        8 cœurs
        Génération à haut débit mobile : 5G
        Protection : Corning® Gorilla® Glass Victus®
        Système d\'exploitation : Android 12');
        $product->setPrice(777);
        $product->setCategory($this->getReference(CategoryFixtures::SMARTPHONE));
        $manager->persist($product);

        $product = new Product();
        $product->setName('XIAOMI 12 256Go 5G Blue');
        $product->setSlug('xiaomi-12-256go-5g-blue');
        $product->setImage('xiaomiblue.png');
        $product->setSubtitle('XIAOMI 12');
        $product->setDescription('Taille de la diagonale : 6.28pouces
        Résolution du capteur : 8K et 4K HDR10+
        Capacité de la batterie : 4500 mAh
        Capacité de la mémoire interne : 256 Go
        8 cœurs
        Génération à haut débit mobile : 5G
        Protection : Corning® Gorilla® Glass Victus®
        Système d\'exploitation : Android 12');
        $product->setPrice(777);
        $product->setCategory($this->getReference(CategoryFixtures::SMARTPHONE));
        $manager->persist($product);

        $product = new Product();
        $product->setName('XIAOMI 12 256Go 5G Black');
        $product->setSlug('xiaomi-12-256go-5g-black');
        $product->setImage('xiaomiblack.png');
        $product->setSubtitle('XIAOMI 12');
        $product->setDescription('Taille de la diagonale : 6.28pouces
        Résolution du capteur : 8K et 4K HDR10+
        Capacité de la batterie : 4500 mAh
        Capacité de la mémoire interne : 256 Go
        8 cœurs
        Génération à haut débit mobile : 5G
        Protection : Corning® Gorilla® Glass Victus®
        Système d\'exploitation : Android 12');
        $product->setPrice(777);
        $product->setCategory($this->getReference(CategoryFixtures::SMARTPHONE));
        $manager->persist($product);

        $product = new Product();
        $product->setName('Tablette Apple Ipad Air 10.9 Gris Sideral 64Go');
        $product->setSlug('tablette-apple-ipad-air-10.9-gris-sideral-64go');
        $product->setImage('ipadblack.png');
        $product->setSubtitle('Ipad Air 10.9');
        $product->setDescription('Taille de l\'écran : 10,9" (27,6 cm) - Résolution : 2360 x 1640 pixels
        Stockage : 64 Go - Mémoire vive : 8 Go
        Capteur photo : 1 (12 MP en capteur principal)
        Autonomie : 3177 mAh - jusqu\'à 10 heures');
        $product->setPrice(777);
        $product->setCategory($this->getReference(CategoryFixtures::TABLETTE));
        $manager->persist($product);

        $product = new Product();
        $product->setName('Tablette Apple Ipad Air 10.9 Blue 64Go');
        $product->setSlug('tablette-apple-ipad-air-10.9-blue-64go');
        $product->setImage('ipadblue.png');
        $product->setSubtitle('Ipad Air 10.9');
        $product->setDescription('Taille de l\'écran : 10,9" (27,6 cm) - Résolution : 2360 x 1640 pixels
        Stockage : 64 Go - Mémoire vive : 8 Go
        Capteur photo : 1 (12 MP en capteur principal)
        Autonomie : 3177 mAh - jusqu\'à 10 heures');
        $product->setPrice(777);
        $product->setCategory($this->getReference(CategoryFixtures::TABLETTE));
        $manager->persist($product);

        $product = new Product();
        $product->setName('Tablette Apple Ipad Air 10.9 Gold 64Go');
        $product->setSlug('tablette-apple-ipad-air-10.9-gold-64go');
        $product->setImage('ipadgold.png');
        $product->setSubtitle('Ipad Air 10.9');
        $product->setDescription('Taille de l\'écran : 10,9" (27,6 cm) - Résolution : 2360 x 1640 pixels
        Stockage : 64 Go - Mémoire vive : 8 Go
        Capteur photo : 1 (12 MP en capteur principal)
        Autonomie : 3177 mAh - jusqu\'à 10 heures');
        $product->setPrice(777);
        $product->setCategory($this->getReference(CategoryFixtures::TABLETTE));
        $manager->persist($product);

        $product = new Product();
        $product->setName('Tablette Apple Ipad Air 10.9 Purple 64Go');
        $product->setSlug('tablette-apple-ipad-air-10.9-purple-64go');
        $product->setImage('ipadpurple.png');
        $product->setSubtitle('Ipad Air 10.9');
        $product->setDescription('Taille de l\'écran : 10,9" (27,6 cm) - Résolution : 2360 x 1640 pixels
        Stockage : 64 Go - Mémoire vive : 8 Go
        Capteur photo : 1 (12 MP en capteur principal)
        Autonomie : 3177 mAh - jusqu\'à 10 heures');
        $product->setPrice(777);
        $product->setCategory($this->getReference(CategoryFixtures::TABLETTE));
        $manager->persist($product);

        $product = new Product();
        $product->setName('SAMSUNG Galaxy Buds2 Pro Blanc');
        $product->setSlug('samsung-galaxy-buds2-pro-blanc');
        $product->setImage('ecouteur1.png');
        $product->setSubtitle('Galaxy Buds2');
        $product->setDescription('Bluetooth - Connexion Bluetooth sans fil
        Autonomie (jusqu\'à) : 8h / 29h (sans ANC)
        Poids : Poids par écouteur : 5,5 g, Boîtier : 43,4 g');
        $product->setPrice(277);
        $product->setCategory($this->getReference(CategoryFixtures::ECOUTEUR));
        $manager->persist($product);

        $product = new Product();
        $product->setName('APPLE AirPods Pro Blanc');
        $product->setSlug('apple-airpods-pro-blanc');
        $product->setImage('ecouteur2.png');
        $product->setSubtitle('AirPods Pro');
        $product->setDescription('Bluetooth - Connexion Bluetooth sans fil
        Autonomie (jusqu\'à) : 8h / 29h (sans ANC)
        Poids : Poids par écouteur : 5,5 g, Boîtier : 43,4 g');
        $product->setPrice(177);
        $product->setCategory($this->getReference(CategoryFixtures::ECOUTEUR));
        $manager->persist($product);

        $product = new Product();
        $product->setName('APPLE AirPods Pro Blanc');
        $product->setSlug('apple-airpods-pro-blanc');
        $product->setImage('ecouteur4.png');
        $product->setSubtitle('AirPods Pro');
        $product->setDescription('Bluetooth - Connexion Bluetooth sans fil
        Autonomie (jusqu\'à) : 8h / 29h (sans ANC)
        Poids : Poids par écouteur : 5,5 g, Boîtier : 43,4 g');
        $product->setPrice(177);
        $product->setCategory($this->getReference(CategoryFixtures::ECOUTEUR));
        $manager->persist($product);

        
        $product = new Product();
        $product->setName('JBL Tune 115 TWS Noir');
        $product->setSlug('jbl-tune-115-tws-noir');
        $product->setImage('ecouteur4.png');
        $product->setSubtitle('JBL Tune 115');
        $product->setDescription('Bluetooth - Connexion Bluetooth sans fil
        Autonomie (jusqu\'à) : 8h / 29h (sans ANC)
        Poids : Poids par écouteur : 5,5 g, Boîtier : 43,4 g');
        $product->setPrice(177);
        $product->setCategory($this->getReference(CategoryFixtures::ECOUTEUR));
        $manager->persist($product);


        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            CategoryFixtures::class,
        ];
    }
}
