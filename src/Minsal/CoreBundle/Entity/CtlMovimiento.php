<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlMovimiento
 *
 * @ORM\Table(name="ctl_movimiento", indexes={@ORM\Index(name="IDX_B621B5407B62918", columns={"ctl_establecimientoid"}), @ORM\Index(name="IDX_B621B540D05C792B", columns={"ctl_insumoid"}), @ORM\Index(name="IDX_B621B5403CEA1C61", columns={"ctl_tipo_movimientoid"}), @ORM\Index(name="IDX_B621B540B264D8", columns={"establecimiento_origen_id"})})
 * @ORM\Entity
 */
class CtlMovimiento
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_movimiento_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_movimiento", type="datetime", nullable=false)
     */
    private $fechaMovimiento;

    /**
     * @var float
     *
     * @ORM\Column(name="cantidad", type="float", precision=10, scale=0, nullable=false)
     */
    private $cantidad;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_registro_movimiento", type="datetime", nullable=false)
     */
    private $fechaRegistroMovimiento;

    /**
     * @var \CtlEstablecimiento
     *
     * @ORM\ManyToOne(targetEntity="CtlEstablecimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ctl_establecimientoid", referencedColumnName="id")
     * })
     */
    private $ctlEstablecimientoid;

    /**
     * @var \CtlInsumo
     *
     * @ORM\ManyToOne(targetEntity="CtlInsumo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ctl_insumoid", referencedColumnName="id")
     * })
     */
    private $ctlInsumoid;

    /**
     * @var \CtlTipoMovimiento
     *
     * @ORM\ManyToOne(targetEntity="CtlTipoMovimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ctl_tipo_movimientoid", referencedColumnName="id")
     * })
     */
    private $ctlTipoMovimientoid;

    /**
     * @var \CtlEstablecimiento
     *
     * @ORM\ManyToOne(targetEntity="CtlEstablecimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="establecimiento_origen_id", referencedColumnName="id")
     * })
     */
    private $establecimientoOrigen;



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
     * Set fechaMovimiento
     *
     * @param \DateTime $fechaMovimiento
     *
     * @return CtlMovimiento
     */
    public function setFechaMovimiento($fechaMovimiento)
    {
        $this->fechaMovimiento = $fechaMovimiento;

        return $this;
    }

    /**
     * Get fechaMovimiento
     *
     * @return \DateTime
     */
    public function getFechaMovimiento()
    {
        return $this->fechaMovimiento;
    }

    /**
     * Set cantidad
     *
     * @param float $cantidad
     *
     * @return CtlMovimiento
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return float
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set fechaRegistroMovimiento
     *
     * @param \DateTime $fechaRegistroMovimiento
     *
     * @return CtlMovimiento
     */
    public function setFechaRegistroMovimiento($fechaRegistroMovimiento)
    {
        $this->fechaRegistroMovimiento = $fechaRegistroMovimiento;

        return $this;
    }

    /**
     * Get fechaRegistroMovimiento
     *
     * @return \DateTime
     */
    public function getFechaRegistroMovimiento()
    {
        return $this->fechaRegistroMovimiento;
    }

    /**
     * Set ctlEstablecimientoid
     *
     * @param \Minsal\CoreBundle\Entity\CtlEstablecimiento $ctlEstablecimientoid
     *
     * @return CtlMovimiento
     */
    public function setCtlEstablecimientoid(\Minsal\CoreBundle\Entity\CtlEstablecimiento $ctlEstablecimientoid = null)
    {
        $this->ctlEstablecimientoid = $ctlEstablecimientoid;

        return $this;
    }

    /**
     * Get ctlEstablecimientoid
     *
     * @return \Minsal\CoreBundle\Entity\CtlEstablecimiento
     */
    public function getCtlEstablecimientoid()
    {
        return $this->ctlEstablecimientoid;
    }

    /**
     * Set ctlInsumoid
     *
     * @param \Minsal\CoreBundle\Entity\CtlInsumo $ctlInsumoid
     *
     * @return CtlMovimiento
     */
    public function setCtlInsumoid(\Minsal\CoreBundle\Entity\CtlInsumo $ctlInsumoid = null)
    {
        $this->ctlInsumoid = $ctlInsumoid;

        return $this;
    }

    /**
     * Get ctlInsumoid
     *
     * @return \Minsal\CoreBundle\Entity\CtlInsumo
     */
    public function getCtlInsumoid()
    {
        return $this->ctlInsumoid;
    }

    /**
     * Set ctlTipoMovimientoid
     *
     * @param \Minsal\CoreBundle\Entity\CtlTipoMovimiento $ctlTipoMovimientoid
     *
     * @return CtlMovimiento
     */
    public function setCtlTipoMovimientoid(\Minsal\CoreBundle\Entity\CtlTipoMovimiento $ctlTipoMovimientoid = null)
    {
        $this->ctlTipoMovimientoid = $ctlTipoMovimientoid;

        return $this;
    }

    /**
     * Get ctlTipoMovimientoid
     *
     * @return \Minsal\CoreBundle\Entity\CtlTipoMovimiento
     */
    public function getCtlTipoMovimientoid()
    {
        return $this->ctlTipoMovimientoid;
    }

    /**
     * Set establecimientoOrigen
     *
     * @param \Minsal\CoreBundle\Entity\CtlEstablecimiento $establecimientoOrigen
     *
     * @return CtlMovimiento
     */
    public function setEstablecimientoOrigen(\Minsal\CoreBundle\Entity\CtlEstablecimiento $establecimientoOrigen = null)
    {
        $this->establecimientoOrigen = $establecimientoOrigen;

        return $this;
    }

    /**
     * Get establecimientoOrigen
     *
     * @return \Minsal\CoreBundle\Entity\CtlEstablecimiento
     */
    public function getEstablecimientoOrigen()
    {
        return $this->establecimientoOrigen;
    }
}
