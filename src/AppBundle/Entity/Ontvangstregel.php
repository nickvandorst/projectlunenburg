<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ontvangstregel
 *
 * @ORM\Table(name="ontvangstregel")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OntvangstregelRepository")
 */
class Ontvangstregel
{
    /**
     * @var int
     *
     * @ORM\Column(name="regelid", type="integer")
     */
    private $regelid;

    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="Goederenontvangst", inversedBy="goederen")
     * @ORM\Column(name="goederenontvangstid", type="integer", unique=true, nullable=true)
     */
    private $goederenontvangstid;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="Artikel", inversedBy="artikelen")
     * @ORM\Column(name="artikelnummer", unique=true)
     */
    private $artikelnummer;

    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(name="hoeveelheid", type="integer")
     */
    private $hoeveelheid;

    /**
     * @var string
     *
     * @ORM\Column(name="kwaliteit", type="string", length=11)
     */
    private $kwaliteit;

    /**
     * Get regelid
     *
     * @return integer
     */
    public function getRegelid()
    {
        return $this->regelid;
    }

    /**
     * Set regelid
     *
     * @param integer $regelid
     *
     * @return Ontvangstregel
     */
    public function setRegelid($regelid)
    {
        $this->regelid = $regelid;

        return $this;
    }

    /**
     * Set goederenontvangstid
     *
     * @param integer $goederenontvangstid
     *
     * @return Ontvangstregel
     */
    public function setGoederenontvangstid($goederenontvangstid)
    {
        $this->goederenontvangstid = $goederenontvangstid;

        return $this;
    }

    /**
     * Get goederenontvangstid
     *
     * @return integer
     */
    public function getGoederenontvangstid()
    {
        return $this->goederenontvangstid;
    }

    /**
     * Set artikelnummer
     *
     * @param string $artikelnummer
     *
     * @return Ontvangstregel
     */
    public function setArtikelnummer($artikelnummer)
    {
        $this->artikelnummer = $artikelnummer;

        return $this;
    }

    /**
     * Get artikelnummer
     *
     * @return string
     */
    public function getArtikelnummer()
    {
        return $this->artikelnummer;
    }

    /**
     * Set hoeveelheid
     *
     * @param integer $hoeveelheid
     *
     * @return Ontvangstregel
     */
    public function setHoeveelheid($hoeveelheid)
    {
        $this->hoeveelheid = $hoeveelheid;

        return $this;
    }

    /**
     * Get hoeveelheid
     *
     * @return integer
     */
    public function getHoeveelheid()
    {
        return $this->hoeveelheid;
    }

    /**
     * Set kwaliteit
     *
     * @param string $kwaliteit
     *
     * @return Ontvangstregel
     */
    public function setKwaliteit($kwaliteit)
    {
        $this->kwaliteit = $kwaliteit;

        return $this;
    }

    /**
     * Get kwaliteit
     *
     * @return string
     */
    public function getKwaliteit()
    {
        return $this->kwaliteit;
    }

}
