<?php

namespace AppBundle\Repository;


/**
 * Class ProductosRepository
 * @package AppBundle\Repository
 */
class ProductosRepository extends BaseRepository
{
    /** 
     * @param type $name
     * @return array
     */
    public function findByNombre($nombre){
        $qb = $this->createQueryBuilder("p");
        $qb->andWhere('p.nombre LIKE :nombre')        
            ->setParameter('nombre', $nombre );
        
        $result = $qb->getQuery()->getResult();
        return $result;
    }
}
