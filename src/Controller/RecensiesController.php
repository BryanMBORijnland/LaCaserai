<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RecensiesController extends AbstractController
{
    /**
     * @Route("/recensies", name="recensies")
     */
    public function index()
    {
        return $this->render('recensies/index.html.twig', [
            'controller_name' => 'RecensiesController',
        ]);
    }
}
