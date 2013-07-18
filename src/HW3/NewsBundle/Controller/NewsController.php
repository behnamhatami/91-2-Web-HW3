<?php

namespace HW3\NewsBundle\Controller;

use HW3\NewsBundle\Entity\News;
use HW3\NewsBundle\Form\NewsType;
use HW3\NewsBundle\Form\NewsUpdateType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * News controller.
 *
 */
class NewsController extends Controller
{

    /**
     * Lists all News entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $repository = $em->getRepository('NewsBundle:News');
        $entities = $repository->findByUser($this->getUser());

        if (count($entities) == 0)
            $this->get('session')->getFlashBag()->add('info', 'News list is empty.');

        return $this->render('NewsBundle:News:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Lists all Unconfirmed News entities.
     *
     */
    public function indexUnconfirmedAction()
    {
        $em = $this->getDoctrine()->getManager();

        $repository = $em->getRepository('NewsBundle:News');
        $entities = $repository->getUnconfirmedNews();

        if (count($entities) == 0)
            $this->get('session')->getFlashBag()->add('info', 'News list is empty.');

        return $this->render('NewsBundle:News:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /*

     * Creates a new News entity.
     *
     */

    public function createAction(Request $request)
    {
        $entity = new News($this->getUser());
        $form = $this->createForm(new NewsType($this->getRequest()->getLocale()), $entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            $this->get('session')->getFlashBag()->add('success', 'News created successfully.');
            return $this->redirect($this->generateUrl('news_show', array('id' => $entity->getId())));
        }

        $this->get('session')->getFlashBag()->add('error', 'News creation failed.');
        return $this->render('NewsBundle:News:new.html.twig', array(
            'entity' => $entity,
            'form' => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new News entity.
     *
     */
    public function newAction()
    {
        $entity = new News($this->getUser());
        $form = $this->createForm(new NewsType($this->getRequest()->getLocale()), $entity);

        return $this->render('NewsBundle:News:new.html.twig', array(
            'entity' => $entity,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a News entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NewsBundle:News')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find News entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('NewsBundle:News:show.html.twig', array(
            'entity' => $entity,
            'delete_form' => $deleteForm->createView(),));
    }

    /**
     * Creates a form to delete a News entity by id.
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

    /**
     * Finds and confirms a News entity.
     *
     */
    public function confirmAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NewsBundle:News')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find News entity.');
        }

        $group = $entity->getNewsGroup();

        foreach ($group->getSubcriptions() as $subs) {
            $this->sendMail($entity, $group->getName(), $subs->getEmail());
        }
        $this->get('session')->getFlashBag()->add('success', 'Email address sended.');


        $entity->setConfirmed(True);
        $em->persist($entity);
        $em->flush();
        $this->get('session')->getFlashBag()->add('success', 'News confirmed successfully.');
        return $this->redirect($this->generateUrl('news_show', array('id' => $id)));
    }

    public function sendMail($news, $groupname, $email)
    {
        $message = \Swift_Message::newInstance()
            ->setSubject($groupname)
            ->setFrom('rezaei70@gmail.com')
            ->setTo($email)
            ->setBody(
                $this->renderView("NewsBundle::email.html.twig", array('news' => $news)), 'text/html'
            );
        $this->get('mailer')->send($message);
    }

    /**
     * Displays a form to edit an existing News entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NewsBundle:News')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find News entity.');
        }

        $entity->inValidateImage();
        $editForm = $this->createForm(new NewsUpdateType($this->getRequest()->getLocale()), $entity);
        $entity->validateImage();
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('NewsBundle:News:edit.html.twig', array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing News entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NewsBundle:News')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find News entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $entity->inValidateImage();
        $editForm = $this->createForm(new NewsUpdateType($this->getRequest()->getLocale()), $entity);
        $entity->validateImage();
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            $this->get('session')->getFlashBag()->add('success', 'News updated successfully.');
            return $this->redirect($this->generateUrl('news_show', array('id' => $id)));
        }

        if ((substr_count($editForm->getErrorsAsString(), 'No errors') == 6 &&
            substr_count($editForm->getErrorsAsString(), 'The file could not be found.') == 1)
        ) {
            $request = $this->getRequest();
            $x1 = $request->get('x1');
            $x2 = $request->get('x2');
            $y1 = $request->get('y1');
            $y2 = $request->get('y2');
            $width = $request->get('width');
            $height = $request->get('height');
            $check = $request->get('edit_image_checkbox');

            if ($check) {
                $img_path = $entity->getFullImagePath();
                $img = new \Imagick($img_path);
                $img->cropimage($width, $height, $x1, $y1);
                $img->writeImage($img_path);

                $em->persist($entity);
                $em->flush();

                $this->get('session')->getFlashBag()->add('success', 'News updated successfully.');
                return $this->redirect($this->generateUrl('news_show', array('id' => $id)));
            }
        }

        $this->get('session')->getFlashBag()->add('error', 'News update failed.');
        return $this->render('NewsBundle:News:edit.html.twig', array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a News entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('NewsBundle:News')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find News entity.');
            }

            for ($i = count($entity->getComments()) - 1; $i >= 0; $i--)
                $em->remove($entity->getComments()[$i]);

            $em->remove($entity);

            $em->flush();
            $this->get('session')->getFlashBag()->add('info', 'News deleted successfully.');
        }

        return $this->redirect($this->generateUrl('news'));
    }
}
