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

class GanadorCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('webinar:aviso:ganador')
            ->setDescription('Comando para avisar al ganador de una puja');
    }
    
    protected function execute(InputInterface $input, OutputInterface $output) {
        $em = $this->getContainer()->get('doctrine.orm.entity_manager');
        
        $fecha = new \DateTime();
        
        $repository = $em->getRepository('AppBundle:Productos');

        $query = $repository->createQueryBuilder('p')
            ->where('p.fin = :fecha')
            ->setParameter('fecha', $fecha)
            ->getQuery();

        $productos = $query->getResult();
        
        foreach($productos as $producto) {
           
        }
       
    }
           
}