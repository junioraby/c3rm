<?php

namespace Crm\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notification
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Notification
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datenotif", type="datetime")
     */
    private $datenotif;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text")
     */
    private $message;

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean")
     */
    private $active;

    /**
     * @var boolean
     *
     * @ORM\Column(name="trash", type="boolean")
     */
    private $trash;

/**
    * @ORM\ManyToOne(targetEntity="Crm\UserBundle\Entity\User",cascade={"remove", "persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $user;

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
     * Set datenotif
     *
     * @param \DateTime $datenotif
     * @return Notification
     */
    public function setDatenotif($datenotif)
    {
        $this->datenotif = $datenotif;

        return $this;
    }

    /**
     * Get datenotif
     *
     * @return \DateTime 
     */
    public function getDatenotif()
    {
        return $this->datenotif;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return Notification
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return Notification
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set trash
     *
     * @param boolean $trash
     * @return Notification
     */
    public function setTrash($trash)
    {
        $this->trash = $trash;

        return $this;
    }

    /**
     * Get trash
     *
     * @return boolean 
     */
    public function getTrash()
    {
        return $this->trash;
    }

    /**
     * Set user
     *
     * @param \Crm\UserBundle\Entity\User $user
     * @return Notification
     */
    public function setUser(\Crm\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Crm\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
