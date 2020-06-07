<?php

namespace App\Controller;

use App\Entity\Fourniseur;
use App\Form\FourniseurType;
use App\Repository\FourniseurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/fourniseur")
 */
class FourniseurController extends AbstractController
{
    /**
     * @Route("/", name="fourniseur_index", methods={"GET"})
     */
    public function index(FourniseurRepository $fourniseurRepository): Response
    {
        return $this->render('fourniseur/index.html.twig', [
            'fourniseurs' => $fourniseurRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="fourniseur_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $fourniseur = new Fourniseur();
        $form = $this->createForm(FourniseurType::class, $fourniseur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($fourniseur);
            $entityManager->flush();

            return $this->redirectToRoute('fourniseur_index');
        }

        return $this->render('fourniseur/new.html.twig', [
            'fourniseur' => $fourniseur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="fourniseur_show", methods={"GET"})
     */
    public function show(Fourniseur $fourniseur): Response
    {
        return $this->render('fourniseur/show.html.twig', [
            'fourniseur' => $fourniseur,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="fourniseur_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Fourniseur $fourniseur): Response
    {
        $form = $this->createForm(FourniseurType::class, $fourniseur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('fourniseur_index');
        }

        return $this->render('fourniseur/edit.html.twig', [
            'fourniseur' => $fourniseur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="fourniseur_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Fourniseur $fourniseur): Response
    {
        if ($this->isCsrfTokenValid('delete'.$fourniseur->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($fourniseur);
            $entityManager->flush();
        }

        return $this->redirectToRoute('fourniseur_index');
    }
}
