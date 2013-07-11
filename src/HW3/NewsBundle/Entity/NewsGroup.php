<?php

namespace HW3\NewsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NewsGroup
 */
class NewsGroup
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
     * @var \DateTime
     */
    private $creation_date;

    /**
     * @var integer
     */
    private $level;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $users;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $subcriptions;

    /**
     * @var \HW3\NewsBundle\Entity\News
     */
    private $top_news;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
        $this->subcriptions = new \Doctrine\Common\Collections\ArrayCollection();
        $this->setCreationDate('now');
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
     * @return NewsGroup
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
     * Set creation_date
     *
     * @param \DateTime $creationDate
     * @return NewsGroup
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
     * Set level
     *
     * @param integer $level
     * @return NewsGroup
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return integer
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Add users
     *
     * @param \HW3\UserBundle\Entity\User $users
     * @return NewsGroup
     */
    public function addUser(\HW3\UserBundle\Entity\User $users)
    {
        $this->users[] = $users;

        return $this;
    }

    /**
     * Remove users
     *
     * @param \HW3\UserBundle\Entity\User $users
     */
    public function removeUser(\HW3\UserBundle\Entity\User $users)
    {
        $this->users->removeElement($users);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsers()
    {
        return $this->users;
    }

    public function getTopNews()
    {
        return $this->top_news;
    }

    public function setTopNews($news)
    {
        $this->top_news = $news;
    }

    public function __toString()
    {
        return $this->getName();
    }

    /**
     * Add subcriptions
     *
     * @param \HW3\NewsBunle\Entity\Subscription $subcriptions
     * @return NewsGroup
     */
    public function addSubcription(\HW3\NewsBundle\Entity\Subscription $subcriptions)
    {
        $this->subcriptions[] = $subcriptions;

        return $this;
    }

    /**
     * Remove subcriptions
     *
     * @param \HW3\NewsBunle\Entity\Subscription $subcriptions
     */
    public function removeSubcription(\HW3\NewsBundle\Entity\Subscription $subcriptions)
    {
        $this->subcriptions->removeElement($subcriptions);
    }

    /**
     * Get subscriptions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSubcriptions()
    {
        return $this->subcriptions;
    }
}