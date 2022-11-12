<?php

namespace App\Controller;

use App\Entity\OrderDetails;
use App\Form\OrderDetailsType;
use App\Repository\OrderDetailsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/order-details")
 */
class AdminOrderDetailsController extends AbstractController
{
    /**
     * @Route("/", name="app_admin_order_details_index", methods={"GET"})
     */
    public function index(OrderDetailsRepository $orderDetailsRepository): Response
    {
        return $this->render('admin_order_details/index.html.twig', [
            'order_details' => $orderDetailsRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_admin_order_details_new", methods={"GET", "POST"})
     */
    public function new(Request $request, OrderDetailsRepository $orderDetailsRepository): Response
    {
        $orderDetail = new OrderDetails();
        $form = $this->createForm(OrderDetailsType::class, $orderDetail);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $orderDetailsRepository->add($orderDetail, true);

            return $this->redirectToRoute('app_admin_order_details_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin_order_details/new.html.twig', [
            'order_detail' => $orderDetail,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_admin_order_details_show", methods={"GET"})
     */
    public function show(OrderDetails $orderDetail): Response
    {
        return $this->render('admin_order_details/show.html.twig', [
            'order_detail' => $orderDetail,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_admin_order_details_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, OrderDetails $orderDetail, OrderDetailsRepository $orderDetailsRepository): Response
    {
        $form = $this->createForm(OrderDetailsType::class, $orderDetail);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $orderDetailsRepository->add($orderDetail, true);

            return $this->redirectToRoute('app_admin_order_details_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin_order_details/edit.html.twig', [
            'order_detail' => $orderDetail,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_admin_order_details_delete", methods={"POST"})
     */
    public function delete(Request $request, OrderDetails $orderDetail, OrderDetailsRepository $orderDetailsRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$orderDetail->getId(), $request->request->get('_token'))) {
            $orderDetailsRepository->remove($orderDetail, true);
        }

        return $this->redirectToRoute('app_admin_order_details_index', [], Response::HTTP_SEE_OTHER);
    }
}
