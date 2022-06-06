<?php

namespace App\Controller;

use App\Form\mail;
use App\Form\MailerFormControllerType;
use Couchbase\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mime\Email;

class ContactController extends AbstractController{
    /*
     * Route("/kontakt", name="contact")
     */
    public function contact(Request $request, MailerInterface $mailer) :Response
    {

        $mail = new mail();
        $form = $this->createForm(MailerFormControllerType::class, $mail);
        $form->handleRequest($request);

        $data = $form->getData();
        $name = $data->name;
        $contact = $data->contact;
        $body = $data->body;

        if ( $form->isSubmitted() && $form->isValid() ) {

            $email = (new Email())
                ->from("$name")
                ->to("djartek1988@artek.com.pl")
                ->subject("Nowy mail od: $name")
                ->text("Nadawca: $name \n Dane kontaktowe: $contact \n Treść: \n $body")
                ->html("
                    <h1>Nadawca: $name</h1>
                    <h2>Dane kontaktowe: $contact</h2>
                    <h2>Treść: $body</h2>
                ");

            try { $mailer->send($email); } catch (TransportExceptionInterface $e) {}

            return $this->redirectToRoute('sent', [
                'isSent' => "Wiadomość została wysłana ✅",
                'name' => $name,
                'contact' => $contact,
                'body' => $body,
            ]);
        }
        else if ($form->isSubmitted() && !($form->isValid())){
            return $this->redirectToRoute('sent', [
                'isSent' => "Wystąpił błąd!",
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