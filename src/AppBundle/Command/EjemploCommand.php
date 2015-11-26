<?php
namespace AppBundle\Command;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Yaml\Exception\ParseException;
use Symfony\Component\Yaml\Parser;
use AppBundle\Entity\Productos;

class EjemploCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('webinar:crear:productos')
            ->setDescription('Comando para crear productos');
    }
    
    protected function execute(InputInterface $input, OutputInterface $output) {
        $numero = $this->getContainer()->getParameter('numeroProductos');
     
        $em = $this->getContainer()->get('doctrine.orm.entity_manager');
        
        for($i = 0; $i < $numero; $i++){
            $producto = new Productos();
            $fecha = new \DateTime();
            
            $producto->setNombre('producto'.$i);
            $producto->setDescripcion('description'.$i);
            $producto->setPrecio('100');
            $producto->setFecha($fecha);
            
            $em->persist($producto);
        }
        
        $em->flush();
    }
    
}