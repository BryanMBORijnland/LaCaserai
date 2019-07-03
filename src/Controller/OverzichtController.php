<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class OverzichtController extends AbstractController
{
    /**
     * @Route("/overzicht", name="overzicht")
     */
    public function index()
    {
        return $this->render('overzicht/index.html.twig', [
            'controller_name' => 'OverzichtController',
        ]);
    }
}
