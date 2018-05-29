<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/** 
 *
 * @ORM\Table(name="Klant")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\klantRepository")
 */
class Klant
{

    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(name="klantnummer", type="integer", unique=true)
     */
    private $klantnummer;

    /**
     * @var string
     *
     * @ORM\Column(name="voornaam", type="string", length=35)
     */
    private $voornaam;

    /**
     * @var string
     *
     * @ORM\Column(name="achternaam", type="string", length=35)
     */
    private $achternaam;

    /**
     * @var string
     *
     * @ORM\Column(name="woonplaats", type="string", length=35)
     */
    private $woonplaats;

    /**
     * @var string
     *
     * @ORM\Column(name="telefoonnummer", type="string", length=100)
     */
    private $telefoonnummer;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=35)
     */
    private $email;


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
     * Set klantnummer
     *
     * @param integer $klantnummer
     *
     * @return klant
     */
    public function setKlantnummer($klantnummer)
    {
        $this->klantnummer = $klantnummer;
    
        return $this;
    }

    /**
     * Get klantnummer
     *
     * @return integer
     */
    public function getKlantnummer()
    {
        return $this->klantnummer;
    }

    /**
     * Set voornaam
     *
     * @param string $voornaam
     *
     * @return klant
     */
    public function setVoornaam($voornaam)
    {
        $this->voornaam = $voornaam;
    
        return $this;
    }

    /**
     * Get voornaam
     *
     * @return string
     */
    public function getVoornaam()
    {
        return $this->voornaam;
    }

    /**
     * Set achternaam
     *
     * @param string $achternaam
     *
     * @return klant
     */
    public function setAchternaam($achternaam)
    {
        $this->achternaam = $achternaam;
    
        return $this;
    }

    /**
     * Get achternaam
     *
     * @return string
     */
    public function getAchternaam()
    {
        return $this->achternaam;
    }

    /**
     * Set woonplaats
     *
     * @param string $woonplaats
     *
     * @return klant
     */
    public function setWoonplaats($woonplaats)
    {
        $this->woonplaats = $woonplaats;
    
        return $this;
    }

    /**
     * Get woonplaats
     *
     * @return string
     */
    public function getWoonplaats()
    {
        return $this->woonplaats;
    }

    /**
     * Set telefoonnummer
     *
     * @param string $telefoonnummer
     *
     * @return klant
     */
    public function setTelefoonnummer($telefoonnummer)
    {
        $this->telefoonnummer = $telefoonnummer;
    
        return $this;
    }

    /**
     * Get telefoonnummer
     *
     * @return string
     */
    public function getTelefoonnummer()
    {
        return $this->telefoonnummer;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return klant
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
}
?>
