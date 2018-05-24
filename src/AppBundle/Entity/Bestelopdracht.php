<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Table;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @ORM\Table(name="Bestelopdracht")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\artikelRepository")
 * @UniqueEntity(fields={"artikelnummer"}, message="Dit artikelnummer bestaat al.")
 */
// test
class Bestelopdracht
{
    /**
     * @var int
     * @ORM\OneToMany(targetEntity="Bestelregel", mappedBy="artikel")
     */
    Public $bestelregels;

    /**
     * @var varchar
     * @ORM\Column(name="naamleverancier", type="string", length=6)
     */
    Private $naamleverancier;

    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(name="bestelordernummer", type="integer", length=10, unique=true)
     */
    Private $bestelordernummer;

    /**
     * @var varchar
     * @ORM\Column(name="artikelnummer", type="string", length=10)
     */
    Private $artikelnummer;

    /**
     * @var varchar
     * @ORM\Column(name="omschrijving", type="string", length=35)
     */
    Private $omschrijving;

    /**
     * @var integer
     * @ORM\Column(name="hoeveelheid", type="integer", length=3)
     */
    Private $hoeveelheid;

    /**
     * Set bestelregels
     * @param integer $bestelregels
     *
     * @return artikel
     */
    Public function setBestelregels($bestelregels)
    {
        $this->bestelregels = $bestelregels;

        Return $this;
    }

    /**
     * Get bestelregels
     *
     * @return integer
     */
    Public function getBestelregels()
    {
        return $this->bestelregels;
    }
    /**
     * Set naamleverancier
     * @param varchar $naamleverancier
     *
     * @return bestelopdracht
     */
    Public function setNaamleverancier ($naamleverancier)
    {
        $this->naamleverancier = $naamleverancier;

        Return $this;
    }

    /**
     * Get naamleverancier
     *
     * @return varchar
     */
    Public function getNaamleverancier()
    {
        Return $this->naamleverancier;
    }
    /**
     * Set bestelordernummer
     * @param integer $bestelordernummer
     *
     * @return bestelopdracht
     */
    Public function setBestelordernummer ($bestelordernummer)
    {
        $this->bestelordernummer = $bestelordernummer;

        Return $this;
    }

    /**
     * Get bestelordernummer
     *
     * @return integer
     */
    Public function getBestelordernummer()
    {
        Return $this->bestelordernummer;
    }

    /**
     * Set artikelnummer
     * @param varchar $artikelnummer
     *
     * @return bestelopdracht
     */
    Public function setArtikelnummer ($artikelnummer)
    {
        $this->artikelnummer = $artikelnummer;

        Return $this;
    }

    /**
     * Get artikelnummer
     *
     * @return varchar
     */
    Public function getArtikelnummer()
    {
        Return $this->artikelnummer;
    }

    /**
     * Set omschrijving
     * @param varchar $omschrijving
     *
     * @return bestelopdracht
     */
    Public function setOmschrijving ($omschrijving)
    {
        $this->omschrijving = $omschrijving;

        Return $this;
    }

    /**
     * Get omschrijving
     *
     * @return varchar
     */
    Public function getOmschrijving()
    {
        Return $this->omschrijving;
    }

    /**
     * Set hoeveelheid
     * @param integer
     *
     * @return bestelopdracht
     */
    Public function setHoeveelheid ($hoeveelheid)
    {
        $this->hoeveelheid = $hoeveelheid;

        Return $this;
    }

    /**
     * Get hoeveelheid
     *
     * @return integer
     */
    Public function getHoeveelheid()
    {
        Return $this->hoeveelheid;
    }

    Public function __construct()
    {   $bestelregels = new ArrayCollection();
    }
}

?>