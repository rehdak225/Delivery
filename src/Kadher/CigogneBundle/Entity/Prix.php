<?php

namespace Kadher\CigogneBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prix
 *
 * @ORM\Table(name="prix")
 * @ORM\Entity(repositoryClass="Kadher\CigogneBundle\Repository\PrixRepository")
 */
class Prix
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
     * @ORM\Column(name="Commune", type="string", length=255)
     */
    private $commune;

    /**
     * @var int
     *
     * @ORM\Column(name="Prix", type="integer")
     */
    private $prix;


    /**
     * @ORM\ManyToOne(targetEntity="Kadher\CigogneBundle\Entity\Agence")
     * @ORM\JoinColumn(nullable=false)
     */
    private $agence;



    /**
     * @ORM\ManyToOne(targetEntity="Kadher\CigogneBundle\Entity\Partenaire")
     * @ORM\JoinColumn(nullable=false)
     */
    private $partenaire;


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
     * Set commune
     *
     * @param string $commune
     *
     * @return Prix
     */
    public function setCommune($commune)
    {
        $this->commune = $commune;

        return $this;
    }

    /**
     * Get commune
     *
     * @return string
     */
    public function getCommune()
    {
        return $this->commune;
    }

    /**
     * Set prix
     *
     * @param integer $prix
     *
     * @return Prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return int
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set agence
     *
     * @param \Kadher\CigogneBundle\Entity\Agence $agence
     *
     * @return Prix
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

    /**
     * Set partenaire
     *
     * @param \Kadher\CigogneBundle\Entity\Partenaire $partenaire
     *
     * @return Prix
     */
    public function setPartenaire(\Kadher\CigogneBundle\Entity\Partenaire $partenaire)
    {
        $this->partenaire = $partenaire;

        return $this;
    }

    /**
     * Get partenaire
     *
     * @return \Kadher\CigogneBundle\Entity\Partenaire
     */
    public function getPartenaire()
    {
        return $this->partenaire;
    }
}
