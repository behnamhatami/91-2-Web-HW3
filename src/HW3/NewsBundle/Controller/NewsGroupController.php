<?php

namespace HW3\NewsBundle\Controller;

use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use HW3\NewsBundle\Entity\NewsGroup;
use HW3\NewsBundle\Form\NewsGroupType;
use Symfony\Component\HttpFoundation\Response;

/**
 * NewsGroup controller.
 *
 */
class NewsGroupController extends Controller
{

    /**
     * Lists all NewsGroup entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('NewsBundle:NewsGroup')->findAll();


        if (count($entities) == 0)
            $this->get('session')->getFlashBag()->add('info', 'News Group list is empty.');

        return $this->render('NewsBundle:NewsGroup:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new NewsGroup entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new NewsGroup();
        $form = $this->createForm(new NewsGroupType(), $entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            $this->get('session')->getFlashBag()->add('success', 'News Group created successfully.');
            return $this->redirect($this->generateUrl('newsgroup_show', array('id' => $entity->getId())));
        }

        $this->get('session')->getFlashBag()->add('error', 'News Group creation failed.');
        return $this->render('NewsBundle:NewsGroup:new.html.twig', array(
            'entity' => $entity,
            'form' => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new NewsGroup entity.
     *
     */
    public function newAction()
    {
        $entity = new NewsGroup();
        $form = $this->createForm(new NewsGroupType(), $entity);

        return $this->render('NewsBundle:NewsGroup:new.html.twig', array(
            'entity' => $entity,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a NewsGroup entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NewsBundle:NewsGroup')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find NewsGroup entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('NewsBundle:NewsGroup:show.html.twig', array(
            'entity' => $entity,
            'delete_form' => $deleteForm->createView(),));
    }

    /**
     * Displays a form to edit an existing NewsGroup entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NewsBundle:NewsGroup')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find NewsGroup entity.');
        }

        $editForm = $this->createForm(new NewsGroupType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('NewsBundle:NewsGroup:edit.html.twig', array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing NewsGroup entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NewsBundle:NewsGroup')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find NewsGroup entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new NewsGroupType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            $this->get('session')->getFlashBag()->add('success', 'News Group updated successfully.');
            return $this->redirect($this->generateUrl('newsgroup_edit', array('id' => $id)));
        }

        $this->get('session')->getFlashBag()->add('error', 'News Group update failed.');
        return $this->render('NewsBundle:NewsGroup:edit.html.twig', array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a NewsGroup entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('NewsBundle:NewsGroup')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find NewsGroup entity.');
            }

            $em->remove($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add('info', 'News Group deleted successfully.');
        }

        return $this->redirect($this->generateUrl('newsgroup'));
    }

    /**
     * Creates a form to delete a NewsGroup entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm();
    }
}
