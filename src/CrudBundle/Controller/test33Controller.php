<?php

namespace CrudBundle\Controller;

use CrudBundle\Entity\test33;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Test33 controller.
 *
 * @Route("test33")
 */
class test33Controller extends Controller
{
    /**
     * Lists all test33 entities.
     *
     * @Route("/", name="test33_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $test33s = $em->getRepository('CrudBundle:test33')->findAll();

        return $this->render('test33/index.html.twig', array(
            'test33s' => $test33s,
        ));
    }

    /**
     * Creates a new test33 entity.
     *
     * @Route("/new", name="test33_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $test33 = new Test33();
        $form = $this->createForm('CrudBundle\Form\test33Type', $test33);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($test33);
            $em->flush();

            return $this->redirectToRoute('test33_show', array('id' => $test33->getId()));
        }

        return $this->render('test33/new.html.twig', array(
            'test33' => $test33,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a test33 entity.
     *
     * @Route("/{id}", name="test33_show")
     * @Method("GET")
     */
    public function showAction(test33 $test33)
    {
        $deleteForm = $this->createDeleteForm($test33);

        return $this->render('test33/show.html.twig', array(
            'test33' => $test33,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing test33 entity.
     *
     * @Route("/{id}/edit", name="test33_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, test33 $test33)
    {
        $deleteForm = $this->createDeleteForm($test33);
        $editForm = $this->createForm('CrudBundle\Form\test33Type', $test33);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('test33_edit', array('id' => $test33->getId()));
        }

        return $this->render('test33/edit.html.twig', array(
            'test33' => $test33,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a test33 entity.
     *
     * @Route("/{id}", name="test33_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, test33 $test33)
    {
        $form = $this->createDeleteForm($test33);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($test33);
            $em->flush();
        }

        return $this->redirectToRoute('test33_index');
    }

    /**
     * Creates a form to delete a test33 entity.
     *
     * @param test33 $test33 The test33 entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(test33 $test33)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('test33_delete', array('id' => $test33->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
