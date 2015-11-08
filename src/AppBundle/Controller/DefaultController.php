<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
Use AppBundle\Entity\Productos;
Use AppBundle\Entity\Usuarios;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $array = [];
        $array['nombre'] = "Jose";
        
        return $this->render('AppBundle:Seguridad:prueba.html.twig', $array);
        
        
        /*$array = [];
        $array['producto'] = $producto;
        $array['precio'] = "200";
        $array['errores'] = $errores;
        
        //...
        
        $array['nuevaInfo'] = "...";
        
        return $this->render('productos/ver.html.twig', $array);
        
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));*/
        
        /*$producto = new Productos();
        
        $producto->setNombre("coche");
        $producto->setDescripcion("Es un coche de segunda mano, rojo, semi nuevo");
        $producto->setPrecio(5000000);
        
        $fecha = new \DateTime();
        $producto->setFecha($fecha);        
        $producto->setPeso(1000000);
        
     
        $em = $this->getDoctrine()->getManager();
        
        $em->persist($producto);
        $em->flush();
        
        
        /*$em = $this->getDoctrine()->getManager();
        
        $producto = new Producto();
        $producto->setName("prueba");*/
        
        //$em->persist($producto);
        //$em->flush();
        /*
        $repository = $this->getDoctrine()->getRepository('AppBundle:Productos');
        
        $productos = $repository->findAll();
        
        foreach($productos as $p){
            $result[] = $p->getPrice();
        }*/
        
        /*
        $query = $repository->createQueryBuilder('p')
                ->where('p.nombre = :nombre')
                ->setParameter('nombre', 'cochsfdfe')
                ->orderBy('p.precio', 'ASC')
                ->getQuery();
        
        $productos = $query->getResult();*/
        
      
        
        
        
       /* $repository = $this->getDoctrine()
    ->getRepository('AppBundle:Producto');
        
        $query = $repository->createQueryBuilder('p')
    ->where('p.name = :nombre')
    ->setParameter('nombre', 'prueba2')
    ->getQuery();*/
 
//$products = $query->getResult();

/*if (!$products) {
        throw $this->createNotFoundException(
            'No product found for id '
        );
    }*/

 //return new Response('Created product id '.$products[0]->getId());
        /*
        $array = [];
        $array['nombre'] = "Jose";
        return $this->render('AppBundle:Seguridad:prueba.html.twig', $array);
        */
// replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }
}
