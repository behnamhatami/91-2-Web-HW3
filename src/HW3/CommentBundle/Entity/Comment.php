<?php

namespace HW3\CommentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comment
 */
class Comment
{

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $content;

    /**
     * @var string
     */
    private $composer;

    /**
     * @var \DateTime
     */
    private $creation_date;

    /**
     * @var integer
     */
    private $pos;

    /**
     * @var integer
     */
    private $neg;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $children;

    /**
     * @var \HW3\NewsBundle\Entity\News
     */
    private $news;

    /**
     * @var \HW3\CommentBundle\Entity\Comment
     */
    private $parent;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->children = new \Doctrine\Common\Collections\ArrayCollection();
        $this->setCreationDate('now');
        $this->setNeg(0);
        $this->setPos(0);
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Comment
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set composer
     *
     * @param string $composer
     * @return Comment
     */
    public function setComposer($composer)
    {
        $this->composer = $composer;

        return $this;
    }

    /**
     * Get composer
     *
     * @return string
     */
    public function getComposer()
    {
        return $this->composer;
    }

    /**
     * Set creation_date
     *
     * @param \DateTime $creationDate
     * @return Comment
     */
    public function setCreationDate($creationDate)
    {
        $this->creation_date = new \DateTime($creationDate);

        return $this;
    }

    /**
     * Get creation_date
     *
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->creation_date;
    }

    /**
     * Set pos
     *
     * @param integer $pos
     * @return Comment
     */
    public function setPos($pos)
    {
        $this->pos = $pos;

        return $this;
    }

    /**
     * Get pos
     *
     * @return integer
     */
    public function getPos()
    {
        return $this->pos;
    }

    /**
     * Set neg
     *
     * @param integer $neg
     * @return Comment
     */
    public function setNeg($neg)
    {
        $this->neg = $neg;

        return $this;
    }

    /**
     * Get neg
     *
     * @return integer
     */
    public function getNeg()
    {
        return $this->neg;
    }

    /**
     * Add children
     *
     * @param \HW3\CommentBundle\Entity\Comment $children
     * @return Comment
     */
    public function addChildren(\HW3\CommentBundle\Entity\Comment $children)
    {
        $this->children[] = $children;

        return $this;
    }

    /**
     * Remove children
     *
     * @param \HW3\CommentBundle\Entity\Comment $children
     */
    public function removeChildren(\HW3\CommentBundle\Entity\Comment $children)
    {
        $this->children->removeElement($children);
    }

    /**
     * Get children
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Set news
     *
     * @param \HW3\NewsBundle\Entity\News $news
     * @return Comment
     */
    public function setNews(\HW3\NewsBundle\Entity\News $news = null)
    {
        $this->news = $news;

        return $this;
    }

    /**
     * Get news
     *
     * @return \HW3\NewsBundle\Entity\News
     */
    public function getNews()
    {
        return $this->news;
    }

    /**
     * Set parent
     *
     * @param \HW3\CommentBundle\Entity\Comment $parent
     * @return Comment
     */
    public function setParent(\HW3\CommentBundle\Entity\Comment $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \HW3\CommentBundle\Entity\Comment
     */
    public function getParent()
    {
        return $this->parent;
    }
}