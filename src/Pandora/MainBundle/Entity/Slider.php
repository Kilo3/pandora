<?php

namespace Pandora\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Slider
 */
class Slider
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Application\Sonata\MediaBundle\Entity\Media
     */
    private $media;


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
     * Set media
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $media
     * @return Slider
     */
    public function setMedia(\Application\Sonata\MediaBundle\Entity\Media $media = null)
    {
        $this->media = $media;

        return $this;
    }

    /**
     * Get media
     *
     * @return \Application\Sonata\MediaBundle\Entity\Media 
     */
    public function getMedia()
    {
        return $this->media;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->media = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add media
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $media
     * @return Slider
     */
    public function addMedia(\Application\Sonata\MediaBundle\Entity\Media $media)
    {
        $this->media[] = $media;

        return $this;
    }

    /**
     * Remove media
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $media
     */
    public function removeMedia(\Application\Sonata\MediaBundle\Entity\Media $media)
    {
        $this->media->removeElement($media);
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $images;


    /**
     * Add images
     *
     * @param \Application\Sonata\MediaBundle\Entity\Gallery $images
     * @return Slider
     */
    public function addImage(\Application\Sonata\MediaBundle\Entity\Gallery $images)
    {
        $this->images[] = $images;

        return $this;
    }

    /**
     * Remove images
     *
     * @param \Application\Sonata\MediaBundle\Entity\Gallery $images
     */
    public function removeImage(\Application\Sonata\MediaBundle\Entity\Gallery $images)
    {
        $this->images->removeElement($images);
    }

    /**
     * Get images
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Set images
     *
     * @param \Application\Sonata\MediaBundle\Entity\Gallery $images
     * @return Slider
     */
    public function setImages(\Application\Sonata\MediaBundle\Entity\Gallery $images = null)
    {
        $this->images = $images;

        return $this;
    }
}
