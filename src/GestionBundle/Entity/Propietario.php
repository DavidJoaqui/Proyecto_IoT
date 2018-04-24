<?php

namespace GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;

/**
 * Propietario
 *
 * @ORM\Table(name="propietario")
 * @ORM\Entity(repositoryClass="GestionBundle\Repository\PropietarioRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Propietario implements AdvancedUserInterface, \Serializable
{

    /**
     * @ORM\OneToMany(targetEntity="Vehiculos",mappedBy="propietario")
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
     * @ORM\Column(name="username", type="string", length=50, nullable=true, unique=true)
     *
     *
     */
    private $username;

    /**
     * @var int
     *
     * @ORM\Column(name="documento", type="integer", unique=true)
     */

    private $documento;


    /**
     * @var string
     *
     * @ORM\Column(name="nombres", type="string", length=45)
     */
    private $nombres;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidos", type="string", length=45)
     */
    private $apellidos;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=45, unique=true)
     */
    private $email;


    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     *
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", columnDefinition="ENUM('ROLE_ADMIN','ROLE_USER')",nullable=false,length=50)
     * @Assert\NotBlank()
     *
     */
    private $role;


    /**
     * @var bool
     * @ORM\Column(name="is_active", type="boolean")
     * @Assert\NotNull()
     *
     */
    private $isActive;


    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=45,nullable=true)
     */
    private $telefono;


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

    private $salt;


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
     * Set username
     *
     * @param string $username
     * @return Propietario
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
     * Set documento
     *
     * @param integer $documento
     *
     * @return Propietario
     */
    public function setDocumento($documento)
    {
        $this->documento = $documento;

        return $this;
    }

    /**
     * Get documento
     *
     * @return int
     */
    public function getDocumento()
    {
        return $this->documento;
    }

    /**
     * Set nombres
     *
     * @param string $nombres
     *
     * @return Propietario
     */
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;

        return $this;
    }

    /**
     * Get nombres
     *
     * @return string
     */
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     *
     * @return Propietario
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Propietario
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
     * @return Propietario
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
     * Set role
     *
     * @param string $role
     * @return Propietario
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     * @return Propietario
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
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Propietario
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
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


    public function getFullName(){
        return $this->nombres. " " .$this->apellidos;
    }


    public function getRoles()
    {
        return array($this->role);
    }

    public function getSalt()
    {
        return null;

    }
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;

    }

    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }

    public function isAccountNonExpired()
    {
        return true;
    }


    public function isAccountNonLocked()
    {
        return true;
    }


    public function isCredentialsNonExpired()
    {
        return true;
    }


    public function isEnabled()
    {
        return $this->isActive;
    }

    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password,
            $this->isActive
            // see section on salt below
            // $this->salt,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->username,
            $this->password,
            $this->isActive
            // see section on salt below
            // $this->salt
            ) = unserialize($serialized);
    }



}

