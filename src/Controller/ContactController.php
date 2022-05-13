<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController{
    /*
     * Route("/kontakt", name="contact")
     */
    public function contact() :Response
    {

        return $this->render('NapiszDoNas.html.twig');
    }
}