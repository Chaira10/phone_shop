<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\HomeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    /**
     * @Route("/", name="app_home")
     */
    public function index(HomeRepository $homeRepository): Response
    {
        $products = $this->entityManager->getRepository(Product::class)->findAll();
        $home = $homeRepository->findOneBy(['isActive' => true]);
        return $this->render('home/index.html.twig', [
            'home' => $home,
            'products' => $products
        ]);
    }
}
