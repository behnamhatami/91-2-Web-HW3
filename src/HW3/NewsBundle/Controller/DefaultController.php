<?php

namespace HW3\NewsBundle\Controller;


use HW3\CommentBundle\Entity\Comment;
use HW3\NewsBundle\Entity\Subscription;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
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
            'important_news' => $repo->getHotNews(null, 1)[0],
            "selected_news" => $repo->getSelectedNews(null, 15),
            "top_news" => $repo->getHotNews(null, 12),
            "recent_news" => $repo->getRecentNews(null, 15),
        ));
    }

    private function getAllNewsGroups()
    {
        $em = $this->getDoctrine()->getManager();
        $groups = $em->getRepository('NewsBundle:NewsGroup')->findAll();

        foreach ($groups as $group)
            $group->setTopNews($em->getRepository('NewsBundle:News')->getHotNews($group, 7, 0));
        return $groups;
    }

    public function headerAction()
    {
        return $this->render('NewsBundle::header.html.twig', array(
            'groups' => $this->getAllNewsGroups(),
        ));
    }

    public function categoryAction($id, $page)
    {
        $em = $this->getDoctrine()->getManager();
        $news_repo = $em->getRepository('NewsBundle:News');
        $group = $em->getRepository('NewsBundle:NewsGroup')->findOneById($id);
        if (!$group)
            throw $this->createNotFoundException('Unable to find News entity.');
        $latest_news = $news_repo->getRecentNews($group, 3, 0);
        $news = $news_repo->getRecentNews($group, 15, ($page - 1) * 15);

        return $this->render('NewsBundle::category.html.twig', array(
            'news_count' => $news_repo->getNewsCount($group),
            'group' => $group,
            'groups' => $this->getAllNewsGroups(),
            'all_news' => $news,
            'latest_news' => $latest_news,
            'current_page' => $page,
            'selected_news' => $news_repo->getSelectedNews($group, 10),
        ));
    }

    public function ajaxAction()
    {
        $em = $this->getDoctrine()->getManager();
        $action = $this->getRequest()->get('action');
        $id = $this->getRequest()->get('id');
        if (($action == 'pos' || $action == 'neg') and $id) {
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
            $parentid = null;
            if ($entity->getParent() != null)
                $parentid = $entity->getParent()->getId();
            return new JsonResponse(
                array('result' => 'yes', 'id' => $entity->getId(), 'parent' => $parentid, 'content' => $entity->getContent(),
                    'pos' => $entity->getPos(), 'neg' => $entity->getNeg(), 'composer' => $entity->getComposer()));
        }

        if($action == 'subscribe')
        {
            $entity = new Subscription();
            $request = $this->getRequest();

            $group = $em->getRepository('NewsBundle:NewsGroup')->findOneById($request->get('id'));

            $entity->setNewsgroup($group);
            $entity->setEmail($request->get('email'));
            $em->persist($entity);
            $em->flush();
            return new JsonResponse(array('result'=> 'yes'));
        }

        return new JsonResponse(array('result' => 'no'));
    }

    public function searchAction($page)
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('NewsBundle:News');

        $request = $this->getRequest();;
        $query_string = $request->get('query');
        $fields = $request->get('positions');
        $newsgroups = $request->get('services');
        $to_date = $request->get('dateto');
        $from_date = $request->get('datefrom');

        return $this->render('NewsBundle::search.html.twig', array(
            'groups' => $this->getAllNewsGroups(),
            'news' => $repo->getConfirmedNews(null, 50),
            'search_results' => $repo->search($query_string, $fields, $from_date,
                $to_date, $newsgroups, 15, ($page - 1) * 15),
            'selected_news' => $repo->getSelectedNews(null, 10),
            'hot_news' => $repo->getHotNews(null, 10),
            'news_count' => $repo->search($query_string, $fields, $from_date,
               $to_date, $newsgroups, 15, ($page - 1) * 15, true),
            'current_page' => $page,
        ));
    }

    public function RSSAction()
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('NewsBundle:News');

        $request = $this->getRequest();
        $query_string = $request->get('query');
        $fields = $request->get('positions');
        $newsgroups = $request->get('services');
        $to_date = $request->get('dateto');
        $from_date = $request->get('datefrom');
        $page = $request->get('page');
        $news = null;

        if ($query_string != null) {
            $news = $repo->search($query_string, $fields, $from_date,
                $to_date, $newsgroups, 15, ($page - 1) * 15);
        } else {
            $news = $repo->getConfirmedNews(null, 15, ($page - 1) * 15);
        }

        $feed = $this->get('eko_feed.feed.manager')->get('news');
        $feed->addFromArray($news);

        return new Response($feed->render('rss'));
    }

    public function singleAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('NewsBundle:News');

        $news = $repo->findOneById($id);

        if (!$news)
            throw $this->createNotFoundException('Unable to find News entity.');

        $news->visit();
        $em->persist($news);
        $em->flush();

        return $this->render('NewsBundle::singlepost.html.twig', array(
            'groups' => $this->getAllNewsGroups(),
            'news' => $news,
            'related_news' => $repo->getRelatedNews($news, 10),
            'comments' => $news->sortComments(),
            'selected_news' => $repo->getSelectedNews(null, 10)
        ));
    }

    private function getSerializer($ignore_list)
    {
        $normalizer = new GetSetMethodNormalizer();
        $normalizer->setIgnoredAttributes($ignore_list);
        $encoder = new JsonEncoder();

        $serializer = new Serializer(array($normalizer), array($encoder));
        return $serializer;
    }

    private function getJson($entity)
    {
        $serializer = new Serializer(array(new GetSetMethodNormalizer()), array('json' => new
        JsonEncoder()));
        return $serializer->serialize($entity, 'json');
    }
}
