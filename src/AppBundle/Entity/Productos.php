<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * 
 * @ORM\Table(name="productos")
 */
class Productos {
   
    protected $id;
    
    protected $nombre;
    
    protected $precio;
}
