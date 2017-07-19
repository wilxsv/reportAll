<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlTipoMovimiento
 *
 * @ORM\Table(name="ctl_tipo_movimiento", uniqueConstraints={@ORM\UniqueConstraint(name="ctl_tipo_movimiento_nombre_movimiento_key", columns={"nombre_movimiento"})})
 * @ORM\Entity
 */
class CtlTipoMovimiento
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_tipo_movimiento_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_movimiento", type="string", length=255, nullable=false)
     */
    private $nombreMovimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_movmiento", type="text", nullable=true)
     */
    private $descripcionMovmiento;

    /**
     * @var integer
     *
     * @ORM\Column(name="agrega_movimiento", type="integer", nullable=true)
     */
    private $agregaMovimiento;



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
     * Set nombreMovimiento
     *
     * @param string $nombreMovimiento
     *
     * @return CtlTipoMovimiento
     */
    public function setNombreMovimiento($nombreMovimiento)
    {
        $this->nombreMovimiento = $nombreMovimiento;

        return $this;
    }

    /**
     * Get nombreMovimiento
     *
     * @return string
     */
    public function getNombreMovimiento()
    {
        return $this->nombreMovimiento;
    }

    /**
     * Set descripcionMovmiento
     *
     * @param string $descripcionMovmiento
     *
     * @return CtlTipoMovimiento
     */
    public function setDescripcionMovmiento($descripcionMovmiento)
    {
        $this->descripcionMovmiento = $descripcionMovmiento;

        return $this;
    }

    /**
     * Get descripcionMovmiento
     *
     * @return string
     */
    public function getDescripcionMovmiento()
    {
        return $this->descripcionMovmiento;
    }

    /**
     * Set agregaMovimiento
     *
     * @param integer $agregaMovimiento
     *
     * @return CtlTipoMovimiento
     */
    public function setAgregaMovimiento($agregaMovimiento)
    {
        $this->agregaMovimiento = $agregaMovimiento;

        return $this;
    }

    /**
     * Get agregaMovimiento
     *
     * @return integer
     */
    public function getAgregaMovimiento()
    {
        return $this->agregaMovimiento;
    }
}
