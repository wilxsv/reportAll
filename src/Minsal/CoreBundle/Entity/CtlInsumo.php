<?php

namespace Minsal\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CtlInsumo
 *
 * @ORM\Table(name="ctl_insumo", indexes={@ORM\Index(name="ctl_insumo_nombre_largo_key", columns={"nombre_largo_insumo"}), @ORM\Index(name="IDX_9DB322272F1374E", columns={"grupoid"})})
 * @ORM\Entity
 */
class CtlInsumo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ctl_insumo_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_nu", type="string", length=255, nullable=true)
     */
    private $codigoNu;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_sinab", type="string", length=10, nullable=false)
     */
    private $codigoSinab;

    /**
     * @var boolean
     *
     * @ORM\Column(name="listado_oficial", type="boolean", nullable=true)
     */
    private $listadoOficial = false;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_largo_insumo", type="text", nullable=true)
     */
    private $nombreLargoInsumo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="registro_schema", type="datetime", nullable=true)
     */
    private $registroSchema;

    /**
     * @var integer
     *
     * @ORM\Column(name="enable_schema", type="integer", nullable=true)
     */
    private $enableSchema = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="detalle_insumo", type="text", nullable=true)
     */
    private $detalleInsumo = 'na';

    /**
     * @var float
     *
     * @ORM\Column(name="costo_insumo", type="float", precision=10, scale=0, nullable=true)
     */
    private $costoInsumo;

    /**
     * @var \CtlGrupo
     *
     * @ORM\ManyToOne(targetEntity="CtlGrupo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="grupoid", referencedColumnName="id")
     * })
     */
    private $grupoid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="CtlEstablecimiento", inversedBy="ctlInsumoid")
     * @ORM\JoinTable(name="cuadro_basico",
     *   joinColumns={
     *     @ORM\JoinColumn(name="ctl_insumoid", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="ctl_establecimientoid", referencedColumnName="id")
     *   }
     * )
     */
    private $ctlEstablecimientoid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="CtlEstablecimiento", inversedBy="insumo")
     * @ORM\JoinTable(name="historico_cuadro_basico",
     *   joinColumns={
     *     @ORM\JoinColumn(name="insumo_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="establecimiento_id", referencedColumnName="id")
     *   }
     * )
     */
    private $establecimiento;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="CtlComponente", mappedBy="insumo")
     */
    private $componente;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ctlEstablecimientoid = new \Doctrine\Common\Collections\ArrayCollection();
        $this->establecimiento = new \Doctrine\Common\Collections\ArrayCollection();
        $this->componente = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set codigoNu
     *
     * @param string $codigoNu
     *
     * @return CtlInsumo
     */
    public function setCodigoNu($codigoNu)
    {
        $this->codigoNu = $codigoNu;

        return $this;
    }

    /**
     * Get codigoNu
     *
     * @return string
     */
    public function getCodigoNu()
    {
        return $this->codigoNu;
    }

    /**
     * Set codigoSinab
     *
     * @param string $codigoSinab
     *
     * @return CtlInsumo
     */
    public function setCodigoSinab($codigoSinab)
    {
        $this->codigoSinab = $codigoSinab;

        return $this;
    }

    /**
     * Get codigoSinab
     *
     * @return string
     */
    public function getCodigoSinab()
    {
        return $this->codigoSinab;
    }

    /**
     * Set listadoOficial
     *
     * @param boolean $listadoOficial
     *
     * @return CtlInsumo
     */
    public function setListadoOficial($listadoOficial)
    {
        $this->listadoOficial = $listadoOficial;

        return $this;
    }

    /**
     * Get listadoOficial
     *
     * @return boolean
     */
    public function getListadoOficial()
    {
        return $this->listadoOficial;
    }

    /**
     * Set nombreLargoInsumo
     *
     * @param string $nombreLargoInsumo
     *
     * @return CtlInsumo
     */
    public function setNombreLargoInsumo($nombreLargoInsumo)
    {
        $this->nombreLargoInsumo = $nombreLargoInsumo;

        return $this;
    }

    /**
     * Get nombreLargoInsumo
     *
     * @return string
     */
    public function getNombreLargoInsumo()
    {
        return $this->nombreLargoInsumo;
    }

    /**
     * Set registroSchema
     *
     * @param \DateTime $registroSchema
     *
     * @return CtlInsumo
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
     * @return CtlInsumo
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
     * Set detalleInsumo
     *
     * @param string $detalleInsumo
     *
     * @return CtlInsumo
     */
    public function setDetalleInsumo($detalleInsumo)
    {
        $this->detalleInsumo = $detalleInsumo;

        return $this;
    }

    /**
     * Get detalleInsumo
     *
     * @return string
     */
    public function getDetalleInsumo()
    {
        return $this->detalleInsumo;
    }

    /**
     * Set costoInsumo
     *
     * @param float $costoInsumo
     *
     * @return CtlInsumo
     */
    public function setCostoInsumo($costoInsumo)
    {
        $this->costoInsumo = $costoInsumo;

        return $this;
    }

    /**
     * Get costoInsumo
     *
     * @return float
     */
    public function getCostoInsumo()
    {
        return $this->costoInsumo;
    }

    /**
     * Set grupoid
     *
     * @param \Minsal\CoreBundle\Entity\CtlGrupo $grupoid
     *
     * @return CtlInsumo
     */
    public function setGrupoid(\Minsal\CoreBundle\Entity\CtlGrupo $grupoid = null)
    {
        $this->grupoid = $grupoid;

        return $this;
    }

    /**
     * Get grupoid
     *
     * @return \Minsal\CoreBundle\Entity\CtlGrupo
     */
    public function getGrupoid()
    {
        return $this->grupoid;
    }

    /**
     * Add ctlEstablecimientoid
     *
     * @param \Minsal\CoreBundle\Entity\CtlEstablecimiento $ctlEstablecimientoid
     *
     * @return CtlInsumo
     */
    public function addCtlEstablecimientoid(\Minsal\CoreBundle\Entity\CtlEstablecimiento $ctlEstablecimientoid)
    {
        $this->ctlEstablecimientoid[] = $ctlEstablecimientoid;

        return $this;
    }

    /**
     * Remove ctlEstablecimientoid
     *
     * @param \Minsal\CoreBundle\Entity\CtlEstablecimiento $ctlEstablecimientoid
     */
    public function removeCtlEstablecimientoid(\Minsal\CoreBundle\Entity\CtlEstablecimiento $ctlEstablecimientoid)
    {
        $this->ctlEstablecimientoid->removeElement($ctlEstablecimientoid);
    }

    /**
     * Get ctlEstablecimientoid
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCtlEstablecimientoid()
    {
        return $this->ctlEstablecimientoid;
    }

    /**
     * Add establecimiento
     *
     * @param \Minsal\CoreBundle\Entity\CtlEstablecimiento $establecimiento
     *
     * @return CtlInsumo
     */
    public function addEstablecimiento(\Minsal\CoreBundle\Entity\CtlEstablecimiento $establecimiento)
    {
        $this->establecimiento[] = $establecimiento;

        return $this;
    }

    /**
     * Remove establecimiento
     *
     * @param \Minsal\CoreBundle\Entity\CtlEstablecimiento $establecimiento
     */
    public function removeEstablecimiento(\Minsal\CoreBundle\Entity\CtlEstablecimiento $establecimiento)
    {
        $this->establecimiento->removeElement($establecimiento);
    }

    /**
     * Get establecimiento
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEstablecimiento()
    {
        return $this->establecimiento;
    }

    /**
     * Add componente
     *
     * @param \Minsal\CoreBundle\Entity\CtlComponente $componente
     *
     * @return CtlInsumo
     */
    public function addComponente(\Minsal\CoreBundle\Entity\CtlComponente $componente)
    {
        $this->componente[] = $componente;

        return $this;
    }

    /**
     * Remove componente
     *
     * @param \Minsal\CoreBundle\Entity\CtlComponente $componente
     */
    public function removeComponente(\Minsal\CoreBundle\Entity\CtlComponente $componente)
    {
        $this->componente->removeElement($componente);
    }

    /**
     * Get componente
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getComponente()
    {
        return $this->componente;
    }
}
