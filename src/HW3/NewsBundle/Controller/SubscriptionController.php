<?php

namespace HW3\NewsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use HW3\NewsBundle\Entity\Subscription;
use HW3\NewsBundle\Form\SubscriptionType;

/**
 * Subscription controller.
 *
 */
class SubscriptionController extends Controller
{

    /**
     * Lists all Subscription entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('NewsBundle:Subscription')->findAll();

        if (count($entities) == 0)
            $this->get('session')->getFlashBag()->add('info', 'Subscription list is empty.');

        return $this->render('NewsBundle:Subscription:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Subscription entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Subscription();
        $form = $this->createForm(new SubscriptionType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            $this->get('session')->getFlashBag()->add('success', 'Subscription created successfully.');
            return $this->redirect($this->generateUrl('subscription_show', array('id' => $entity->getId())));
        }

        $this->get('session')->getFlashBag()->add('error', 'Subscription creation failed.');
        return $this->render('NewsBundle:Subscription:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Subscription entity.
     *
     */
    public function newAction()
    {
        $entity = new Subscription();
        $form   = $this->createForm(new SubscriptionType(), $entity);

        return $this->render('NewsBundle:Subscription:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Subscription entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NewsBundle:Subscription')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Subscription entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('NewsBundle:Subscription:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Subscription entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NewsBundle:Subscription')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Subscription entity.');
        }

        $editForm = $this->createForm(new SubscriptionType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('NewsBundle:Subscription:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Subscription entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NewsBundle:Subscription')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Subscription entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new SubscriptionType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            $this->get('session')->getFlashBag()->add('success', 'Subscription updated successfully.');
            return $this->redirect($this->generateUrl('subscription_edit', array('id' => $id)));
        }

        $this->get('session')->getFlashBag()->add('error', 'Subscription update failed.');
        return $this->render('NewsBundle:Subscription:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Subscription entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('NewsBundle:Subscription')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Subscription entity.');
            }

            $em->remove($entity);
            $em->flush();

            $this->get('session')->getFlashBag()->add('info', 'Subscription deleted successfully.');
        }

        return $this->redirect($this->generateUrl('subscription'));
    }

    /**
     * Creates a form to delete a Subscription entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
