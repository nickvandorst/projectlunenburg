<?php
//src/AppBundle/Entity/Artikel.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="Artikel")
*/

class Artikel {

  /**
  * @ORM\Id
  * @ORM\Column(name="artikelnummer")
  */

  private $artikelnummer;

/**
* @ORM\Column(name="omschrijving")
*/

  private $omschrijving;

  private $technischespecificaties;

  /**
  * @ORM\Column(name="magazijnlocatie")
  */

  private $magazijnlocatie;

  /**
  * @ORM\Column(name="inkoopprijs")
  */

  private $inkoopprijs;

  private $codevervangendartikel;

  private $minimumvoorraad;

  /**
  * @ORM\Column(name="voorraadaantal")
  */

  private $voorraadaantal;

  private $bestelserie;


  public function setArtikelnummer($artikelnummer) {
    $this->artikelnummer = $artikelnummer;
  }

  public function getArtikelnummer() {
    return $this->artikelnummer;
  }

  public function setOmschrijving($omschrijving) {
    $this->omschrijving = $omschrijving;
  }

  public function getOmschrijving() {
    return $this->omschrijving;
  }

  public function setTechnischespecificaties($technischespecificaties) {
    $this->technischespecificaties = $technischespecificaties;
  }

  public function getTechnischespecificaties() {
    return $this->technischespecificaties;
  }

  public function setMagazijnlocatie($magazijnlocatie) {
    $this->magazijnlocatie = $magazijnlocatie;
  }

  public function getMagazijnlocatie() {
    return $this->magazijnlocatie;
  }

  public function setInkoopprijs($inkoopprijs) {
    $this->inkoopprijs = $inkoopprijs;
  }

  public function getInkoopprijs() {
    return $this->inkoopprijs;
  }

  public function setCodevervangendartikel($codevervangendartikel) {
    $this->codevervangendartikel = $codevervangendartikel;
  }

  public function getCodevervangendartikel() {
    return $this->codevervangendartikel;
  }

  public function setMinimumvoorraad($minimumvoorraad) {
    $this->minmumvoorraad = $minimumvoorraad;
  }

  public function getMinimumvoorraad() {
    return $this->minimumvoorraad;
  }

  public function setVoorraadaantal($voorraadaantal) {
    $this->voorraadaantal = $voorraadaantal;
  }

  public function getVoorraadaantal() {
    return $this->voorraadaantal;
  }

  public function setBestelserie($bestelserie) {
    $this->bestelserie = $bestelserie;
  }

  public function getBestelserie() {
    return $this->bestelserie;
  }

}

?>
