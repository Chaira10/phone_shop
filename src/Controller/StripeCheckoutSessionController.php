<?php

namespace App\Controller;

use Stripe\Stripe;
use App\Classe\Cart;
use App\Entity\Order;
use Stripe\Checkout\Session;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class StripeCheckoutSessionController extends AbstractController
{
    /**
     * @Route("/create-checkout-session", name="app_stripe_checkout_session")
     */
    public function index(Cart $cart, Order $order, EntityManagerInterface $manager): Response
    {
        $YOUR_DOMAIN = 'http://127.0.0.1:8000';

        Stripe::setApiKey('sk_test_51LiOPhGCVcuFVlcfpoM8HROlOk17E47nJ5ivYSiw9CeLzVGhbuZoQG0rLJZtawZ1HxHDf5ZJqaX5IFKBs5YJERe100SnpaU47z');


        $products_for_stripe= [];
        foreach ($cart->getFull() as $product) {
            $products_for_stripe[] = [
                'price' =>[
                'currency' => 'eur',
                'unit_amount' => $product['product']->getPrice(),

                'product' => [
                    'name' => $product['product']->getName(),
                    'image' => [$YOUR_DOMAIN.'/images/products/'.$product['product']->getImage()],
                ],
            ],
                'quantity' => $product['quantity'],
            ];
        }
    
    $checkout_session = Session::create([
        'line_items' => [
            $products_for_stripe
            ],
        'mode' => 'payment',
        'success_url' => $YOUR_DOMAIN . '/success.html',
        'cancel_url' => $YOUR_DOMAIN . '/cancel.html',
        ]);

        $order->setStripeSessionId($checkout_session->id);
        $manager->flush();
        
        return $this->json(['id' => $checkout_session->id]);
    }

}
