<?php

namespace App\Controller;

use App\Entity\ReferenceAchat;
use App\Form\ReferenceAchatType;
use App\Repository\ReferenceAchatRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/reference/achat")
 */
class ReferenceAchatController extends AbstractController
{
    /**
     * @Route("/", name="reference_achat_index", methods={"GET"})
     */
    public function index(ReferenceAchatRepository $referenceAchatRepository): Response
    {
        return $this->render('reference_achat/index.html.twig', [
            'reference_achats' => $referenceAchatRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="reference_achat_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $referenceAchat = new ReferenceAchat();
        $form = $this->createForm(ReferenceAchatType::class, $referenceAchat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($referenceAchat);
            $entityManager->flush();

            return $this->redirectToRoute('reference_achat_index');
        }

        return $this->render('reference_achat/new.html.twig', [
            'reference_achat' => $referenceAchat,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="reference_achat_show", methods={"GET"})
     */
    public function show(ReferenceAchat $referenceAchat): Response
    {
        return $this->render('reference_achat/show.html.twig', [
            'reference_achat' => $referenceAchat,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="reference_achat_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, ReferenceAchat $referenceAchat): Response
    {
        $form = $this->createForm(ReferenceAchatType::class, $referenceAchat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reference_achat_index');
        }

        return $this->render('reference_achat/edit.html.twig', [
            'reference_achat' => $referenceAchat,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="reference_achat_delete", methods={"DELETE"})
     */
    public function delete(Request $request, ReferenceAchat $referenceAchat): Response
    {
        if ($this->isCsrfTokenValid('delete'.$referenceAchat->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($referenceAchat);
            $entityManager->flush();
        }

        return $this->redirectToRoute('reference_achat_index');
    }
}
