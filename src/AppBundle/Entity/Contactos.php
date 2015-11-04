<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * 
 * @ORM\Table(name="contactos")
 */
class Contactos {
   
    /**
     * @ORM\Id
     * 
     * @ORM\Column(type="integer")
     * 
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;     
    
    /**
     * @ORM\Column(type="datetime", nullable=false) 
     */
    protected $fecha;
    
    /**
     * @ORM\Column(type="string", length=50, nullable=false) 
     */
    protected $asunto;
    
    /**
     * @ORM\Column(type="text", nullable=false) 
     */
    protected $mensaje;
    
    /**
     * @ORM\Column(type="string", length=60, nullable=false) 
     */
    protected $emisor;
    
    /**
     * @ORM\Column(type="string", length=60, nullable=false) 
     */
    protected $destinatario;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Contactos
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set asunto
     *
     * @param string $asunto
     *
     * @return Contactos
     */
    public function setAsunto($asunto)
    {
        $this->asunto = $asunto;

        return $this;
    }

    /**
     * Get asunto
     *
     * @return string
     */
    public function getAsunto()
    {
        return $this->asunto;
    }

    /**
     * Set mensaje
     *
     * @param string $mensaje
     *
     * @return Contactos
     */
    public function setMensaje($mensaje)
    {
        $this->mensaje = $mensaje;

        return $this;
    }

    /**
     * Get mensaje
     *
     * @return string
     */
    public function getMensaje()
    {
        return $this->mensaje;
    }

    /**
     * Set emisor
     *
     * @param string $emisor
     *
     * @return Contactos
     */
    public function setEmisor($emisor)
    {
        $this->emisor = $emisor;

        return $this;
    }

    /**
     * Get emisor
     *
     * @return string
     */
    public function getEmisor()
    {
        return $this->emisor;
    }

    /**
     * Set destinatario
     *
     * @param string $destinatario
     *
     * @return Contactos
     */
    public function setDestinatario($destinatario)
    {
        $this->destinatario = $destinatario;

        return $this;
    }

    /**
     * Get destinatario
     *
     * @return string
     */
    public function getDestinatario()
    {
        return $this->destinatario;
    }
}
