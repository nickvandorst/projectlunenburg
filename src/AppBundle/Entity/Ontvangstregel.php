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
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $regelid;

    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="Goederenontvangst", inversedBy="goederen")
     * @ORM\Column(name="goederenontvangstid", type="integer", unique=true)
     */
    private $goederenontvangstid;

    /**
     * @var string
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Artikel", inversedBy="artikelen")
     * @ORM\JoinColumn(name="artikel", referencedColumnName="artikelnummer", type="string", length=10, unique=true)
     */
    private $artikelid;

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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
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
     * Set artikelid
     *
     * @param string $artikelid
     *
     * @return Ontvangstregel
     */
    public function setArtikelid($artikelid)
    {
        $this->artikelid = $artikelid;

        return $this;
    }

    /**
     * Get artikelid
     *
     * @return string
     */
    public function getArtikelid()
    {
        return $this->artikelid;
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
