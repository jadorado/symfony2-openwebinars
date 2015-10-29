<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Producto
 *
 * @ORM\Table(name="productos")
 * @ORM\Entity
 */
class Producto {
    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(type="integer")     
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;        

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=80, nullable=false)
     */
    protected $name;
    
    
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
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Producto
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }
    
}
