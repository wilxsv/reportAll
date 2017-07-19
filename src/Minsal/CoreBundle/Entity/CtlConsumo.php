<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlConsumo
 *
 * @ORM\Table(name="ctl_consumo", indexes={@ORM\Index(name="fki_fkctl_consumo_existencia", columns={"ctl_existencia"}), @ORM\Index(name="IDX_285219DC46F39AED", columns={"ctl_mecanismoid"})})
 * @ORM\Entity
 */
class CtlConsumo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_consumo_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_consumo", type="datetime", nullable=false)
     */
    private $fechaConsumo;

    /**
     * @var float
     *
     * @ORM\Column(name="cantidad_consumo", type="float", precision=10, scale=0, nullable=false)
     */
    private $cantidadConsumo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="registro_schema", type="datetime", nullable=false)
     */
    private $registroSchema;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id_schema", type="bigint", nullable=false)
     */
    private $userIdSchema;

    /**
     * @var string
     *
     * @ORM\Column(name="ip_user_schema", type="string", nullable=false)
     */
    private $ipUserSchema = '::1';

    /**
     * @var \CtlExistencias
     *
     * @ORM\ManyToOne(targetEntity="CtlExistencias")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ctl_existencia", referencedColumnName="id")
     * })
     */
    private $ctlExistencia;

    /**
     * @var \CtlMecanismo
     *
     * @ORM\ManyToOne(targetEntity="CtlMecanismo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ctl_mecanismoid", referencedColumnName="id")
     * })
     */
    private $ctlMecanismoid;



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
     * Set fechaConsumo
     *
     * @param \DateTime $fechaConsumo
     *
     * @return CtlConsumo
     */
    public function setFechaConsumo($fechaConsumo)
    {
        $this->fechaConsumo = $fechaConsumo;

        return $this;
    }

    /**
     * Get fechaConsumo
     *
     * @return \DateTime
     */
    public function getFechaConsumo()
    {
        return $this->fechaConsumo;
    }

    /**
     * Set cantidadConsumo
     *
     * @param float $cantidadConsumo
     *
     * @return CtlConsumo
     */
    public function setCantidadConsumo($cantidadConsumo)
    {
        $this->cantidadConsumo = $cantidadConsumo;

        return $this;
    }

    /**
     * Get cantidadConsumo
     *
     * @return float
     */
    public function getCantidadConsumo()
    {
        return $this->cantidadConsumo;
    }

    /**
     * Set registroSchema
     *
     * @param \DateTime $registroSchema
     *
     * @return CtlConsumo
     */
    public function setRegistroSchema($registroSchema)
    {
        $this->registroSchema = $registroSchema;

        return $this;
    }

    /**
     * Get registroSchema
     *
     * @return \DateTime
     */
    public function getRegistroSchema()
    {
        return $this->registroSchema;
    }

    /**
     * Set userIdSchema
     *
     * @param integer $userIdSchema
     *
     * @return CtlConsumo
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
     * @return CtlConsumo
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
     * Set ctlExistencia
     *
     * @param \Minsal\CoreBundle\Entity\CtlExistencias $ctlExistencia
     *
     * @return CtlConsumo
     */
    public function setCtlExistencia(\Minsal\CoreBundle\Entity\CtlExistencias $ctlExistencia = null)
    {
        $this->ctlExistencia = $ctlExistencia;

        return $this;
    }

    /**
     * Get ctlExistencia
     *
     * @return \Minsal\CoreBundle\Entity\CtlExistencias
     */
    public function getCtlExistencia()
    {
        return $this->ctlExistencia;
    }

    /**
     * Set ctlMecanismoid
     *
     * @param \Minsal\CoreBundle\Entity\CtlMecanismo $ctlMecanismoid
     *
     * @return CtlConsumo
     */
    public function setCtlMecanismoid(\Minsal\CoreBundle\Entity\CtlMecanismo $ctlMecanismoid = null)
    {
        $this->ctlMecanismoid = $ctlMecanismoid;

        return $this;
    }

    /**
     * Get ctlMecanismoid
     *
     * @return \Minsal\CoreBundle\Entity\CtlMecanismo
     */
    public function getCtlMecanismoid()
    {
        return $this->ctlMecanismoid;
    }
}
