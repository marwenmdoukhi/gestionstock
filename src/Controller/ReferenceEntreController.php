<?php

namespace App\Controller;

use App\Entity\ReferenceEntre;
use App\Form\ReferenceEntreType;
use App\Repository\ReferenceEntreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/reference")
 */
class ReferenceEntreController extends AbstractController
{
    /**
     * @Route("/", name="reference_entre_index", methods={"GET"})
     */
    public function index(ReferenceEntreRepository $referenceEntreRepository): Response
    {
        return $this->render('reference_entre/index.html.twig', [
            'reference_entres' => $referenceEntreRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="reference_entre_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $referenceEntre = new ReferenceEntre();
        $form = $this->createForm(ReferenceEntreType::class, $referenceEntre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($referenceEntre);
            $entityManager->flush();

            return $this->redirectToRoute('reference_entre_index');
        }

        return $this->render('reference_entre/new.html.twig', [
            'reference_entre' => $referenceEntre,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="reference_entre_show", methods={"GET"})
     */
    public function show(ReferenceEntre $referenceEntre): Response
    {
        return $this->render('reference_entre/show.html.twig', [
            'reference_entre' => $referenceEntre,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="reference_entre_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, ReferenceEntre $referenceEntre): Response
    {
        $form = $this->createForm(ReferenceEntreType::class, $referenceEntre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reference_entre_index');
        }

        return $this->render('reference_entre/edit.html.twig', [
            'reference_entre' => $referenceEntre,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="reference_entre_delete", methods={"DELETE"})
     */
    public function delete(Request $request, ReferenceEntre $referenceEntre): Response
    {
        if ($this->isCsrfTokenValid('delete'.$referenceEntre->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($referenceEntre);
            $entityManager->flush();
        }

        return $this->redirectToRoute('reference_entre_index');
    }
}
