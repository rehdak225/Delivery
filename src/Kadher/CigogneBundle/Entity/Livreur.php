<?php

namespace Kadher\CigogneBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Livreur
 *
 * @ORM\Table(name="livreur")
 * @ORM\Entity(repositoryClass="Kadher\CigogneBundle\Repository\LivreurRepository")
 */
class Livreur
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
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var bool
     *
     * @ORM\Column(name="accepted", type="boolean")
     */
    private $accepted;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255)
     */
    private $photo;

    /**
     * @var bool
     *
     * @ORM\Column(name="debLivreur", type="boolean")
     */
    private $debLivreur;

    /**
     * @var bool
     *
     * @ORM\Column(name="debLivraison", type="boolean")
     */
    private $debLivraison;

    /**
     * @var string
     *
     * @ORM\Column(name="latitude", type="string", length=255)
     */
    private $latitude;

    /**
     * @var string
     *
     * @ORM\Column(name="longitude", type="string", length=255)
     */
    private $longitude;


    /**
     * @ORM\ManyToOne(targetEntity="Kadher\CigogneBundle\Entity\Agence")
     * @ORM\JoinColumn(nullable=false)
     */
    private $agence;

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
     * Set description
     *
     * @param string $description
     *
     * @return Livreur
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
     * Set accepted
     *
     * @param boolean $accepted
     *
     * @return Livreur
     */
    public function setAccepted($accepted)
    {
        $this->accepted = $accepted;

        return $this;
    }

    /**
     * Get accepted
     *
     * @return bool
     */
    public function getAccepted()
    {
        return $this->accepted;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Livreur
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set debLivreur
     *
     * @param boolean $debLivreur
     *
     * @return Livreur
     */
    public function setDebLivreur($debLivreur)
    {
        $this->debLivreur = $debLivreur;

        return $this;
    }

    /**
     * Get debLivreur
     *
     * @return bool
     */
    public function getDebLivreur()
    {
        return $this->debLivreur;
    }

    /**
     * Set debLivraison
     *
     * @param boolean $debLivraison
     *
     * @return Livreur
     */
    public function setDebLivraison($debLivraison)
    {
        $this->debLivraison = $debLivraison;

        return $this;
    }

    /**
     * Get debLivraison
     *
     * @return bool
     */
    public function getDebLivraison()
    {
        return $this->debLivraison;
    }

    /**
     * Set latitude
     *
     * @param string $latitude
     *
     * @return Livreur
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param string $longitude
     *
     * @return Livreur
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set agence
     *
     * @param \Kadher\CigogneBundle\Entity\Agence $agence
     *
     * @return Livreur
     */
    public function setAgence(\Kadher\CigogneBundle\Entity\Agence $agence)
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
}
