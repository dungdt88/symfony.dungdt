<?php

namespace Smart\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Smart\CoreBundle\Entity\SportClass
 */
class SportClass
{
    /**
     * @var integer $id
     */
    protected $id;

    /**
     * @var string $name
     */
    protected $name;

    /**
     * @var integer $sportId
     */
    protected $sportId;

    /**
     * @var integer $classId
     */
    protected $classId;


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
     * Set name
     *
     * @param string $name
     * @return SportClass
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
     * Set sportId
     *
     * @param integer $sportId
     * @return SportClass
     */
    public function setSportId($sportId)
    {
        $this->sportId = $sportId;
    
        return $this;
    }

    /**
     * Get sportId
     *
     * @return integer 
     */
    public function getSportId()
    {
        return $this->sportId;
    }

    /**
     * Set classId
     *
     * @param integer $classId
     * @return SportClass
     */
    public function setClassId($classId)
    {
        $this->classId = $classId;
    
        return $this;
    }

    /**
     * Get classId
     *
     * @return integer 
     */
    public function getClassId()
    {
        return $this->classId;
    }
}
