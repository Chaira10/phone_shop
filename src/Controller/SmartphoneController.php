<?php

namespace App\Controller;

use App\Entity\Home;
use App\Classe\Search;
use App\Entity\Product;
use App\Entity\Carousel;
use App\Entity\Category;
use App\Form\SearchType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SmartphoneController extends AbstractController
{
        private $entityManager;

        public function __construct(EntityManagerInterface $entityManager)
        {
            $this->entityManager = $entityManager;
        }
        /**
         * @Route("/smartphone", name="app_smartphone_produits")
         */
        public function index(Request $request): Response
        {
            $products = $this->entityManager->getRepository(Product::class)->findAll();
            $categorys = $this->entityManager->getRepository(Category::class)->findAll();
            $homes = $this->entityManager->getRepository(Home::class)->findAll();
            $carousels = $this->entityManager->getRepository(Carousel::class)->findAll();
            $search = new Search();
            $form = $this->createForm(SearchType::class, $search);
            $form->handleRequest($request);
    
            if ($form->isSubmitted() && $form->isValid()) {
                // $search = $form->getData();
                $products = $this->entityManager->getRepository(Product::class)->findOneBySearch($search);
    
                // dd($search);
            } else {
                
            }
    
            return $this->render('smartphone/index.html.twig',[
                'products' => $products,
                'form' => $form->createView(),
                'categorys' => $categorys,
                'homes' => $homes,
            ]);
        }
            /**
         * @Route("/smartphone/{slug}", name="app_smartphone_product")
         */
        public function show($slug): Response
        {
            // dd($slug);
            $product = $this->entityManager->getRepository(Product::class)->findOneBySlug($slug);
            $categorys = $this->entityManager->getRepository(Category::class)->findAll();
            if (!$product) {
                return $this->redirectToRoute('app_front_products');
            }
            // dd($categorys);
            return $this->render('smartphone/show.html.twig',[
                'product' => $product,
                'categorys' => $categorys
            ]);
        }

    }

