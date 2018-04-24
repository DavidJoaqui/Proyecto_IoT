<?php

namespace GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Vehiculos
 *
 * @ORM\Table(name="vehiculos")
 * @ORM\Entity(repositoryClass="GestionBundle\Repository\VehiculosRepository")
 *@ORM\HasLifecycleCallbacks()
 */
class Vehiculos
{

    /**
     * @ORM\ManyToOne(targetEntity="Propietario",inversedBy="vehiculo")
     * @ORM\JoinColumn(name="id_propietario",referencedColumnName="id", onDelete="CASCADE", nullable=false)
     */

    protected $propietario;

    /**
     * @ORM\OneToMany(targetEntity="Ubicacion",mappedBy="vehiculo")
     * @Assert\NotNull()
     */
    protected $ubicaciones;



    public function __construct(){
        $this -> ubicaciones = new ArrayCollection();
        $this ->propietario =new ArrayCollection();

    }

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=45, columnDefinition="ENUM('Automovil','Motocicleta')", nullable=false)
     * @Assert\NotBlank()
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="marca", type="string", length=45)
     */
    private $marca;

    /**
     * @var string
     *
     * @ORM\Column(name="modelo", type="string", length=255)
     */
    private $modelo;

    /**
     * @var string
     *
     * @ORM\Column(name="placa", type="string", length=20, unique=true)
     */
    private $placa;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=45)
     */
    private $color;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     *
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime")
     */
    private $updatedAt;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }



    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Vehiculos
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set marca
     *
     * @param string $marca
     *
     * @return Vehiculos
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get marca
     *
     * @return string
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set modelo
     *
     * @param string $modelo
     *
     * @return Vehiculos
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get modelo
     *
     * @return string
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set placa
     *
     * @param string $placa
     *
     * @return Vehiculos
     */
    public function setPlaca($placa)
    {
        $this->placa = $placa;

        return $this;
    }

    /**
     * Get placa
     *
     * @return string
     */
    public function getPlaca()
    {
        return $this->placa;
    }

    /**
     * Set color
     *
     * @param string $color
     *
     * @return Vehiculos
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return User
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }



    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return User
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     *
     */

    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @ORM\PrePersist
     */
    public function setCreatedAtValue(){
        $this->createdAt= new \DateTime();
    }

    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function setUpdateAtValue(){
        $this->updatedAt=new \DateTime();
    }


    /**
     * Add propietario
     *
     * @param \GestionBundle\Entity\Propietario $propietario
     * @return Vehiculos
     */
    public function setPropietario(\GestionBundle\Entity\Propietario $propietario=null)
    {
        $this->propietario= $propietario;

        return $this;
    }

    /**
     * Remove propietario
     *
     * @param \GestionBundle\Entity\Propietario $propietario
     */
    public function removePropietario(\GestionBundle\Entity\Propietario $propietario)
    {
        $this->propietario->removeElement($propietario);
    }

    /**
     * Get propietario
     *
     * @return \GestionBundle\Entity\Propietario
     */
    public function getPropietario()
    {
        return $this->propietario;
    }

    /**
     * Add ubicaciones
     *
     * @param \GestionBundle\Entity\Ubicacion $ubicaciones
     * @return Vehiculos
     */
    public function setUbicacion(\GestionBundle\Entity\Ubicacion $ubicaciones)
    {
        $this->ubicaciones[] = $ubicaciones;

        return $this;
    }

    /**
     * Remove ubicaciones
     *
     * @param \GestionBundle\Entity\Ubicacion $ubicaciones
     */
    public function removeUbicacion(\GestionBundle\Entity\Ubicacion $ubicaciones)
    {
        $this->propietario->removeElement($ubicaciones);
    }

    /**
     * Get user
     *
     * @return \GestionBundle\Entity\Ubicacion
     */
    public function getUbicacion()
    {
        return $this->ubicaciones;
    }


}

