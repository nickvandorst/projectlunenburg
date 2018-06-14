<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Bestelregel
 *
 * @ORM\Table(name="bestelregel")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BestelregelRepository")
 */
class Bestelregel
{

    /**
     * @var string
     *
     * @ORM\Column(name="artikelnummer", length=10, unique=true)
     * @ORM\Id
     * @Assert\Length(
     *      min = 10,
     *      max = 10,
     *      minMessage = "artikelnummer moet 10 karakters hebben",
     *      maxMessage = "artikelnummer moet 10 karakters hebben"
     *)
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
     * @ORM\Column(type="integer")
     * @ORM\ManyToOne(targetEntity="Bestelorder", inversedBy="bestelorders")
     * @ORM\JoinColumn(name="bestelordernummer", referencedColumnName="bestelordernummer")
     * @ORM\Id
     */
    private $bestelordernummer;

    /**
     * @var integer
     *
     * @ORM\Column(name="keuringseisen", type="integer", nullable=true)
     */
    private $keuringseisen;

    private $bestelorder;


    /**
     * Set bestelorder
     *
     * @param integer $bestelorder
     *
     * @return Bestelregel
     */
    public function setBestelorder($bestelorder)
    {
        $this->bestelorder = $bestelorder;

        return $this;
    }

    /**
     * Get bestelorder
     *
     * @return integer
     */
    public function getBestelorder()
    {
        return $this->bestelorder;
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
     * @param integer $bestelordernummer
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
     * @return integer
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


    /**
     * Set keuringseisen
     *
     * @param string $keuringseisen
     *
     * @return Bestelregel
     */
    public function setKeuringseisen($keuringseisen)
    {
        $this->keuringseisen = $keuringseisen;
    }

    /**

     * Get keuringseisen
     *
     * @return string
     */
    public function getKeuringseisen()
    {
        return $this->keuringseisen;
    }

}

