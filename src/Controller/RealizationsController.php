<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RealizationsController extends AbstractController{
    /*
     * Route("/realizacje", name="realizations")
     */
    public function realizations() :Response
    {

        return $this->render('Realizacje.html.twig');
    }
}