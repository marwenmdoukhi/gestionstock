<?php

namespace App\Controller;

use App\Entity\Magazin;
use App\Form\MagazinType;
use App\Repository\MagazinRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/magazin")
 */
class MagazinController extends AbstractController
{
    /**
     * @Route("/", name="magazin_index", methods={"GET"})
     */
    public function index(MagazinRepository $magazinRepository): Response
    {
        return $this->render('magazin/index.html.twig', [
            'magazins' => $magazinRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="magazin_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $magazin = new Magazin();
        $form = $this->createForm(MagazinType::class, $magazin);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($magazin);
            $entityManager->flush();

            return $this->redirectToRoute('magazin_index');
        }

        return $this->render('magazin/new.html.twig', [
            'magazin' => $magazin,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="magazin_show", methods={"GET"})
     */
    public function show(Magazin $magazin): Response
    {
        return $this->render('magazin/show.html.twig', [
            'magazin' => $magazin,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="magazin_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Magazin $magazin): Response
    {
        $form = $this->createForm(MagazinType::class, $magazin);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('magazin_index');
        }

        return $this->render('magazin/edit.html.twig', [
            'magazin' => $magazin,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="magazin_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Magazin $magazin): Response
    {
        if ($this->isCsrfTokenValid('delete'.$magazin->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($magazin);
            $entityManager->flush();
        }

        return $this->redirectToRoute('magazin_index');
    }
}
