<?php

namespace Pandora\MainBundle\Entity;

/**
 * Page
 */
class Page
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $title;

    /**
     * @var integer
     */
    private $order_column;

    /**
     * @var string
     */
    private $content;

    /**
     * @var string
     */
    private $seo_title;

    /**
     * @var string
     */
    private $seo_description;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $children;

    /**
     * @var \Pandora\MainBundle\Entity\Page
     */
    private $parent;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->children = new \Doctrine\Common\Collections\ArrayCollection();
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

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Page
     */
    public function setUrl($url)
    {
        $this->url = str_replace(' ', '_', $url);

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Page
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
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
     * Set orderColumn
     *
     * @param integer $orderColumn
     *
     * @return Page
     */
    public function setOrderColumn($orderColumn)
    {
        $this->order_column = $orderColumn;

        return $this;
    }

    /**
     * Get orderColumn
     *
     * @return integer
     */
    public function getOrderColumn()
    {
        return $this->order_column;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Page
     */
    public function setContent($content)
    {
        $this->content = $content;

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
     * Set seoTitle
     *
     * @param string $seoTitle
     *
     * @return Page
     */
    public function setSeoTitle($seoTitle)
    {
        $this->seo_title = $seoTitle;

        return $this;
    }

    /**
     * Get seoTitle
     *
     * @return string
     */
    public function getSeoTitle()
    {
        return $this->seo_title;
    }

    /**
     * Set seoDescription
     *
     * @param string $seoDescription
     *
     * @return Page
     */
    public function setSeoDescription($seoDescription)
    {
        $this->seo_description = $seoDescription;

        return $this;
    }

    /**
     * Get seoDescription
     *
     * @return string
     */
    public function getSeoDescription()
    {
        return $this->seo_description;
    }

    /**
     * Add child
     *
     * @param \Pandora\MainBundle\Entity\Page $child
     *
     * @return Page
     */
    public function addChild(\Pandora\MainBundle\Entity\Page $child)
    {
        $this->children[] = $child;

        return $this;
    }

    /**
     * Remove child
     *
     * @param \Pandora\MainBundle\Entity\Page $child
     */
    public function removeChild(\Pandora\MainBundle\Entity\Page $child)
    {
        $this->children->removeElement($child);
    }

    /**
     * Get children
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Set parent
     *
     * @param \Pandora\MainBundle\Entity\Page $parent
     *
     * @return Page
     */
    public function setParent(\Pandora\MainBundle\Entity\Page $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \Pandora\MainBundle\Entity\Page
     */
    public function getParent()
    {
        return $this->parent;
    }
}
