<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gebruiker
 *
 * @ORM\Table(name="gebruiker")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GebruikerRepository")
 */
class Gebruiker
{

    /**
     * @var string
     *
     * @ORM\Column(name="wachtwoord", type="string", length=20)
     */
    private $wachtwoord;

    /**
     * @var string
     *
     * @ORM\Column(name="functie", type="string", length=50)
     */
    private $functie;

    /**
     * @var string
     * @ORM\Id
     * @ORM\Column(name="gebruikersnaam", type="string",unique=true, length=64)
     */
    private $gebruikersnaam;

    /**
     * Set wachtwoord
     *
     * @param string $wachtwoord
     *
     * @return Gebruiker
     */
    public function setWachtwoord($wachtwoord)
    {
        $this->wachtwoord = $wachtwoord;
    
        return $this;
    }

    /**
     * Get wachtwoord
     *
     * @return string
     */
    public function getWachtwoord()
    {
        return $this->wachtwoord;
    }

    /**
     * Set functie
     *
     * @param string $functie
     *
     * @return Gebruiker
     */
    public function setFunctie($functie)
    {
        $this->functie = $functie;
    
        return $this;
    }

    /**
     * Get functie
     *
     * @return string
     */
    public function getFunctie()
    {
        return $this->functie;
    }

    /**
     * Set gebruikersnaam
     *
     * @param string $gebruikersnaam
     *
     * @return Gebruiker
     */
    public function setGebruikersnaam($gebruikersnaam)
    {
        $this->gebruikersnaam = $gebruikersnaam;
    
        return $this;
    }

    /**
     * Get gebruikersnaam
     *
     * @return string
     */
    public function getGebruikersnaam()
    {
        return $this->gebruikersnaam;
    }
}

