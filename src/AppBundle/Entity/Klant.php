<?php

//src/AppBundle/Entity/Klant.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="Klant")
*/

class Klant {

  /**
  * @ORM\Id
  * @ORM\Column(name="klantnummer")
  */

  private $klantnummer;

/**
* @ORM\Column(name="voornaam")
*/

  private $voornaam;

  /**
  * @ORM\Column(name="achternaam")
  */

  private $achternaam;

  /**
  * @ORM\Column(name="woonplaats")
  */

  private $woonplaats;

  /**
  * @ORM\Column(name="telefoonnummer")
  */

  private $telefoonnummer;

  /**
  * @ORM\Column(name="email")
  */

  private $email;

public function setKlantnummer($klantnummer) {
  $this->klantnummer = $klantnummer;
}

public function getKlantnummer() {
  return $this->klantnummer;
}

public function setVoornaam($voornaam) {
  $this->voornaam = $voornaam;
}

public function getVoornaam() {
  return $this->voornaam;
}

public function setAchternaam($achternaam) {
  $this->achternaam = $achternaam;
}

public function getAchternaam() {
  return $this->achternaam;
}

public function setWoonplaats($woonplaats) {
  $this->woonplaats = $woonplaats;
}

public function getWoonplaats() {
  return $this->woonplaats;
}

public function setTelefoonnummer($telefoonnummer) {
  $this->telefoonnummer = $telefoonnummer;
}

public function getTelefoonnummer() {
  return $this->telefoonnummer;
}

public function setEmail($email) {
  $this->email = $email;
}

public function getEmail($email) {
  return $this->email;
}

}

?>
