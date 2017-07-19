<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlGrupo
 *
 * @ORM\Table(name="ctl_grupo", indexes={@ORM\Index(name="IDX_501FC6D89C833003", columns={"grupo_id"}), @ORM\Index(name="IDX_501FC6D86D7078B6", columns={"suministro_id"})})
 * @ORM\Entity
 */
class CtlGrupo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_grupo_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_grupo", type="string", length=255, nullable=false)
     */
    private $nombreGrupo;

    /**
     * @var string
     *
     * @ORM\Column(name="detalle_grupo", type="text", nullable=true)
     */
    private $detalleGrupo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="registro_schema", type="datetime", nullable=true)
     */
    private $registroSchema = '(now())::timestamp(0) without time zone';

    /**
     * @var string
     *
     * @ORM\Column(name="detalle_schema", type="text", nullable=true)
     */
    private $detalleSchema = 'Agregado antes de gestor de maestros';

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id_schema", type="bigint", nullable=true)
     */
    private $userIdSchema = '(1)::bigint';

    /**
     * @var string
     *
     * @ORM\Column(name="ip_user_schema", type="string", nullable=true)
     */
    private $ipUserSchema = '0.0.0.0';

    /**
     * @var integer
     *
     * @ORM\Column(name="estado_schema", type="integer", nullable=true)
     */
    private $estadoSchema = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="enable_schema", type="integer", nullable=true)
     */
    private $enableSchema = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="codigo_grupo", type="bigint", nullable=true)
     */
    private $codigoGrupo = '0';

    /**
     * @var \CtlGrupo
     *
     * @ORM\ManyToOne(targetEntity="CtlGrupo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="grupo_id", referencedColumnName="id")
     * })
     */
    private $grupo;

    /**
     * @var \CtlSuministro
     *
     * @ORM\ManyToOne(targetEntity="CtlSuministro")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="suministro_id", referencedColumnName="id")
     * })
     */
    private $suministro;



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
     * Set nombreGrupo
     *
     * @param string $nombreGrupo
     *
     * @return CtlGrupo
     */
    public function setNombreGrupo($nombreGrupo)
    {
        $this->nombreGrupo = $nombreGrupo;

        return $this;
    }

    /**
     * Get nombreGrupo
     *
     * @return string
     */
    public function getNombreGrupo()
    {
        return $this->nombreGrupo;
    }

    /**
     * Set detalleGrupo
     *
     * @param string $detalleGrupo
     *
     * @return CtlGrupo
     */
    public function setDetalleGrupo($detalleGrupo)
    {
        $this->detalleGrupo = $detalleGrupo;

        return $this;
    }

    /**
     * Get detalleGrupo
     *
     * @return string
     */
    public function getDetalleGrupo()
    {
        return $this->detalleGrupo;
    }

    /**
     * Set registroSchema
     *
     * @param \DateTime $registroSchema
     *
     * @return CtlGrupo
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
     * Set detalleSchema
     *
     * @param string $detalleSchema
     *
     * @return CtlGrupo
     */
    public function setDetalleSchema($detalleSchema)
    {
        $this->detalleSchema = $detalleSchema;

        return $this;
    }

    /**
     * Get detalleSchema
     *
     * @return string
     */
    public function getDetalleSchema()
    {
        return $this->detalleSchema;
    }

    /**
     * Set userIdSchema
     *
     * @param integer $userIdSchema
     *
     * @return CtlGrupo
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
     * @return CtlGrupo
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
     * Set estadoSchema
     *
     * @param integer $estadoSchema
     *
     * @return CtlGrupo
     */
    public function setEstadoSchema($estadoSchema)
    {
        $this->estadoSchema = $estadoSchema;

        return $this;
    }

    /**
     * Get estadoSchema
     *
     * @return integer
     */
    public function getEstadoSchema()
    {
        return $this->estadoSchema;
    }

    /**
     * Set enableSchema
     *
     * @param integer $enableSchema
     *
     * @return CtlGrupo
     */
    public function setEnableSchema($enableSchema)
    {
        $this->enableSchema = $enableSchema;

        return $this;
    }

    /**
     * Get enableSchema
     *
     * @return integer
     */
    public function getEnableSchema()
    {
        return $this->enableSchema;
    }

    /**
     * Set codigoGrupo
     *
     * @param integer $codigoGrupo
     *
     * @return CtlGrupo
     */
    public function setCodigoGrupo($codigoGrupo)
    {
        $this->codigoGrupo = $codigoGrupo;

        return $this;
    }

    /**
     * Get codigoGrupo
     *
     * @return integer
     */
    public function getCodigoGrupo()
    {
        return $this->codigoGrupo;
    }

    /**
     * Set grupo
     *
     * @param \Minsal\CoreBundle\Entity\CtlGrupo $grupo
     *
     * @return CtlGrupo
     */
    public function setGrupo(\Minsal\CoreBundle\Entity\CtlGrupo $grupo = null)
    {
        $this->grupo = $grupo;

        return $this;
    }

    /**
     * Get grupo
     *
     * @return \Minsal\CoreBundle\Entity\CtlGrupo
     */
    public function getGrupo()
    {
        return $this->grupo;
    }

    /**
     * Set suministro
     *
     * @param \Minsal\CoreBundle\Entity\CtlSuministro $suministro
     *
     * @return CtlGrupo
     */
    public function setSuministro(\Minsal\CoreBundle\Entity\CtlSuministro $suministro = null)
    {
        $this->suministro = $suministro;

        return $this;
    }

    /**
     * Get suministro
     *
     * @return \Minsal\CoreBundle\Entity\CtlSuministro
     */
    public function getSuministro()
    {
        return $this->suministro;
    }
}
