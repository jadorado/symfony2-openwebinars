<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
Use AppBundle\Entity\Producto;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        
        /*$em = $this->getDoctrine()->getManager();
        
        $producto = new Producto();
        $producto->setName("prueba");*/
        
        //$em->persist($producto);
        //$em->flush();
        
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


// replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }
}
