<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlMecanismo
 *
 * @ORM\Table(name="ctl_mecanismo")
 * @ORM\Entity
 */
class CtlMecanismo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_mecanismo_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_mecanismo", type="string", length=255, nullable=true)
     */
    private $nombreMecanismo;

    /**
     * @var integer
     *
     * @ORM\Column(name="manual_mecanismo", type="integer", nullable=false)
     */
    private $manualMecanismo;



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
     * Set nombreMecanismo
     *
     * @param string $nombreMecanismo
     *
     * @return CtlMecanismo
     */
    public function setNombreMecanismo($nombreMecanismo)
    {
        $this->nombreMecanismo = $nombreMecanismo;

        return $this;
    }

    /**
     * Get nombreMecanismo
     *
     * @return string
     */
    public function getNombreMecanismo()
    {
        return $this->nombreMecanismo;
    }

    /**
     * Set manualMecanismo
     *
     * @param integer $manualMecanismo
     *
     * @return CtlMecanismo
     */
    public function setManualMecanismo($manualMecanismo)
    {
        $this->manualMecanismo = $manualMecanismo;

        return $this;
    }

    /**
     * Get manualMecanismo
     *
     * @return integer
     */
    public function getManualMecanismo()
    {
        return $this->manualMecanismo;
    }
}
