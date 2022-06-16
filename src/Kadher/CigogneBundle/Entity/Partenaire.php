<?php

namespace Kadher\CigogneBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Partenaire
 *
 * @ORM\Table(name="partenaire")
 * @ORM\Entity(repositoryClass="Kadher\CigogneBundle\Repository\PartenaireRepository")
 */
class Partenaire
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
     * @var int
     *
     * @ORM\Column(name="note", type="integer")
     */
    private $note;


    /**
     * @ORM\ManyToOne(targetEntity="Kadher\CigogneBundle\Entity\Agence")
     * @ORM\JoinColumn(nullable=false)
     */
    private $agence;



    /**
     * @ORM\ManyToOne(targetEntity="Kadher\CigogneBundle\Entity\Commerce")
     * @ORM\JoinColumn(nullable=false)
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
     * Set note
     *
     * @param integer $note
     *
     * @return Partenaire
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return int
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set agence
     *
     * @param \Kadher\CigogneBundle\Entity\Agence $agence
     *
     * @return Partenaire
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
     * Set commerce
     *
     * @param \Kadher\CigogneBundle\Entity\Commerce $commerce
     *
     * @return Partenaire
     */
    public function setCommerce(\Kadher\CigogneBundle\Entity\Commerce $commerce)
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
