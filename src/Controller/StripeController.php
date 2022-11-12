<?php

namespace App\Controller;

use Stripe\Stripe;
use App\Classe\Cart;
use App\Entity\Order;
use App\Entity\Product;
use Stripe\Checkout\Session;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class StripeController extends AbstractController
{
    /**
     * @Route("/commande/create-session/{reference}", name="app_stripe_create_session")
     */
    public function index(EntityManagerInterface $entityManager ,Cart $cart, $reference): Response
    {
        $products_for_stripe = [];
        $YOUR_DOMAIN = 'http://127.0.0.1:8000';

        $order = $entityManager->getRepository(Order::class)->findOneBy(['reference' => $reference]);
        if (!$order) {
            $this->redirectToRoute('app_order');
        }
        // dd($order->OrderDetails()->getValues());
        // dd($order->getOrderDetails()->getValues());

        // header('Content-Type: application/json');
        // $YOUR_DOMAIN = 'http://127.0.0.1:8000';

        foreach ($order->getOrderDetails()->getValues() as $product) {
            $product_object = $entityManager->getRepository(Product::class)->findOneByName($product->getProduct());
            // dd($product);
            $products_for_stripe[] = [
                'price_data' =>[
                'currency' => 'eur',
                'unit_amount' => $product->getPrice()*100,

                'product_data' => [
                    'name' => $product->getProduct(),
                    'images' => [$YOUR_DOMAIN.'/images/products/'.$product_object->getImage()],
                ],
            ],
                'quantity' => $product->getQuantity(),
            ];
        }

            $products_for_stripe[] = [
                'price_data' =>[
                'currency' => 'eur',
                'unit_amount' => $order->getCarrierPrice()*100,

                'product_data' => [
                    'name' => $order->getCarrierName(),
                    'images' => [$YOUR_DOMAIN],
                ],
            ],
                'quantity' => 1,
            ];

        // dd( $products_for_stripe);
        // Stripe::setApiKey('sk_test_51LiOPhGCVcuFVlcfpoM8HROlOk17E47nJ5ivYSiw9CeLzVGhbuZoQG0rLJZtawZ1HxHDf5ZJqaX5IFKBs5YJERe100SnpaU47z');
        Stripe::setApiKey('sk_test_51LiOPhGCVcuFVlcfpoM8HROlOk17E47nJ5ivYSiw9CeLzVGhbuZoQG0rLJZtawZ1HxHDf5ZJqaX5IFKBs5YJERe100SnpaU47z');
            

        $checkout_session = Session::create([
        'customer_email' => $this->getUser()->getEmail(),
        'line_items' => [
            $products_for_stripe
            ],
        'mode' => 'payment',
        'success_url' => $YOUR_DOMAIN . '/commande/merci/{CHECKOUT_SESSION_ID}',
        'cancel_url' => $YOUR_DOMAIN . '/commande/erreur/{CHECKOUT_SESSION_ID}',
        ]);

        $order->setStripeSessionId($checkout_session->id);
        $entityManager->flush();

        // $response = new JsonResponse(['id' => $checkout_session->id]);
        return $this->redirect($checkout_session->url);
    }
}
