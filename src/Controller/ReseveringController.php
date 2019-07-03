<?php

namespace App\Controller;

use App\Entity\Resevering;
use App\Form\ReseveringType;
use App\Repository\ReseveringRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/resevering")
 */
class ReseveringController extends AbstractController
{
    /**
     * @Route("/", name="resevering_index", methods={"GET"})
     */
    public function index(ReseveringRepository $reseveringRepository): Response
    {
        return $this->render('resevering/index.html.twig', [
            'reseverings' => $reseveringRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="resevering_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $resevering = new Resevering();
        $form = $this->createForm(ReseveringType::class, $resevering);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($resevering);
            $entityManager->flush();

            return $this->redirectToRoute('resevering_index');
        }

        return $this->render('resevering/new.html.twig', [
            'resevering' => $resevering,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="resevering_show", methods={"GET"})
     */
    public function show(Resevering $resevering): Response
    {
        return $this->render('resevering/show.html.twig', [
            'resevering' => $resevering,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="resevering_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Resevering $resevering): Response
    {
        $form = $this->createForm(ReseveringType::class, $resevering);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('resevering_index', [
                'id' => $resevering->getId(),
            ]);
        }

        return $this->render('resevering/edit.html.twig', [
            'resevering' => $resevering,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="resevering_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Resevering $resevering): Response
    {
        if ($this->isCsrfTokenValid('delete'.$resevering->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($resevering);
            $entityManager->flush();
        }

        return $this->redirectToRoute('resevering_index');
    }
}
