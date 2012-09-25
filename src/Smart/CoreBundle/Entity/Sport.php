<?php

namespace Smart\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Smart\CoreBundle\Entity\Sport
 */
class Sport
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
     * @var string $gameName
     */
    protected $gameName;


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
     * @return Sport
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
     * Set gameName
     *
     * @param string $gameName
     * @return Sport
     */
    public function setGameName($gameName)
    {
        $this->gameName = $gameName;
    
        return $this;
    }

    /**
     * Get gameName
     *
     * @return string 
     */
    public function getGameName()
    {
        return $this->gameName;
    }
}
