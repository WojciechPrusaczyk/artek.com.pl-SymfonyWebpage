<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class SentController extends AbstractController
{
    /*
     * @Route('/sent', name='sent')
     * @param Request $request
     * @return Response
    */
    public function index(Request $request): Response
    {
        $name = $request->query->get("name");
        $contact = $request->query->get("contact");
        $body = $request->query->get("body");

        return $this->render('sent.html.twig', [
            'name' => $name,
            'contact' => $contact,
            'body' => $body,
        ]);
    }
}
