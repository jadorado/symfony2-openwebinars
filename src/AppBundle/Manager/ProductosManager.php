<?php
namespace AppBundle\Manager;

use AppBundle\Repository\ProductosRepository;
use AppBundle\Entity\Productos;

/**
 * Class ProductosManager
 * @package AppBundle\Manager
 */
class ProductosManager extends BaseManager
{
    public function findByNombre($nombre){
            return $this->repo->findByNombre($nombre);
    }
    
}