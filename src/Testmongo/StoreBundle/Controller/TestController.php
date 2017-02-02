<?php

namespace Testmongo\StoreBundle\Controller;

use Testmongo\StoreBundle\Entity\Test;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Test controller.
 *
 */
class TestController extends Controller
{
    /**
     * Lists all test entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tests = $em->getRepository('TestmongoStoreBundle:Test')->findAll();

        return $this->render('TestmongoStoreBundle:Test:index.html.twig', array(
            'tests' => $tests,
        ));
    }

    /**
     * Creates a new test entity.
     *
     */
    public function newAction(Request $request)
    {
        $test = new Test();
        $form = $this->createForm('Testmongo\StoreBundle\Form\TestType', $test);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($test);
            $em->flush($test);

            return $this->redirectToRoute('test_show', array('id' => $test->getId()));
        }

        return $this->render('TestmongoStoreBundle:Test:new.html.twig', array(
            'test' => $test,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a test entity.
     *
     */
    public function showAction(Test $test)
    {
        $deleteForm = $this->createDeleteForm($test);

        return $this->render('TestmongoStoreBundle:Test:show.html.twig', array(
            'test' => $test,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing test entity.
     *
     */
    public function editAction(Request $request, Test $test)
    {
        $deleteForm = $this->createDeleteForm($test);
        $editForm = $this->createForm('Testmongo\StoreBundle\Form\TestType', $test);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('test_edit', array('id' => $test->getId()));
        }

        return $this->render('TestmongoStoreBundle:Test:edit.html.twig', array(
            'test' => $test,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a test entity.
     *
     */
    public function deleteAction(Request $request, Test $test)
    {
        $form = $this->createDeleteForm($test);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($test);
            $em->flush($test);
        }

        return $this->redirectToRoute('test_index');
    }

    /**
     * Creates a form to delete a test entity.
     *
     * @param Test $test The test entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Test $test)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('test_delete', array('id' => $test->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
