<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Table;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\Common\Collections\ArrayCollection;

class Artikelinformatie
{
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
}