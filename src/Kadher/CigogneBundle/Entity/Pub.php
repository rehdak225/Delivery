<?php

namespace Kadher\CigogneBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pub
 *
 * @ORM\Table(name="pub")
 * @ORM\Entity(repositoryClass="Kadher\CigogneBundle\Repository\PubRepository")
 */
class Pub
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
     * @var string
     *
     * @ORM\Column(name="video", type="string", length=255)
     */
    private $video;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255)
     */
    private $image;

    /**
     * @var bool
     *
     * @ORM\Column(name="isVideo", type="boolean")
     */
    private $isVideo;


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
     * Set description
     *
     * @param string $description
     *
     * @return Pub
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
     * Set video
     *
     * @param string $video
     *
     * @return Pub
     */
    public function setVideo($video)
    {
        $this->video = $video;

        return $this;
    }

    /**
     * Get video
     *
     * @return string
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Pub
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set isVideo
     *
     * @param boolean $isVideo
     *
     * @return Pub
     */
    public function setIsVideo($isVideo)
    {
        $this->isVideo = $isVideo;

        return $this;
    }

    /**
     * Get isVideo
     *
     * @return bool
     */
    public function getIsVideo()
    {
        return $this->isVideo;
    }

    /**
     * Set commerce
     *
     * @param \Kadher\CigogneBundle\Entity\Commerce $commerce
     *
     * @return Pub
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
