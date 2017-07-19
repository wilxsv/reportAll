<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlMicrored
 *
 * @ORM\Table(name="ctl_microred")
 * @ORM\Entity
 */
class CtlMicrored
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_microred_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=150, nullable=true)
     */
    private $nombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="codigoc3", type="integer", nullable=false)
     */
    private $codigoc3;



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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return CtlMicrored
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set codigoc3
     *
     * @param integer $codigoc3
     *
     * @return CtlMicrored
     */
    public function setCodigoc3($codigoc3)
    {
        $this->codigoc3 = $codigoc3;

        return $this;
    }

    /**
     * Get codigoc3
     *
     * @return integer
     */
    public function getCodigoc3()
    {
        return $this->codigoc3;
    }
}
