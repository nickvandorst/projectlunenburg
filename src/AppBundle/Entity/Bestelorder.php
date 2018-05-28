<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Table;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @ORM\Table(name="bestelorder")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\artikelRepository")
 * @UniqueEntity(fields={"artikelnummer"}, message="Dit artikelnummer bestaat al.")
 */
// test
class Bestelorder
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
 * @ORM\Column(name="artikelinformatie")
 */
    Private $artikelinformatie;

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
     * @return bestelorder
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
     * @return bestelorder
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
     * Set artikelinformatie
     * @param varchar $artikelinformatie
     *
     * @return bestelorder
     */
    Public function setArtikelinformatie ($artikelinformatie)
    {
        $this->artikelinformatie = $artikelinformatie;

        Return $this;
    }

    /**
     * Get artikelinformatie
     *
     * @return varchar
     */
    Public function getArtikelinformatie()
    {
        Return $this->artikelinformatie;
    }

    Public function __construct()
    {   $bestelregels = new ArrayCollection();
    }
}

?>