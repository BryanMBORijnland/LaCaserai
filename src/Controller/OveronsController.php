<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class OveronsController extends AbstractController
{
    /**
     * @Route("/overons", name="overons")
     */
    public function index()
    {
        return $this->render('overons/index.html.twig', [
            'controller_name' => 'OveronsController',
        ]);
    }
}
