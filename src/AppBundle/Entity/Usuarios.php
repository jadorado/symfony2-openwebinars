<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use AppBundle\Entity\Productos;
use Symfony\Component\Security\Core\User\UserInterface;


/**
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="AppBundle\Entity\UsuariosRepository")
 * 
 * @ORM\Table(name="usuarios")
 */
class Usuarios implements UserInterface, \Serializable{
    /**
     * @ORM\Id
     * 
     * @ORM\Column(type="integer")
     * 
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string", length=20, nullable=false, unique=true) 
     */
    protected $username;
    
    /**
     * @ORM\Column(type="string", length=60, nullable=false) 
     */
    protected $email;
    
    /**
     * @ORM\Column(type="string", length=64)
     */
    protected $password;
    
    private $plainPassword;
    
    /**
     * @ORM\Column(type="string", length=40, nullable=false) 
     */
    protected $nombre;
    
    /**
     * @ORM\Column(type="string", length=40, nullable=true) 
     */
    protected $apellido;
    
    /**
     * @ORM\Column(type="string", length=40, nullable=true) 
     */
    protected $ciudad;
    
    /**
     * @ORM\OneToMany(targetEntity="Productos", mappedBy="vendedor")
     */
    protected $productos;
    
    /**
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive;
    
    /**
     * @ORM\ManyToMany(targetEntity="Productos", mappedBy="pujadores")
     **/
    protected $pujados;
    
    
    public function __construct() {
        $this->productos = new ArrayCollection();
        $this->isActive = true;
    }

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
     * Set username
     *
     * @param string $username
     *
     * @return Usuarios
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Usuarios
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Usuarios
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Usuarios
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellido
     *
     * @param string $apellido
     *
     * @return Usuarios
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set ciudad
     *
     * @param string $ciudad
     *
     * @return Usuarios
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get ciudad
     *
     * @return string
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Add producto
     *
     * @param Productos $producto
     *
     * @return Usuarios
     */
    public function addProducto(Productos $producto)
    {
        $this->productos[] = $producto;

        return $this;
    }

    /**
     * Remove producto
     *
     * @param Productos $producto
     */
    public function removeProducto(Productos $producto)
    {
        $this->productos->removeElement($producto);
    }

    /**
     * Get productos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProductos()
    {
        return $this->productos;
    }
    
    public function getSalt()
    {
        return null;
    }
    
    public function getPlainPassword()
    {
        return $this->plainPassword;
    }
    
    
    public function getRoles()
    {
        return array('ROLE_USER');
    }

    public function eraseCredentials()
    {
    }

    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password,
        ));
    }

    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->username,
            $this->password,
        ) = unserialize($serialized);
    }
    
    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return Usuarios
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean
     */
    public function getIsActive()
    {
        return $this->isActive;
    }


    /**
     * Add pujado
     *
     * @param \AppBundle\Entity\Productos $pujado
     *
     * @return Usuarios
     */
    public function addPujado(\AppBundle\Entity\Productos $pujado)
    {
        $this->pujados[] = $pujado;

        return $this;
    }

    /**
     * Remove pujado
     *
     * @param \AppBundle\Entity\Productos $pujado
     */
    public function removePujado(\AppBundle\Entity\Productos $pujado)
    {
        $this->pujados->removeElement($pujado);
    }

    /**
     * Get pujados
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPujados()
    {
        return $this->pujados;
    }
}
