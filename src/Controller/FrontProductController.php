<?php

namespace App\Controller;


use App\Classe\Search;
use App\Entity\Product;
use App\Form\SearchType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FrontProductController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    /**
     * @Route("/nos-produits", name="app_front_products")
     */
    public function index(Request $request): Response
    {
        $products = $this->entityManager->getRepository(Product::class)->findAll();

        $search = new Search();
        $form = $this->createForm(SearchType::class, $search);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $search = $form->getData();
            $products = $this->entityManager->getRepository(Product::class)->findOneBySearch($search);

            // dd($search);
        } else {
            
        }

        return $this->render('front_product/index.html.twig',[
            'products' => $products,
            'form' => $form->createView()
        ]);
    }
        /**
     * @Route("/produit/{slug}", name="app_front_product")
     */
    public function show($slug): Response
    {
        // dd($slug);
        $product = $this->entityManager->getRepository(Product::class)->findOneBySlug($slug);

        if (!$product) {
            return $this->redirectToRoute('app_front_products');
        }

        return $this->render('front_product/show.html.twig',[
            'product' => $product
        ]);
    }
}
