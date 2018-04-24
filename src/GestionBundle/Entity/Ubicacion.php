<?php

namespace GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;

/**
 * Ubicacion
 *
 * @ORM\Table(name="ubicacion")
 * @ORM\Entity(repositoryClass="GestionBundle\Repository\UbicacionRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Ubicacion
{
    /**
     *
     * @ORM\ManyToOne(targetEntity="Vehiculos",inversedBy="ubicaciones")
     * @ORM\JoinColumn(name="id_vehiculo",referencedColumnName="id", onDelete="CASCADE", nullable=false)
     * @Assert\NotNull()
     */
    protected $vehiculo;


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
     * @ORM\Column(name="longitud", type="string", length=45)
     */
    private $longitud;

    /**
     * @var string
     *
     * @ORM\Column(name="latitud", type="string", length=45)
     */
    private $latitud;



    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime")
     *
     */

    private $createdAt;

    /**
     * @var bool
     *
     * @ORM\Column(name="isActive", type="boolean", length=45)
     * @Assert\NotNull()
     */
    private $isActive;


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
     * Set longitud
     *
     * @param string $longitud
     *
     * @return Ubicacion
     */
    public function setLongitud($longitud)
    {
        $this->longitud = $longitud;

        return $this;
    }

    /**
     * Get longitud
     *
     * @return string
     */
    public function getLongitud()
    {
        return $this->longitud;
    }

    /**
     * Set latitud
     *
     * @param string $latitud
     *
     * @return Ubicacion
     */
    public function setLatitud($latitud)
    {
        $this->latitud = $latitud;

        return $this;
    }

    /**
     * Get latitud
     *
     * @return string
     */
    public function getLatitud()
    {
        return $this->latitud;
    }

    /**
     * Set vehiculo
     *
     * @param integer $vehiculo
     *
     * @return Ubicacion
     */


    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Ubicacion
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
     * @ORM\PrePersist
     */
    public function setCreatedAtValue(){
        $this->createdAt= new \DateTime();
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return Ubicacion
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
     * Set vehiculo
     *
     * @param \GestionBundle\Entity\Vehiculos $vehiculo
     *
     * @return Ubicacion
     */
    public function setVehiculo(\GestionBundle\Entity\Vehiculos $vehiculo = null)
    {
        $this->vehiculo = $vehiculo;

        return $this;
    }

    /**
     * Get vehiculo
     *
     * @return \GestionBundle\Entity\Vehiculos
     */
    public function getVehiculo()
    {
        return $this->vehiculo;
    }

    public function findOneId_vehiculo($id_vehiculo){
        echo 'metodo finbyid_vehiculo';
    }
}
