<?php

namespace HW3\NewsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * tag
 */
class Tag
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $news;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->news = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return tag
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Add news
     *
     * @param \HW3\NewsBundle\Entity\News $news
     * @return Tag
     */
    public function addNew(\HW3\NewsBundle\Entity\News $news)
    {
        $this->news[] = $news;

        return $this;
    }

    /**
     * Remove news
     *
     * @param \HW3\NewsBundle\Entity\News $news
     */
    public function removeNew(\HW3\NewsBundle\Entity\News $news)
    {
        $this->news->removeElement($news);
    }

    /**
     * Get news
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getNews()
    {
        return $this->news;
    }
}