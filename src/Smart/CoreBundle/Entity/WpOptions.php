<?php

namespace Smart\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Smart\CoreBundle\Entity\WpOptions
 */
class WpOptions
{
    /**
     * @var integer $id
     */
    protected $id;

    /**
     * @var integer $blogId
     */
    protected $blogId;

    /**
     * @var string $optionName
     */
    protected $optionName;

    /**
     * @var string $optionValue
     */
    protected $optionValue;

    /**
     * @var string $autoload
     */
    protected $autoload;


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
     * Set blogId
     *
     * @param integer $blogId
     * @return WpOptions
     */
    public function setBlogId($blogId)
    {
        $this->blogId = $blogId;
    
        return $this;
    }

    /**
     * Get blogId
     *
     * @return integer 
     */
    public function getBlogId()
    {
        return $this->blogId;
    }

    /**
     * Set optionName
     *
     * @param string $optionName
     * @return WpOptions
     */
    public function setOptionName($optionName)
    {
        $this->optionName = $optionName;
    
        return $this;
    }

    /**
     * Get optionName
     *
     * @return string 
     */
    public function getOptionName()
    {
        return $this->optionName;
    }

    /**
     * Set optionValue
     *
     * @param string $optionValue
     * @return WpOptions
     */
    public function setOptionValue($optionValue)
    {
        $this->optionValue = $optionValue;
    
        return $this;
    }

    /**
     * Get optionValue
     *
     * @return string 
     */
    public function getOptionValue()
    {
        return $this->optionValue;
    }

    /**
     * Set autoload
     *
     * @param string $autoload
     * @return WpOptions
     */
    public function setAutoload($autoload)
    {
        $this->autoload = $autoload;
    
        return $this;
    }

    /**
     * Get autoload
     *
     * @return string 
     */
    public function getAutoload()
    {
        return $this->autoload;
    }
}
