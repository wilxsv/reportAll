<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Auditoria
 *
 * @ORM\Table(name="auditoria")
 * @ORM\Entity
 */
class Auditoria
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="auditoria_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipo_operacion", type="integer", nullable=false)
     */
    private $tipoOperacion;

    /**
     * @var string
     *
     * @ORM\Column(name="tabla_operacion", type="text", nullable=false)
     */
    private $tablaOperacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="indice_operacion", type="bigint", nullable=false)
     */
    private $indiceOperacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="bigint", nullable=false)
     */
    private $userid;



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
     * Set tipoOperacion
     *
     * @param integer $tipoOperacion
     *
     * @return Auditoria
     */
    public function setTipoOperacion($tipoOperacion)
    {
        $this->tipoOperacion = $tipoOperacion;

        return $this;
    }

    /**
     * Get tipoOperacion
     *
     * @return integer
     */
    public function getTipoOperacion()
    {
        return $this->tipoOperacion;
    }

    /**
     * Set tablaOperacion
     *
     * @param string $tablaOperacion
     *
     * @return Auditoria
     */
    public function setTablaOperacion($tablaOperacion)
    {
        $this->tablaOperacion = $tablaOperacion;

        return $this;
    }

    /**
     * Get tablaOperacion
     *
     * @return string
     */
    public function getTablaOperacion()
    {
        return $this->tablaOperacion;
    }

    /**
     * Set indiceOperacion
     *
     * @param integer $indiceOperacion
     *
     * @return Auditoria
     */
    public function setIndiceOperacion($indiceOperacion)
    {
        $this->indiceOperacion = $indiceOperacion;

        return $this;
    }

    /**
     * Get indiceOperacion
     *
     * @return integer
     */
    public function getIndiceOperacion()
    {
        return $this->indiceOperacion;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     *
     * @return Auditoria
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return integer
     */
    public function getUserid()
    {
        return $this->userid;
    }
}
