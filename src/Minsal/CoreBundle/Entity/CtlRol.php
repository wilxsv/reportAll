<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlRol
 *
 * @ORM\Table(name="ctl_rol", uniqueConstraints={@ORM\UniqueConstraint(name="un_nombre_rol", columns={"nombre_rol"})})
 * @ORM\Entity
 */
class CtlRol
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_rol_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_rol", type="string", length=50, nullable=false)
     */
    private $nombreRol;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="CtlAcceso", mappedBy="rol")
     */
    private $acceso;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->acceso = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nombreRol
     *
     * @param string $nombreRol
     *
     * @return CtlRol
     */
    public function setNombreRol($nombreRol)
    {
        $this->nombreRol = $nombreRol;

        return $this;
    }

    /**
     * Get nombreRol
     *
     * @return string
     */
    public function getNombreRol()
    {
        return $this->nombreRol;
    }

    /**
     * Add acceso
     *
     * @param \Minsal\CoreBundle\Entity\CtlAcceso $acceso
     *
     * @return CtlRol
     */
    public function addAcceso(\Minsal\CoreBundle\Entity\CtlAcceso $acceso)
    {
        $this->acceso[] = $acceso;

        return $this;
    }

    /**
     * Remove acceso
     *
     * @param \Minsal\CoreBundle\Entity\CtlAcceso $acceso
     */
    public function removeAcceso(\Minsal\CoreBundle\Entity\CtlAcceso $acceso)
    {
        $this->acceso->removeElement($acceso);
    }

    /**
     * Get acceso
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAcceso()
    {
        return $this->acceso;
    }
}
