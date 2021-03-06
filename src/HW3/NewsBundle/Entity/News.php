<?php

namespace HW3\NewsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Debug\Exception\FatalErrorException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Eko\FeedBundle\Item\Writer\ItemInterface;

/**
 * News
 */
class News implements ItemInterface
{
    /**
     * @var boolean
     */

    private $image_valid = true;
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
    private $creation_date;
    /**
     * @var string
     */
    private $content;
    /**
     * @var integer
     */
    private $visit;
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $comments;
    /**
     * @var \HW3\UserBundle\Entity\User
     */
    private $user;
    /**
     * @var \HW3\NewsBundle\Entity\NewsGroup
     */
    private $newsgroup;
    /**
     * @var boolean
     */
    private $confirmed;
    /**
     * @var boolean
     */
    private $selected;
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tags;

    /**
     * Constructor
     */
    public function __construct($user)
    {
        $this->comments = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tags = new \Doctrine\Common\Collections\ArrayCollection();
        $this->setCreationDate('now');
        $this->setUser($user);
        $this->setVisit(0);
        $this->setConfirmed(false);
    }

    public function validateImage()
    {
        $this->image_valid = true;
    }

    public function inValidateImage()
    {
        $this->image_valid = false;
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
     * Get image
     *
     * @return String
     */
    public function getImage()
    {
        if ($this->image_valid)
            return $this->image;
        else return null;
    }

    /**
     * Set image
     *
     * @param String $image
     * @return News
     */
    public function setImage($image)
    {
        if ($image != null)
            $this->image = $image;

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
     * Set creation_date
     *
     * @param \DateTime $creationDate
     * @return News
     */
    public function setCreationDate($creationDate)
    {
        $this->creation_date = new \DateTime($creationDate);

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
     * visit
     *
     * @return News
     */
    public function visit()
    {
        $this->visit = $this->visit + 1;
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
     * Get user
     *
     * @return \HW3\UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
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
     * Get newsgroup
     *
     * @return \HW3\NewsBundle\Entity\NewsGroup
     */
    public function getNewsgroup()
    {
        return $this->newsgroup;
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

    public function uploadImage()
    {
        // the file property can be empty if the field is not required
        if (null === $this->image) {
            return;
        }
        if (!$this->id) {
            $this->image->move($this->getTmpUploadRootDir(), $this->image->getClientOriginalName());
        } else {
            if (!is_string($this->image))
                $this->image->move($this->getUploadRootDir(), $this->image->getClientOriginalName());
        }
        if (!is_string($this->image))
            $this->setImage($this->image->getClientOriginalName());
    }

    protected function getTmpUploadRootDir()
    {
        // the absolute directory path where uploaded documents should be saved
        return __DIR__ . '/../../../../web/upload/';
    }

    protected function getUploadRootDir()
    {
        // the absolute directory path where uploaded documents should be saved
        return $this->getTmpUploadRootDir() . $this->getId() . "/";
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

    public function moveImage()
    {
        if (null === $this->image) {
            return;
        }
        if (!is_dir($this->getUploadRootDir())) {
            mkdir($this->getUploadRootDir());
        }
        copy($this->getTmpUploadRootDir() . $this->image, $this->getFullImagePath());
        unlink($this->getTmpUploadRootDir() . $this->image);
    }

    public function getFullImagePath()
    {
        return null === $this->image ? null : $this->getUploadRootDir() . $this->image;
    }

    public function removeImage()
    {
        if (is_file($this->getFullImagePath()))
            unlink($this->getFullImagePath());
        if (is_dir($this->getUploadRootDir()))
            rmdir($this->getUploadRootDir());
    }

    /**
     * Add tags
     *
     * @param \HW3\NewsBundle\Entity\Tag $tags
     * @return News
     */
    public function addTag(\HW3\NewsBundle\Entity\Tag $tags)
    {
        $this->tags[] = $tags;

        return $this;
    }

    /**
     * Remove tags
     *
     * @param \HW3\NewsBundle\Entity\Tag $tags
     */
    public function removeTag(\HW3\NewsBundle\Entity\Tag $tags)
    {
        $this->tags->removeElement($tags);
    }

    /**
     * Get tags
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Get confirmed
     *
     * @return boolean
     */
    public function getConfirmed()
    {
        return $this->confirmed;
    }

    /**
     * Set confirmed
     *
     * @param boolean $confirmed
     * @return News
     */
    public function setConfirmed($confirmed)
    {
        $this->confirmed = $confirmed;

        return $this;
    }

    /**
     * Get selected
     *
     * @return boolean
     */
    public function getSelected()
    {
        return $this->selected;
    }

    /**
     * Set selected
     *
     * @param boolean $selected
     * @return News
     */
    public function setSelected($selected)
    {
        $this->selected = $selected;

        return $this;
    }

    public function getFeedItemTitle()
    {
        return $this->title;
    }

    public function getFeedItemDescription()
    {
        return $this->content;
    }

    public function getFeedItemPubDate()
    {
        return $this->creation_date;
    }

    public function getFeedItemLink()
    {
        return "/FinalProject/Symfony/web/app_dev.php/fa/news/" . $this->id;
    }

    public function sortComments()
    {
        $result = array();
        for ($i = 0; $i < count($this->comments); $i++) {
            if ($this->comments[$i]->getLevel() == 0) {
                $temp = $this->comments[$i]->sortChildren();
                for ($j = 0; $j < count($temp); $j++) {
                    $result [] = $temp[$j];
                }
            }
        }
        return $result;
    }

    public function __toString()
    {
        return $this->getTitle();
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
}