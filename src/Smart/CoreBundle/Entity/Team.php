<?php

namespace Smart\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Smart\CoreBundle\Entity\Team
 */
class Team
{
    /**
     * @var integer $id
     */
    protected $id;

    /**
     * @var integer $parentId
     */
    protected $parentId;

    /**
     * @var string $name
     */
    protected $name;

    /**
     * @var string $site
     */
    protected $site;

    /**
     * @var integer $siteTypeId
     */
    protected $siteTypeId;

    /**
     * @var integer $sportClassId
     */
    protected $sportClassId;
    
    protected $sportClass;


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
     * Set parentId
     *
     * @param integer $parentId
     * @return Team
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;
    
        return $this;
    }

    /**
     * Get parentId
     *
     * @return integer 
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Team
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set site
     *
     * @param string $site
     * @return Team
     */
    public function setSite($site)
    {
        $this->site = $site;
    
        return $this;
    }

    /**
     * Get site
     *
     * @return string 
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Set siteTypeId
     *
     * @param integer $siteTypeId
     * @return Team
     */
    public function setSiteTypeId($siteTypeId)
    {
        $this->siteTypeId = $siteTypeId;
    
        return $this;
    }

    /**
     * Get siteTypeId
     *
     * @return integer 
     */
    public function getSiteTypeId()
    {
        return $this->siteTypeId;
    }

    /**
     * Set sportClassId
     *
     * @param integer $sportClassId
     * @return Team
     */
    public function setSportClassId($sportClassId)
    {
        $this->sportClassId = $sportClassId;
    
        return $this;
    }

    /**
     * Get sportClassId
     *
     * @return integer 
     */
    public function getSportClassId()
    {
        return $this->sportClassId;
    }
    
    /**
     * Set sportClassId
     *
     * @param integer $sportClass
     * @return Team
     */
    public function setSportClass($sportClass)
    {
        $this->sportClass = $sportClass;
    
        return $this;
    }
    
    /**
     * Get sportClass
     *
     * @return integer
     */
    public function getSportClass()
    {
        return $this->sportClass;
    }
}
