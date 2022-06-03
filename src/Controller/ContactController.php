<?php

namespace App\Controller;

use App\Form\mail;
use App\Form\MailerFormControllerType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController{
    /*
     * Route("/kontakt", name="contact")
     */
    public function contact(Request $request) :Response
    {
        $mail = new mail();
        $form = $this->createForm(MailerFormControllerType::class, $mail);
        $form->handleRequest($request);

        if ( $form->isSubmitted() && $form->isValid() ) {

            $data = $form->getData();

            $name = $data->name;
            $contact = $data->contact;
            $body = $data->body;

            return $this->redirectToRoute('sent', [
                'name' => $name,
                'contact' => $contact,
                'body' => $body,
            ]);
        }

        return $this->render('NapiszDoNas.html.twig', [
            'mailerForm' => $form->createView()
        ]);
    }
}