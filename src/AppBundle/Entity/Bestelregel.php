<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bestelregel
 *
 * @ORM\Table(name="bestelregel")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BestelregelRepository")
 */
class Bestelregel
{
    /**
     * @var int
     *
     * @ORM\Column(name="bestelregelid", type="integer")
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Bestelorder", inversedBy="bestelorders")
     */
    private $bestelregelid;

    /**
     * @var string
     *
     * @ORM\Column(name="artikelnummer", type="string", length=10, unique=true)
     */
    private $artikelnummer;

    /**
     * @var int
     *
     * @ORM\Column(name="hoeveelheid", type="integer", nullable=true)
     */
    private $hoeveelheid;

    /*
     * @ORM\ManyToOne(targetEntity="Artikel", inversedBy="artikelen")
     */
    private $bestelregels;

    /**
     * Set bestelregelid
     *
     * @param string $bestelregelid
     *
     * @return Bestelregel
     */
    public function setBestelregelid($bestelregelid)
    {
        $this->bestelregelid = $bestelregelid;

        return $this;
    }

    /**
     * Get bestelregelid
     *
     * @return integer
     */
    public function getBestelregelid()
    {
        return $this->bestelregelid;
    }

    /**
     * Set artikelnummer
     *
     * @param string $artikelnummer
     *
     * @return Bestelregel
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
     * Set bestelordernummer
     *
     * @param string $bestelordernummer
     *
     * @return Bestelregel
     */
    public function setBestelordernummer($bestelordernummer)
    {
        $this->bestelordernummer = $bestelordernummer;

        return $this;
    }

    /**
     * Get bestelordernummer
     *
     * @return string
     */
    public function getBestelordernummer()
    {
        return $this->bestelordernummer;
    }

    /**
     * Set hoeveelheid
     *
     * @param integer $hoeveelheid
     *
     * @return Bestelregel
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
}
