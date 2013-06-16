<?php

namespace HW3\NewsBundle\Controller;

use HW3\NewsBundle\Entity\News;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{
    public function homeAction()
    {
        $em = $this->getDoctrine()->getManager();
        $news = $em->getRepository('NewsBundle:News')->findall();

        return $this->render('NewsBundle::homepage.html.twig', array(
            'groups' => $this->getAllNewsGroups(),
            'news' => $news,
            'important_news' => $news[0],
            "chosenews" => $news,
            "top_news" => $news,
            "recentnews" => $news
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

    public function searchAction()
    {
        return new Response('salam');
    }

    public function singleAction($id)
    {
        $news = $this->getDoctrine()->getManager()->getRepository('NewsBundle:News')->findOneById($id);
        if (!$news)
            throw $this->createNotFoundException('Unable to find News entity.');

        return $this->render('NewsBundle::singlepost.html.twig', array(
            'groups' => $this->getAllNewsGroups(),
            'news' => $news,
            'hot_news' => $this->getAllNews(),
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
}
