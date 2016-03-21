<?php

namespace InviteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use InviteBundle\Entity\Invites;
use InviteBundle\Form\InvitesType;

/**
 * Invites controller.
 *
 */
class InvitesController extends Controller
{
    /**
     * Lists all Invites entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $invites = $em->getRepository('InviteBundle:Invites')->findAll();

        return $this->render('invites/index.html.twig', array(
            'invites' => $invites,
        ));
    }

    /**
     * Creates a new Invites entity.
     *
     */
    public function newAction(Request $request)
    {
        $invite = new Invites();
        $form = $this->createForm('InviteBundle\Form\InvitesType', $invite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($invite);
            $em->flush();

            return $this->redirectToRoute('invites_show', array('id' => $invite->getId()));
        }

        return $this->render('invites/new.html.twig', array(
            'invite' => $invite,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Invites entity.
     *
     */
    public function showAction(Invites $invite)
    {
        $deleteForm = $this->createDeleteForm($invite);

        return $this->render('invites/show.html.twig', array(
            'invite' => $invite,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Invites entity.
     *
     */
    public function editAction(Request $request, Invites $invite)
    {
        $deleteForm = $this->createDeleteForm($invite);
        $editForm = $this->createForm('InviteBundle\Form\InvitesType', $invite);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($invite);
            $em->flush();

            return $this->redirectToRoute('invites_edit', array('id' => $invite->getId()));
        }

        return $this->render('invites/edit.html.twig', array(
            'invite' => $invite,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Invites entity.
     *
     */
    public function deleteAction(Request $request, Invites $invite)
    {
        $form = $this->createDeleteForm($invite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($invite);
            $em->flush();
        }

        return $this->redirectToRoute('invites_index');
    }

    /**
     * Creates a form to delete a Invites entity.
     *
     * @param Invites $invite The Invites entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Invites $invite)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('invites_delete', array('id' => $invite->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
