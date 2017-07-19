<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlSuministro
 *
 * @ORM\Table(name="ctl_suministro", uniqueConstraints={@ORM\UniqueConstraint(name="ctl_suministro_nombre_suministro_key", columns={"nombre_suministro"})}, indexes={@ORM\Index(name="FKI_suministro_registra", columns={"role_registra"})})
 * @ORM\Entity
 */
class CtlSuministro
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_suministro_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_suministro", type="string", length=255, nullable=false)
     */
    private $nombreSuministro;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="registro_schema", type="datetime", nullable=true)
     */
    private $registroSchema = '2017-02-26 21:29:15.600166';

    /**
     * @var integer
     *
     * @ORM\Column(name="enable_schema", type="integer", nullable=true)
     */
    private $enableSchema = '0';

    /**
     * @var \CtlRol
     *
     * @ORM\ManyToOne(targetEntity="CtlRol")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="role_registra", referencedColumnName="id")
     * })
     */
    private $roleRegistra;



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
     * Set nombreSuministro
     *
     * @param string $nombreSuministro
     *
     * @return CtlSuministro
     */
    public function setNombreSuministro($nombreSuministro)
    {
        $this->nombreSuministro = $nombreSuministro;

        return $this;
    }

    /**
     * Get nombreSuministro
     *
     * @return string
     */
    public function getNombreSuministro()
    {
        return $this->nombreSuministro;
    }

    /**
     * Set registroSchema
     *
     * @param \DateTime $registroSchema
     *
     * @return CtlSuministro
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
     * Set enableSchema
     *
     * @param integer $enableSchema
     *
     * @return CtlSuministro
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
     * Set roleRegistra
     *
     * @param \Minsal\CoreBundle\Entity\CtlRol $roleRegistra
     *
     * @return CtlSuministro
     */
    public function setRoleRegistra(\Minsal\CoreBundle\Entity\CtlRol $roleRegistra = null)
    {
        $this->roleRegistra = $roleRegistra;

        return $this;
    }

    /**
     * Get roleRegistra
     *
     * @return \Minsal\CoreBundle\Entity\CtlRol
     */
    public function getRoleRegistra()
    {
        return $this->roleRegistra;
    }
}
