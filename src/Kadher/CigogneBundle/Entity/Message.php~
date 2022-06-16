<?php

namespace Kadher\CigogneBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table(name="message")
 * @ORM\Entity(repositoryClass="Kadher\CigogneBundle\Repository\MessageRepository")
 */
class Message
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="string", length=255)
     */
    private $contenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="sender", type="string", length=255)
     */
    private $sender;



    /**
     * @ORM\ManyToOne(targetEntity="Kadher\CigogneBundle\Entity\Agence")
     * @ORM\JoinColumn(nullable=true)
     */
    private $agence;


    /**
     * @ORM\ManyToOne(targetEntity="Kadher\CigogneBundle\Entity\User")
     * @ORM\JoinColumn(nullable=true)
     */
    private $user;



    /**
     * @ORM\ManyToOne(targetEntity="Kadher\CigogneBundle\Entity\Commerce")
     * @ORM\JoinColumn(nullable=true)
     */
    private $commerce;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Message
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Message
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set sender
     *
     * @param string $sender
     *
     * @return Message
     */
    public function setSender($sender)
    {
        $this->sender = $sender;

        return $this;
    }

    /**
     * Get sender
     *
     * @return string
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * Set agence
     *
     * @param \Kadher\CigogneBundle\Entity\Agence $agence
     *
     * @return Message
     */
    public function setAgence(\Kadher\CigogneBundle\Entity\Agence $agence = null)
    {
        $this->agence = $agence;

        return $this;
    }

    /**
     * Get agence
     *
     * @return \Kadher\CigogneBundle\Entity\Agence
     */
    public function getAgence()
    {
        return $this->agence;
    }

    /**
     * Set user
     *
     * @param \Kadher\CigogneBundle\Entity\User $user
     *
     * @return Message
     */
    public function setUser(\Kadher\CigogneBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Kadher\CigogneBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set commerce
     *
     * @param \Kadher\CigogneBundle\Entity\Commerce $commerce
     *
     * @return Message
     */
    public function setCommerce(\Kadher\CigogneBundle\Entity\Commerce $commerce = null)
    {
        $this->commerce = $commerce;

        return $this;
    }

    /**
     * Get commerce
     *
     * @return \Kadher\CigogneBundle\Entity\Commerce
     */
    public function getCommerce()
    {
        return $this->commerce;
    }
}
