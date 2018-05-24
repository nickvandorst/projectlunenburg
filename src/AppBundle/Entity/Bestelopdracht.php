<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @ORM\Table(name="Bestelopdract")
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
     */
    Private $naamleverancier;

    /**
     * @var integer
     * @ORM/Id
     */
    Private $bestelordernummer;

    /**
     * @var varchar
     */
    Private $artikelnummers;

    /**
     * @var varchar
     */
    Private $omschrijving;

    /**
     * @var integer
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
     * Set artikelnummers
     * @param varchar $artikelnummers
     *
     * @return bestelopdracht
     */
    Public function setArtikelnummers ($artikelnummers)
    {
        $this->artikelnummers = $artikelnummers;

        Return $this;
    }

    /**
     * Get artikelnummers
     *
     * @return varchar
     */
    Public function getArtikelnummers()
    {
        Return $this->artikelnummers;
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