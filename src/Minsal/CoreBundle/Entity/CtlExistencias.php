<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlExistencias
 *
 * @ORM\Table(name="ctl_existencias", indexes={@ORM\Index(name="IDX_69499BED05C792B", columns={"ctl_insumoid"}), @ORM\Index(name="IDX_69499BE7B62918", columns={"ctl_establecimientoid"})})
 * @ORM\Entity
 */
class CtlExistencias
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_existencias_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_registro", type="datetime", nullable=false)
     */
    private $fechaRegistro;

    /**
     * @var float
     *
     * @ORM\Column(name="cantidad_existencia", type="float", precision=10, scale=0, nullable=false)
     */
    private $cantidadExistencia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_caducidad", type="date", nullable=true)
     */
    private $fechaCaducidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="lote_existencia", type="bigint", nullable=true)
     */
    private $loteExistencia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_existencia", type="date", nullable=false)
     */
    private $fechaExistencia;

    /**
     * @var boolean
     *
     * @ORM\Column(name="almacen_farmacia", type="boolean", nullable=false)
     */
    private $almacenFarmacia;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id_schema", type="bigint", nullable=false)
     */
    private $userIdSchema = '(1)::bigint';

    /**
     * @var string
     *
     * @ORM\Column(name="ip_user_schema", type="string", nullable=false)
     */
    private $ipUserSchema = '::1';

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
     * @var \CtlEstablecimiento
     *
     * @ORM\ManyToOne(targetEntity="CtlEstablecimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ctl_establecimientoid", referencedColumnName="id")
     * })
     */
    private $ctlEstablecimientoid;



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
     * Set fechaRegistro
     *
     * @param \DateTime $fechaRegistro
     *
     * @return CtlExistencias
     */
    public function setFechaRegistro($fechaRegistro)
    {
        $this->fechaRegistro = $fechaRegistro;

        return $this;
    }

    /**
     * Get fechaRegistro
     *
     * @return \DateTime
     */
    public function getFechaRegistro()
    {
        return $this->fechaRegistro;
    }

    /**
     * Set cantidadExistencia
     *
     * @param float $cantidadExistencia
     *
     * @return CtlExistencias
     */
    public function setCantidadExistencia($cantidadExistencia)
    {
        $this->cantidadExistencia = $cantidadExistencia;

        return $this;
    }

    /**
     * Get cantidadExistencia
     *
     * @return float
     */
    public function getCantidadExistencia()
    {
        return $this->cantidadExistencia;
    }

    /**
     * Set fechaCaducidad
     *
     * @param \DateTime $fechaCaducidad
     *
     * @return CtlExistencias
     */
    public function setFechaCaducidad($fechaCaducidad)
    {
        $this->fechaCaducidad = $fechaCaducidad;

        return $this;
    }

    /**
     * Get fechaCaducidad
     *
     * @return \DateTime
     */
    public function getFechaCaducidad()
    {
        return $this->fechaCaducidad;
    }

    /**
     * Set loteExistencia
     *
     * @param integer $loteExistencia
     *
     * @return CtlExistencias
     */
    public function setLoteExistencia($loteExistencia)
    {
        $this->loteExistencia = $loteExistencia;

        return $this;
    }

    /**
     * Get loteExistencia
     *
     * @return integer
     */
    public function getLoteExistencia()
    {
        return $this->loteExistencia;
    }

    /**
     * Set fechaExistencia
     *
     * @param \DateTime $fechaExistencia
     *
     * @return CtlExistencias
     */
    public function setFechaExistencia($fechaExistencia)
    {
        $this->fechaExistencia = $fechaExistencia;

        return $this;
    }

    /**
     * Get fechaExistencia
     *
     * @return \DateTime
     */
    public function getFechaExistencia()
    {
        return $this->fechaExistencia;
    }

    /**
     * Set almacenFarmacia
     *
     * @param boolean $almacenFarmacia
     *
     * @return CtlExistencias
     */
    public function setAlmacenFarmacia($almacenFarmacia)
    {
        $this->almacenFarmacia = $almacenFarmacia;

        return $this;
    }

    /**
     * Get almacenFarmacia
     *
     * @return boolean
     */
    public function getAlmacenFarmacia()
    {
        return $this->almacenFarmacia;
    }

    /**
     * Set userIdSchema
     *
     * @param integer $userIdSchema
     *
     * @return CtlExistencias
     */
    public function setUserIdSchema($userIdSchema)
    {
        $this->userIdSchema = $userIdSchema;

        return $this;
    }

    /**
     * Get userIdSchema
     *
     * @return integer
     */
    public function getUserIdSchema()
    {
        return $this->userIdSchema;
    }

    /**
     * Set ipUserSchema
     *
     * @param string $ipUserSchema
     *
     * @return CtlExistencias
     */
    public function setIpUserSchema($ipUserSchema)
    {
        $this->ipUserSchema = $ipUserSchema;

        return $this;
    }

    /**
     * Get ipUserSchema
     *
     * @return string
     */
    public function getIpUserSchema()
    {
        return $this->ipUserSchema;
    }

    /**
     * Set ctlInsumoid
     *
     * @param \Minsal\CoreBundle\Entity\CtlInsumo $ctlInsumoid
     *
     * @return CtlExistencias
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
     * Set ctlEstablecimientoid
     *
     * @param \Minsal\CoreBundle\Entity\CtlEstablecimiento $ctlEstablecimientoid
     *
     * @return CtlExistencias
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
}
