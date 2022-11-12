<?php

namespace App\Controller;

use App\Classe\Mail;
use App\Form\ContactType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    /**
     * @Route("/nous-contacter", name="app_contact")
     */

    public function index(Request $request): Response
    {
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);
        $content = [];
        if ($form->isSubmitted() && $form->isValid()) {
            $this->addFlash('notice', 'Merci de nous avoir contacté. Notre équipe va vous répondre dans les meilleurs délais.');
            // dd($form->getData());
            // dd($form);

            // $content = $form->getData();
            $a= implode($form->getData());
            // dd($a);
            // foreach ($contact as $key => $value) {
            // {
            //     // dd($value, $contact, $key);
            // }
        // }
            $content = $a;
            // dd($content);
            $mail = new Mail();
            $mail->send('chaira10@hotmail.fr', 'la boutique ...','Vous avez reçu une demande de contact de',$content);
        }
        return $this->render('contact/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
