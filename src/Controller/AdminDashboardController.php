<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use App\Repository\OrderRepository;
use App\Repository\StatutRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminDashboardController extends AbstractController
{
    /**
     * @Route("/admin", name="app_admin_dashboard")
     */
    public function index(CategoryRepository $categRepo ,OrderRepository $orderRepo, StatutRepository $statutRepo, UserRepository $userRepo): Response
    {
        $categories = $categRepo->findAll();
        $categNom = [];
        $categColor = [];
        $categCount = [];

        foreach( $categories as $category) {
            $categNom[]= $category->getName();
            $categColor[] = $category->getColor();
            $categCount[] = count($category->getProducts());
        }



        $commandes = $orderRepo->countByDate();
        // dd($commandes);
        $dates = [];
        $orderCount = [];

        foreach ( $commandes as $commande ) {
            $dates[] = $commande['dateCommande'];
            $orderCount[] = $commande['count'];

        }
        // $label = $statutRepo->findBy(['name']);
        // $statuts = $orderRepo->findAll();
        // $statutNom = [];
        // $statutColor = [];
        // $statutCount = [];
        
        // foreach ( $statuts as $statut) {
        //     $statutNom[]= $statut->getStatut()->getName();
        //     $statutColor[] = $statut->getStatut()->getColor();
        //     $statutCount[] = count($statuts);
        // }
        // dd($label);
        return $this->render('admin_dashboard/index.html.twig', [
            'categNom' => json_encode($categNom),
            'categColor' => json_encode($categColor),
            'categCount' => json_encode($categCount),
            'dates'=>json_encode($dates),
            'orderCount' => json_encode($orderCount),
            // 'statutNom' => json_encode($statutNom),
            // 'statutColor' => json_encode($statutColor),
            // 'statutCount' => json_encode($statutCount),
        ]);
    }
}
