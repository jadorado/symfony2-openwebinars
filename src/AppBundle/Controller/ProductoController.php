<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
Use AppBundle\Entity\Productos;
Use AppBundle\Entity\Usuarios;
use Symfony\Component\HttpFoundation\Response;

class ProductoController extends Controller 
{
    public function crearAction(Request $request) {
        $array = [];
        
        if($this->getRequest()->isMethod('POST')){
            $producto = new Productos();
            $em = $this->getDoctrine()->getManager();

            $fecha = new \DateTime();
            $fin = new \DateTime($request->request->get('fin'));
            
            if($fin > $fecha) {
                $usuario = $this->get('security.context')->getToken()->getUser();
            
                $producto->setNombre($request->request->get('nombre'));
                $producto->setDescripcion($request->request->get('descripcion'));
                $producto->setPrecio($request->request->get('precio'));

                $producto->setFin($fin);
                $producto->setFecha($fecha);
                $producto->setVendedor($usuario);

                $em->persist($producto);
                $em->flush();

                $array['exito'] = true;
            } else {
                $array['error'] = "La fecha de fin debe ser posterior a hoy";
            }

        }
        
        return $this->render('AppBundle:Productos:crearProducto.html.twig', $array);
    }
    
    public function misProductosAction() {
        
    }
    
    public function listarAction() {
        
    }
   
   
}
