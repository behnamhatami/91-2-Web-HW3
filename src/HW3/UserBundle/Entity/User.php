<?php

namespace HW3\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * User
 */
class User implements UserInterface
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $firstname;

    /**
     * @var string
     */
    private $lastname;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * @var \DateTime
     */
    private $creation_date;

    /**
     * @var string
     */
    private $showname;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $newsgroups;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->newsgroups = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set firstname
     *
     * @param string $firstname
     * @return User
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return User
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set creation_date
     *
     * @param \DateTime $creationDate
     * @return User
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
     * Set showname
     *
     * @param string $showname
     * @return User
     */
    public function setShowname($showname)
    {
        $this->showname = $showname;

        return $this;
    }

    /**
     * Get showname
     *
     * @return string
     */
    public function getShowname()
    {
        return $this->showname;
    }

    /**
     * Add newsgroups
     *
     * @param \HW3\NewsBundle\Entity\NewsGroup $newsgroups
     * @return User
     */
    public function addNewsgroup(\HW3\NewsBundle\Entity\NewsGroup $newsgroups)
    {
        $this->newsgroups[] = $newsgroups;

        return $this;
    }

    /**
     * Remove newsgroups
     *
     * @param \HW3\NewsBundle\Entity\NewsGroup $newsgroups
     */
    public function removeNewsgroup(\HW3\NewsBundle\Entity\NewsGroup $newsgroups)
    {
        $this->newsgroups->removeElement($newsgroups);
    }

    /**
     * Get newsgroups
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getNewsgroups()
    {
        return $this->newsgroups;
    }

    public function  getRoles()
    {
        return array('ROLE_USER');
    }

    public function getSalt()
    {
        return null;
    }

    public function  eraseCredentials()
    {
        return;
    }

    public function __toString()
    {
        return $this->getUsername();
    }
}