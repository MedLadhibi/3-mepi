<?php

namespace AssossiationBundle\Controller;

use AssossiationBundle\Entity\Assossiation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Assossiation controller.
 *
 * @Route("assossiation")
 */
class AssossiationController extends Controller
{
    /**
     * Lists all assossiation entities.
     *
     * @Route("/", name="assossiation_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $assossiations = $em->getRepository('AssossiationBundle:Assossiation')->findAll();

        return $this->render('assossiation/index.html.twig', array(
            'assossiations' => $assossiations,
        ));
    }

    /**
     * Creates a new assossiation entity.
     *
     * @Route("/new", name="assossiation_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $assossiation = new Assossiation();
        $form = $this->createForm('AssossiationBundle\Form\AssossiationType', $assossiation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($assossiation);
            $em->flush();

            return $this->redirectToRoute('assossiation_edit', array('id' => $assossiation->getId()));
        }

        return $this->render('assossiation/new.html.twig', array(
            'assossiation' => $assossiation,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a assossiation entity.
     *
     * @Route("/{id}", name="assossiation_show")
     * @Method("GET")
     */
    public function showAction(Assossiation $assossiation)
    {
        $deleteForm = $this->createDeleteForm($assossiation);

        return $this->render('assossiation/show.html.twig', array(
            'assossiation' => $assossiation,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing assossiation entity.
     *
     * @Route("/{id}/edit", name="assossiation_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Assossiation $assossiation)
    {
        $deleteForm = $this->createDeleteForm($assossiation);
        $editForm = $this->createForm('AssossiationBundle\Form\AssossiationType', $assossiation);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('assossiation_edit', array('id' => $assossiation->getId()));
        }

        return $this->render('assossiation/edit.html.twig', array(
            'assossiation' => $assossiation,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a assossiation entity.
     *
     * @Route("/{id}", name="assossiation_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Assossiation $assossiation)
    {
        $form = $this->createDeleteForm($assossiation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($assossiation);
            $em->flush();
        }

        return $this->redirectToRoute('assossiation_index');
    }

    /**
     * Creates a form to delete a assossiation entity.
     *
     * @param Assossiation $assossiation The assossiation entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Assossiation $assossiation)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('assossiation_delete', array('id' => $assossiation->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
