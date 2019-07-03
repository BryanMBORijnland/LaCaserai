<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LocatieController extends AbstractController
{
    /**
     * @Route("/locatie", name="locatie")
     */
    public function index()
    {
        return $this->render('locatie/index.html.twig', [
            'controller_name' => 'LocatieController',
        ]);
    }
}
