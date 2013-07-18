<?php

namespace HW3\NewsBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Security\Acl\Domain\DoctrineAclCache;

/**
 * NewsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class NewsRepository extends EntityRepository
{
    function getNewsCount($group)
    {
        return count($this->findBy(array(
            'newsgroup' => $group,
            'confirmed' => 1
        )));
    }

    function getHotNews($group, $limit, $offset = 0)
    {
        $db = $this->createQueryBuilder('n')
            ->where('n.creation_date > :date')
            ->setParameter('date', new \DateTime('yesterday'))
            ->andWhere('n.confirmed = true')
            ->addOrderBy('n.visit', 'DESC')
            ->addOrderBy('n.creation_date', 'DESC')
            ->setMaxResults($limit)
            ->setFirstResult($offset);

        if ($group != null)
            $db = $db->andWhere('n.newsgroup = :newsgroup')
                ->setParameter('newsgroup', $group);
        $result = $db->getQuery()->getResult();

        if (count($result) < $limit / 2) {
            $db = $this->createQueryBuilder('n')
                ->where('n.confirmed = true')
                ->addOrderBy('n.visit', 'DESC')
                ->addOrderBy('n.creation_date', 'DESC')
                ->setFirstResult($offset)
                ->setMaxResults($limit);
            if ($group != null)
                $db = $db->andWhere('n.newsgroup = :newsgroup')
                    ->setParameter('newsgroup', $group);

            $result = $db->getQuery()->getResult();
        }
        return $result;
    }

    function getRecentNews($group, $limit, $offset = 0)
    {
        $db = $this->createQueryBuilder('n')
            ->where('n.confirmed = true')
            ->addOrderBy('n.creation_date', 'DESC')
            ->setFirstResult($offset)
            ->setMaxResults($limit);

        if ($group != null)
            $db = $db->andWhere('n.newsgroup = :newsgroup')
                ->setParameter('newsgroup', $group);


        return $db->getQuery()->getResult();
    }

    function getRelatedNews($news, $limit, $offset = 0)
    {

        $query = $this->createQueryBuilder('n')
            ->add('select', 'n, count(tag.id) AS ct')
            ->join('n.tags', 'tag');

        $tags = $news->getTags();
        foreach ($tags as $tag)
            $query = $query->orWhere('tag.id = ' . $tag->getId());

        $query = $query->andWhere('n.confirmed = true');

        $query = $query->groupBy('n.id')
            ->addOrderBy('ct', 'DESC')
            ->setFirstResult($offset)
            ->setMaxResults($limit);

        $result = array();
        foreach ($query->getQuery()->getResult() as $res)
            $result[] = $res[0];

        return $result;
    }

    function search($query_string, $fields, $from, $to, $newsgroups, $limit, $offset, $count = false)
    {
        $query_string = '%' . $query_string . '%';

        $query = null;

        if ($count)
            $query = $this->createQueryBuilder('n')
                ->add('select', 'count(n.id)')
                ->where('n.confirmed = true');
        else
            $query = $this->createQueryBuilder('n')
                ->where('n.confirmed = true');


        if ($from != null)
            $query = $query->andWhere('n.creation_date >= :from_date')
                ->setParameter('from_date', $from);

        if ($to != null)
            $query = $query->andWhere('n.creation_date <= :to_date')
                ->setParameter('to_date', $to);

        if ($newsgroups != null) {
            $str_cont = '';
            foreach ($newsgroups as $group) {
                if (strlen($str_cont) > 0)
                    $str_cont = $str_cont . ' OR ';
                $str_cont = $str_cont . 'n.newsgroup = ' . $group;
            }
            if (strlen($str_cont) > 0)
                $query = $query->andWhere($str_cont);
        }

        if ($fields != null) {
            $str_cont = '';
            foreach ($fields as $field) {
                if (strlen($str_cont) > 0)
                    $str_cont = $str_cont . ' OR ';
                $str_cont = $str_cont . 'n.' . $field . ' LIKE :' . $field;
            }
            if (strlen($str_cont) > 0)
                $query = $query->andWhere($str_cont);
            foreach ($fields as $field)
                $query = $query->setParameter($field, $query_string);
        } else {
            if (!$count)
                return array();
            else return 0;
        }

        if (!$count)
            $query = $query->addOrderBy('n.creation_date', 'DESC')
                ->setMaxResults($limit)
                ->setFirstResult($offset);

        if (!$count)
            return $query->getQuery()->getResult();
        else return $query->getQuery()->getSingleScalarResult();
    }

    function getSelectedNews($group, $limit, $offset = 0)
    {
        $db = $this->createQueryBuilder('n')
            ->where('n.selected = true')
            ->andWhere('n.confirmed = true')
            ->addOrderBy('n.creation_date', 'DESC')
            ->setMaxResults($limit)
            ->setFirstResult($offset);

        if ($group != null)
            $db = $db->andWhere('n.newsgroup = :newsgroup')
                ->setParameter('newsgroup', $group);

        $result = $db->getQuery()->getResult();
        return $result;
    }

    function getConfirmedNews($group, $limit, $offset = 0)
    {
        $db = $this->createQueryBuilder('n')
            ->where('n.confirmed = true')
            ->addOrderBy('n.creation_date', 'DESC')
            ->setMaxResults($limit)
            ->setFirstResult($offset);

        if ($group != null)
            $db = $db->andWhere('n.newsgroup = :newsgroup')
                ->setParameter('newsgroup', $group);

        $result = $db->getQuery()->getResult();
        return $result;
    }

    function getUnconfirmedNews()
    {
        $db = $this->createQueryBuilder('n')
            ->where('n.confirmed = false')
            ->addOrderBy('n.creation_date', 'DESC');
        $result = $db->getQuery()->getResult();
        return $result;
    }
}