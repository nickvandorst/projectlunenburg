<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

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
     * @ORM\Id
     * @ORM\Column(name="gebruikersnaam", type="string", length=64, unique=true)
     */
    private $gebruikersnaam;

    /**
     * @var string
     *
     * @ORM\Column(name="wachtwoord", type="string", length=20)
     */
    private $wachtwoord;

    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="integer")
     */
    private $ID;

    /**
     * @var string
     *
     * @ORM\Column(name="functie", type="string", length=54)
     */
    private $functie;


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
     * Set iD
     *
     * @param integer $iD
     *
     * @return Gebruiker
     */
    public function setID($iD)
    {
        $this->iD = $iD;

        return $this;
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
}

?>
