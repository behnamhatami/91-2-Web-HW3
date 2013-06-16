<?php

namespace HW3\NewsBundle\Controller;

use HW3\CommentBundle\Entity\Comment;
use HW3\CommentBundle\Form\CommentType;
use HW3\NewsBundle\Entity\News;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Serializer;


class DefaultController extends Controller
{
    public function homeAction()
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('NewsBundle:News');

        return $this->render('NewsBundle::homepage.html.twig', array(
            'groups' => $this->getAllNewsGroups(),
            'news' => $repo->findAll(),
            'important_news' => $repo->findAll()[0],
            "chosenews" => $repo->getHotNews(10),
            "top_news" => $repo->getHotNews(10),
            "recentnews" => $repo->getRecentNews(19)
        ));
    }

    public function headerAction()
    {
        return $this->render('NewsBundle::header.html.twig', array(
            'groups' => $this->getAllNewsGroups(),
        ));
    }

    public function categoryAction($id)
    {
        $page = 1;
        if ($this->getRequest()->get('page'))
            $page = $this->getRequest()->get('page');

        $em = $this->getDoctrine()->getManager();
        $group = $em->getRepository('NewsBundle:NewsGroup')->findOneById($id);
        if (!$group)
            throw $this->createNotFoundException('Unable to find News entity.');

        $latest_news = $em->getRepository('NewsBundle:News')->getNewsFromGroup($group, 0, 3);
        $news = $em->getRepository('NewsBundle:News')->getNewsFromGroup($group, ($page - 1) * 15, 15);
        return $this->render('NewsBundle::category.html.twig', array(
            'news_count' => $em->getRepository('NewsBundle:News')->getNewsCount($group),
            'group' => $group,
            'groups' => $this->getAllNewsGroups(),
            'all_news' => $news,
            'latest_news' => $latest_news,
            'current_page' => $page,
        ));
    }

    public function ajaxAction()
    {
        $em = $this->getDoctrine()->getManager();
        $action = $this->getRequest()->get('action');
        $id = $this->getRequest()->get('id');
        if ($action and $id) {
            $repo = $em->getRepository('CommentBundle:Comment');
            $comment = $repo->findOneById($id);

            if (($action != 'neg' and $action != 'pos') or !$comment)
                return new JsonResponse(array('result' => 'no'));

            if ($action == 'neg')
                $comment->setNeg($comment->getNeg() + 1);

            if ($action == 'pos')
                $comment->setPos($comment->getPos() + 1);

            $em->persist($comment);
            $em->flush();
            return new JsonResponse(array('result' => 'yes', 'neg' => $comment->getNeg(),
                'pos' => $comment->getPos()));
        }

        if ($action == 'create') {
            $entity = new Comment();
            $request = $this->getRequest();
            $entity->setComposer($request->get('composer'));
            $entity->setParent($em->getRepository('CommentBundle:Comment')->findOneById($request->get('parent')));
            $entity->setNews($em->getRepository('NewsBundle:News')->findOneById($request->get('news')));
            $entity->setContent($request->get('content'));
            $em->persist($entity);
            $em->flush();
            return new JsonResponse(
                array('result' => 'yes'));
        }

        return new JsonResponse(array('result' => 'no'));
    }

    public function searchAction()
    {
        return new Response('salam');
    }

    public function singleAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('NewsBundle:News');
        $news = $repo->findOneById($id);

        if (!$news)
            throw $this->createNotFoundException('Unable to find News entity.');
        $news->setVisit($news->getVisit() + 1);
        $em->persist($news);
        $em->flush();

        return $this->render('NewsBundle::singlepost.html.twig', array(
            'groups' => $this->getAllNewsGroups(),
            'news' => $news,
            'hotnews' => $repo->getHotNews(10),
        ));
    }

    private function getAllNews()
    {
        $em = $this->getDoctrine()->getManager();
        return $em->getRepository('NewsBundle:News')->findAll();
    }

    private function getAllNewsGroups()
    {
        $em = $this->getDoctrine()->getManager();
        $groups = $em->getRepository('NewsBundle:NewsGroup')->findAll();

        foreach ($groups as $group)
            $group->setTopNews($em->getRepository('NewsBundle:News')->getNewsFromGroup($group, 0, 7));
        return $groups;
    }

    private function getJson($entity)
    {
        $serializer = new Serializer(array(new GetSetMethodNormalizer()), array('json' => new
        JsonEncoder()));
        return $serializer->serialize($entity, 'json');
    }
}
