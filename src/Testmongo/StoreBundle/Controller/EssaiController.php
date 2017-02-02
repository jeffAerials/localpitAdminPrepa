<?php

namespace Testmongo\StoreBundle\Controller;

use Testmongo\StoreBundle\Entity\Essai;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Essai controller.
 *
 */
class EssaiController extends Controller
{
    /**
     * Lists all essai entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $essais = $em->getRepository('TestmongoStoreBundle:Essai')->findAll();

        return $this->render('essai/index.html.twig', array(
            'essais' => $essais,
        ));
    }

    /**
     * Creates a new essai entity.
     *
     */
    public function newAction(Request $request)
    {
        $essai = new Essai();
        $form = $this->createForm('Testmongo\StoreBundle\Form\EssaiType', $essai);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($essai);
            $em->flush($essai);

            return $this->redirectToRoute('essai_show', array('id' => $essai->getId()));
        }

        return $this->render('essai/new.html.twig', array(
            'essai' => $essai,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a essai entity.
     *
     */
    public function showAction(Essai $essai)
    {
        $deleteForm = $this->createDeleteForm($essai);

        return $this->render('essai/show.html.twig', array(
            'essai' => $essai,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing essai entity.
     *
     */
    public function editAction(Request $request, Essai $essai)
    {
        $deleteForm = $this->createDeleteForm($essai);
        $editForm = $this->createForm('Testmongo\StoreBundle\Form\EssaiType', $essai);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('essai_edit', array('id' => $essai->getId()));
        }

        return $this->render('essai/edit.html.twig', array(
            'essai' => $essai,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a essai entity.
     *
     */
    public function deleteAction(Request $request, Essai $essai)
    {
        $form = $this->createDeleteForm($essai);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($essai);
            $em->flush($essai);
        }

        return $this->redirectToRoute('essai_index');
    }

    /**
     * Creates a form to delete a essai entity.
     *
     * @param Essai $essai The essai entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Essai $essai)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('essai_delete', array('id' => $essai->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
