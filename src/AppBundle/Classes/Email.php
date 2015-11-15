<?php
namespace AppBundle\Classes;

use Symfony\Component\DependencyInjection\ContainerInterface;

/*
 * Servicio para enviar emails con swiftmailer desde cualquier parte de la aplicación
 */
Class Email{
    private $container;
  
    public function __construct(ContainerInterface $container) {
        $this->container = $container;
    }
    
    
    public function enviarEmail($subject, $from, $to, $template, $params){
        $message = \Swift_Message::newInstance()
                    ->setSubject($subject)
                    ->setFrom($from)
                    ->setTo($to)                   
                    ->setBody(
                        $this->container->get('templating')->render($template, $params),'text/html');            
            $this->container->get('mailer')->send($message);
    }
}