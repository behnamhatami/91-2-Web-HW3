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
    private $name;

    /**
     * @var integer
     */
    private $parent;

    /**
     * @var integer
     */
    private $children;

    /**
     * @var integer
     */
    private $news;

    public function __construct() {
        $this->children = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set name
     *
     * @param string $name
     * @return Comment
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
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