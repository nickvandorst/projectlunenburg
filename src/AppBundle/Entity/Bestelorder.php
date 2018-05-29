<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Table;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Bestelorder
 *
 * @ORM\Table(name="bestelorder")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BestelorderRepository")
 */
class Bestelorder
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(name="bestelordernummer", type="integer")
     */
    private $bestelordernummer;

    /**
     * @var string
     *
     * @ORM\Column(name="naamleverancier", type="string", length=6)
     */
    private $naamleverancier;

    /**
     * @var string
     * @ORM\Id
     * @ORM\Column(name="artikelnummer", type="string", length=35, unique=true)
     * @Assert\Length(
     *      min = 10,
     *      max = 10,
     *      minMessage = "artikelnummer moet 10 karakters hebben",
     *      maxMessage = "artikelnummer moet 10 karakters hebben"
     *)
     */
    private $artikelnummer;

    /**
     * @var string
     *
     * @ORM\Column(name="omschrijving", type="string", length=35)
     */
    private $omschrijving;

    /**
     * @var int
     *
     * @ORM\Column(name="hoeveelheid", type="integer")
     */
    private $hoeveelheid;

    /**
     * Set bestelordernummer
     *
     * @param integer $bestelordernummer
     *
     * @return Bestelorder
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
     * Set naamleverancier
     *
     * @param string $naamleverancier
     *
     * @return Bestelorder
     */
    public function setNaamleverancier($naamleverancier)
    {
        $this->naamleverancier = $naamleverancier;
    
        return $this;
    }

    /**
     * Get naamleverancier
     *
     * @return string
     */
    public function getNaamleverancier()
    {
        return $this->naamleverancier;
    }

    /**
     * Set artikelnummer
     *
     * @param string $artikelnummer
     *
     * @return Bestelorder
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
     * Set omschrijving
     *
     * @param string $omschrijving
     *
     * @return Bestelorder
     */
    public function setOmschrijving($omschrijving)
    {
        $this->omschrijving = $omschrijving;
    
        return $this;
    }

    /**
     * Get omschrijving
     *
     * @return string
     */
    public function getOmschrijving()
    {
        return $this->omschrijving;
    }

    /**
     * Set hoeveelheid
     *
     * @param integer $hoeveelheid
     *
     * @return Bestelorder
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

