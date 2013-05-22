<?php

namespace HW3\NewsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * News
 */
class News
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $abstract;

    /**
     * @var string
     */
    private $image;

    /**
     * @var \DateTime
     */
    private $datetime;

    /**
     * @var string
     */
    private $content;

    /**
     * @var integer
     */
    private $visit;

    /**
     * @var integer
     */
    private $user;

    /**
     * @var integer
     */
    private $newsgroup;

    /**
     * @var integer
     */
    private $comments;


    public function __construct()
    {
        $this->comments = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set title
     *
     * @param string $title
     * @return News
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set abstract
     *
     * @param string $abstract
     * @return News
     */
    public function setAbstract($abstract)
    {
        $this->abstract = $abstract;

        return $this;
    }

    /**
     * Get abstract
     *
     * @return string
     */
    public function getAbstract()
    {
        return $this->abstract;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return News
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set datetime
     *
     * @param \DateTime $datetime
     * @return News
     */
    public function setDatetime($datetime)
    {
        $this->datetime = $datetime;

        return $this;
    }

    /**
     * Get datetime
     *
     * @return \DateTime
     */
    public function getDatetime()
    {
        return $this->datetime;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return News
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
     * Set visit
     *
     * @param integer $visit
     * @return News
     */
    public function setVisit($visit)
    {
        $this->visit = $visit;

        return $this;
    }

    /**
     * Get visit
     *
     * @return integer
     */
    public function getVisit()
    {
        return $this->visit;
    }

    /**
     * Add comments
     *
     * @param \HW3\CommentBundle\Entity\Comment $comments
     * @return News
     */
    public function addComment(\HW3\CommentBundle\Entity\Comment $comments)
    {
        $this->comments[] = $comments;

        return $this;
    }

    /**
     * Remove comments
     *
     * @param \HW3\CommentBundle\Entity\Comment $comments
     */
    public function removeComment(\HW3\CommentBundle\Entity\Comment $comments)
    {
        $this->comments->removeElement($comments);
    }

    /**
     * Get comments
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set user
     *
     * @param \HW3\UserBundle\Entity\User $user
     * @return News
     */
    public function setUser(\HW3\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \HW3\UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set newsgroup
     *
     * @param \HW3\NewsBundle\Entity\NewsGroup $newsgroup
     * @return News
     */
    public function setNewsgroup(\HW3\NewsBundle\Entity\NewsGroup $newsgroup = null)
    {
        $this->newsgroup = $newsgroup;

        return $this;
    }

    /**
     * Get newsgroup
     *
     * @return \HW3\NewsBundle\Entity\NewsGroup
     */
    public function getNewsgroup()
    {
        return $this->newsgroup;
    }
}