<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlComponente
 *
 * @ORM\Table(name="ctl_componente", uniqueConstraints={@ORM\UniqueConstraint(name="ctl_componente_nombre_componente_key", columns={"nombre_componente"})}, indexes={@ORM\Index(name="FKI_componente_rol", columns={"role_registra_componente"})})
 * @ORM\Entity
 */
class CtlComponente
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_componente_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_componente", type="string", length=255, nullable=false)
     */
    private $nombreComponente;

    /**
     * @var \CtlRol
     *
     * @ORM\ManyToOne(targetEntity="CtlRol")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="role_registra_componente", referencedColumnName="id")
     * })
     */
    private $roleRegistraComponente;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="CtlInsumo", inversedBy="componente")
     * @ORM\JoinTable(name="componente_insumo",
     *   joinColumns={
     *     @ORM\JoinColumn(name="componente_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="insumo_id", referencedColumnName="id")
     *   }
     * )
     */
    private $insumo;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->insumo = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nombreComponente
     *
     * @param string $nombreComponente
     *
     * @return CtlComponente
     */
    public function setNombreComponente($nombreComponente)
    {
        $this->nombreComponente = $nombreComponente;

        return $this;
    }

    /**
     * Get nombreComponente
     *
     * @return string
     */
    public function getNombreComponente()
    {
        return $this->nombreComponente;
    }

    /**
     * Set roleRegistraComponente
     *
     * @param \Minsal\CoreBundle\Entity\CtlRol $roleRegistraComponente
     *
     * @return CtlComponente
     */
    public function setRoleRegistraComponente(\Minsal\CoreBundle\Entity\CtlRol $roleRegistraComponente = null)
    {
        $this->roleRegistraComponente = $roleRegistraComponente;

        return $this;
    }

    /**
     * Get roleRegistraComponente
     *
     * @return \Minsal\CoreBundle\Entity\CtlRol
     */
    public function getRoleRegistraComponente()
    {
        return $this->roleRegistraComponente;
    }

    /**
     * Add insumo
     *
     * @param \Minsal\CoreBundle\Entity\CtlInsumo $insumo
     *
     * @return CtlComponente
     */
    public function addInsumo(\Minsal\CoreBundle\Entity\CtlInsumo $insumo)
    {
        $this->insumo[] = $insumo;

        return $this;
    }

    /**
     * Remove insumo
     *
     * @param \Minsal\CoreBundle\Entity\CtlInsumo $insumo
     */
    public function removeInsumo(\Minsal\CoreBundle\Entity\CtlInsumo $insumo)
    {
        $this->insumo->removeElement($insumo);
    }

    /**
     * Get insumo
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getInsumo()
    {
        return $this->insumo;
    }
}
