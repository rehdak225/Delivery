<?php

namespace Kadher\CigogneBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commerce
 *
 * @ORM\Table(name="commerce")
 * @ORM\Entity(repositoryClass="Kadher\CigogneBundle\Repository\CommerceRepository")
 */
class Commerce
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;



    /**
     * @ORM\ManyToOne(targetEntity="Kadher\CigogneBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

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
     * Set nom
     *
     * @param string $nom
     *
     * @return Commerce
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Commerce
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set user
     *
     * @param \Kadher\CigogneBundle\Entity\User $user
     *
     * @return Commerce
     */
    public function setUser(\Kadher\CigogneBundle\Entity\User $user)
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
}
