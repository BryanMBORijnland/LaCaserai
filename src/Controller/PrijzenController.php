<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PrijzenController extends AbstractController
{
    /**
     * @Route("/prijzen", name="prijzen")
     */
    public function index()
    {
        return $this->render('prijzen/index.html.twig', [
            'controller_name' => 'PrijzenController',
        ]);
    }
}
