<?php

namespace HW3\NewsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subscription
 */
class Subscription
{
    /**
     * @var integer
     */
    private $id;


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
     * @var string
     */
    private $email;

    /**
     * @var \HW3\NewsBundle\Entity\NewsGroup
     */
    private $newsgroup;


    /**
     * Set email
     *
     * @param string $email
     * @return Subscription
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set newsgroup
     *
     * @param \HW3\NewsBundle\Entity\NewsGroup $newsgroup
     * @return Subscription
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

    public function __toString(){
        return $this->email;
    }
}