<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
Use AppBundle\Entity\Productos;
Use AppBundle\Entity\Usuarios;
Use AppBundle\Entity\Pujas;
use Symfony\Component\HttpFoundation\Response;

class PujasController {
    public function pujasAction(Request $request){
        //$pujasManager = $this->get('tienda.pujas.manager');
        $productosManager = $this->get('tienda.productos.manager');
        
        $producto = $productosManager->getOneById($request->request->get('id'));
        $usuario = $this->get('security.context')->getToken()->getUser();
        
        $puja = new Pujas();
        
        $puja->setProducto($producto);
        $puja->setPujador($usuario);
        $puja->setFecha(new \DateTime());
        $puja->setPrecio($request->request->get('precio'));
        
        $pujasManager->create($puja);
        
        return $this->render('AppBundle:Pujas:pujaRealizada.html.twig', $array);
    }
}
