<?php

//src/AppBundle/Entity/Gebruiker.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="Gebruiker")
*/

class Gebruiker {

  /**
  * @ORM\Id
  * @ORM\Column(name="gebruikersnaam")
  */

  private $gebruikersnaam;

/**
* @ORM\Column(name="wachtwoord")
*/

  private $wachtwoord;

  /**
  * @ORM\Column(name="ID")
  */

  private $ID;

  /**
  * @ORM\Column(name="functie")
  */

  private $functie;

  public function setGebruikersnaam($gebruikersnaam) {
    $this->gebruikersnaam = $gebruikersnaam;
  }

  public function getGebruikersnaam() {
    return $this->gebruikersnaam;
  }

  public function setWachtwoord($wachtwoord) {
    $this->wachtwoord = $wachtwoord;
  }

  public function getWachtwoord() {
    return $this->wachtwoord;
  }

  public function setID($ID) {
    $this->ID = $ID;
  }

  public function getID() {
    return $this->ID;
  }

?>
