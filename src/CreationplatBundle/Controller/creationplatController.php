<?php

namespace CreationplatBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use CreationplatBundle\Entity\creationplat;
use CreationplatBundle\Form\creationplatType;

/**
 * creationplat controller.
 *
 */
class creationplatController extends Controller
{
    /**
     * Lists all creationplat entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $creationplats = $em->getRepository('CreationplatBundle:creationplat')->findAll();

        return $this->render('creationplat/index.html.twig', array(
            'creationplats' => $creationplats,
        ));
    }

    /**
     * Creates a new creationplat entity.
     *
     */
    public function newAction(Request $request)
    {
        $creationplat = new creationplat();
        $form = $this->createForm('CreationplatBundle\Form\creationplatType', $creationplat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($creationplat);
            $em->flush();

            return $this->redirectToRoute('creationplat_show', array('id' => $creationplat->getId()));
        }

        return $this->render('creationplat/new.html.twig', array(
            'creationplat' => $creationplat,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a creationplat entity.
     *
     */
    public function showAction(creationplat $creationplat)
    {
        $deleteForm = $this->createDeleteForm($creationplat);

        return $this->render('creationplat/show.html.twig', array(
            'creationplat' => $creationplat,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing creationplat entity.
     *
     */
    public function editAction(Request $request, creationplat $creationplat)
    {
        $deleteForm = $this->createDeleteForm($creationplat);
        $editForm = $this->createForm('CreationplatBundle\Form\creationplatType', $creationplat);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($creationplat);
            $em->flush();

            return $this->redirectToRoute('creationplat_edit', array('id' => $creationplat->getId()));
        }

        return $this->render('creationplat/edit.html.twig', array(
            'creationplat' => $creationplat,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a creationplat entity.
     *
     */
    public function deleteAction(Request $request, creationplat $creationplat)
    {
        $form = $this->createDeleteForm($creationplat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($creationplat);
            $em->flush();
        }

        return $this->redirectToRoute('creationplat_index');
    }

    /**
     * Creates a form to delete a creationplat entity.
     *
     * @param creationplat $creationplat The creationplat entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(creationplat $creationplat)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('creationplat_delete', array('id' => $creationplat->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
