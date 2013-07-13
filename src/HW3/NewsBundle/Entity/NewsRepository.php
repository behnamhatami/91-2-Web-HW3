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
    function getNewsFromGroup($group, $from, $limit)
    {
        return $this->findBy(array(
            'newsgroup' => $group->getId(),
            'confirmed' => 1
        ), array(
            'creation_date' => 'DESC',
        ), $limit, $from);
    }

    function getNewsCount($group)
    {
        return count($this->findBy(array(
            'newsgroup' => $group
        )));
    }

    function getHotNews($limit)
    {
        $db = $this->createQueryBuilder('n')
            ->where('n.creation_date > :date')
            ->setParameter('date', new \DateTime('yesterday'))
            ->andWhere('n.confirmed = true')
            ->addOrderBy('n.visit', 'DESC')
            ->addOrderBy('n.creation_date', 'DESC')
            ->setMaxResults($limit);
        $result = $db->getQuery()->getResult();

        if (count($result) < $limit / 2) {
            $db = $this->createQueryBuilder('n')
                ->where('n.confirmed = true')
                ->addOrderBy('n.visit', 'DESC')
                ->addOrderBy('n.creation_date', 'DESC')
                ->setMaxResults($limit);
            $result = $db->getQuery()->getResult();
        }
        return $result;
    }

    function getRecentNews($limit)
    {
        $db = $this->createQueryBuilder('n')
            ->where('n.confirmed = true')
            ->addOrderBy('n.creation_date', 'DESC')
            ->setMaxResults($limit);
        return $db->getQuery()->getResult();
    }

    function getRelatedNews($news, $limit)
    {

        $query = $this->createQueryBuilder('n')
            ->add('select', 'n, count(tag.id) AS ct')
            ->join('n.tags', 'tag');

        $tags = $news->getTags();
        foreach ($tags as $tag)
            $query = $query->orWhere('tag.id = ' . $tag->getId());

        $query = $query->groupBy('n.id')
            ->addOrderBy('ct', 'DESC')
            ->setMaxResults($limit);

        $result = array();
        foreach ($query->getQuery()->getResult() as $res)
            $result[] = $res[0];

        return $result;
    }

    function search($query_string, $fields, $from, $to, $newsgroups, $limit, $offset)
    {
        $query_string = '%' . $query_string . '%';

        $query = $this->createQueryBuilder('n')
            ->where('n.confirmed = true');

        if ($from != null)
            $query = $query->andWhere('n.creation_date >= :from_date')
                ->setParameter('from_date', $from);

        if ($to != null)
            $query = $query->andWhere('n.creation_date <= :to_date')
                ->setParameter('to_date', $to);

        $str_cont = '';
        foreach ($newsgroups as $group) {
            if (strlen($str_cont) > 0)
                $str_cont = $str_cont . ' OR ';
            $str_cont = $str_cont . 'n.newsgroup = ' . $group->getID();
        }
        if (strlen($str_cont) > 0)
            $query = $query->andWhere($str_cont);


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

        $query = $query->addOrderBy('n . creation_date', 'DESC')
            ->setMaxResults($limit)
            ->setFirstResult($offset);

        return $query->getQuery()->getResult();
    }

    function getSelectedNews($limit)
    {
        $db = $this->createQueryBuilder('n')
            ->where('n . selected = true')
            ->where('n . confirmed = true')
            ->addOrderBy('n . creation_date', 'DESC')
            ->setMaxResults($limit);
        $result = $db->getQuery()->getResult();
        return $result;
    }

    function getConfirmedNews($limit)
    {
        $db = $this->createQueryBuilder('n')
            ->where('n . confirmed = true')
            ->addOrderBy('n . creation_date', 'DESC')
            ->setMaxResults($limit);
        $result = $db->getQuery()->getResult();
        return $result;
    }

    function getUnconfirmedNews()
    {
        $db = $this->createQueryBuilder('n')
            ->where('n . confirmed = false')
            ->addOrderBy('n . creation_date', 'DESC');
        $result = $db->getQuery()->getResult();
        return $result;
    }
}