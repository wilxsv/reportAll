<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlAcceso
 *
 * @ORM\Table(name="ctl_acceso", indexes={@ORM\Index(name="IDX_8566BFCE55258FE8", columns={"acceso_id"})})
 * @ORM\Entity
 */
class CtlAcceso
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_acceso_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_acceso", type="string", length=250, nullable=false)
     */
    private $nombreAcceso;

    /**
     * @var string
     *
     * @ORM\Column(name="path_acceso", type="string", length=250, nullable=false)
     */
    private $pathAcceso;

    /**
     * @var boolean
     *
     * @ORM\Column(name="public_acceso", type="boolean", nullable=false)
     */
    private $publicAcceso = false;

    /**
     * @var integer
     *
     * @ORM\Column(name="orden_acceso", type="integer", nullable=false)
     */
    private $ordenAcceso = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="visible_acceso", type="boolean", nullable=false)
     */
    private $visibleAcceso = false;

    /**
     * @var \CtlAcceso
     *
     * @ORM\ManyToOne(targetEntity="CtlAcceso")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="acceso_id", referencedColumnName="id")
     * })
     */
    private $acceso;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="CtlRol", inversedBy="acceso")
     * @ORM\JoinTable(name="permisos",
     *   joinColumns={
     *     @ORM\JoinColumn(name="acceso_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="rol_id", referencedColumnName="id")
     *   }
     * )
     */
    private $rol;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->rol = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nombreAcceso
     *
     * @param string $nombreAcceso
     *
     * @return CtlAcceso
     */
    public function setNombreAcceso($nombreAcceso)
    {
        $this->nombreAcceso = $nombreAcceso;

        return $this;
    }

    /**
     * Get nombreAcceso
     *
     * @return string
     */
    public function getNombreAcceso()
    {
        return $this->nombreAcceso;
    }

    /**
     * Set pathAcceso
     *
     * @param string $pathAcceso
     *
     * @return CtlAcceso
     */
    public function setPathAcceso($pathAcceso)
    {
        $this->pathAcceso = $pathAcceso;

        return $this;
    }

    /**
     * Get pathAcceso
     *
     * @return string
     */
    public function getPathAcceso()
    {
        return $this->pathAcceso;
    }

    /**
     * Set publicAcceso
     *
     * @param boolean $publicAcceso
     *
     * @return CtlAcceso
     */
    public function setPublicAcceso($publicAcceso)
    {
        $this->publicAcceso = $publicAcceso;

        return $this;
    }

    /**
     * Get publicAcceso
     *
     * @return boolean
     */
    public function getPublicAcceso()
    {
        return $this->publicAcceso;
    }

    /**
     * Set ordenAcceso
     *
     * @param integer $ordenAcceso
     *
     * @return CtlAcceso
     */
    public function setOrdenAcceso($ordenAcceso)
    {
        $this->ordenAcceso = $ordenAcceso;

        return $this;
    }

    /**
     * Get ordenAcceso
     *
     * @return integer
     */
    public function getOrdenAcceso()
    {
        return $this->ordenAcceso;
    }

    /**
     * Set visibleAcceso
     *
     * @param boolean $visibleAcceso
     *
     * @return CtlAcceso
     */
    public function setVisibleAcceso($visibleAcceso)
    {
        $this->visibleAcceso = $visibleAcceso;

        return $this;
    }

    /**
     * Get visibleAcceso
     *
     * @return boolean
     */
    public function getVisibleAcceso()
    {
        return $this->visibleAcceso;
    }

    /**
     * Set acceso
     *
     * @param \Minsal\CoreBundle\Entity\CtlAcceso $acceso
     *
     * @return CtlAcceso
     */
    public function setAcceso(\Minsal\CoreBundle\Entity\CtlAcceso $acceso = null)
    {
        $this->acceso = $acceso;

        return $this;
    }

    /**
     * Get acceso
     *
     * @return \Minsal\CoreBundle\Entity\CtlAcceso
     */
    public function getAcceso()
    {
        return $this->acceso;
    }

    /**
     * Add rol
     *
     * @param \Minsal\CoreBundle\Entity\CtlRol $rol
     *
     * @return CtlAcceso
     */
    public function addRol(\Minsal\CoreBundle\Entity\CtlRol $rol)
    {
        $this->rol[] = $rol;

        return $this;
    }

    /**
     * Remove rol
     *
     * @param \Minsal\CoreBundle\Entity\CtlRol $rol
     */
    public function removeRol(\Minsal\CoreBundle\Entity\CtlRol $rol)
    {
        $this->rol->removeElement($rol);
    }

    /**
     * Get rol
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRol()
    {
        return $this->rol;
    }
}
