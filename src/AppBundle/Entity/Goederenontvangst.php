<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Table(name="goederenontvangst")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GoederenontvangstRepository")
 */
class Goederenontvangst
{
  /**
   * @var int
   * @ORM\Column(type="integer",)
   *
   * @ORM\Id
   */
  private $id;
    /**
     * @var date
     * @ORM\Column(name="ontvangstdatum", type="date", unique=false)
     */
    private $ontvangstdatum;

    /**
     * @var string
     *
     * @ORM\Column(name="omschrijving", type="string")
     */
    private $omschrijving;

    /**
     * @var int
     *
     * @ORM\Column(name="hoeveelheid", type="integer", length=11)
     */
    private $hoeveelheid;

    /**
     * @var string
     *
     * @ORM\Column(name="keuringscode", type="string", length=10)
     */
    private $keuringscode;

    /**
     * @var string
     *
     * @ORM\Column(name="artikelnummer", type="string", length=10)
     * 
     */
    private $artikelnummer;

    /**
     * @var string
     *
     * @ORM\Column(name="naamleverancier", type="string", length=6)
     */
    private $naamleverancier;


    /**
     * Set Id
     *
     * @param int $Id
     *
     * @return goederenontvangst
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get Id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Get ontvangstdatum
     *
     * @return date
     */
    public function getOntvangstdatum()
    {
        return $this->ontvangstdatum;
    }

    /**
     * Set ontvangstdatuma
     *
     * @param date $ontvangstdatum
     *
     * @return goederenontvangst
     */
    public function setOntvangstdatum($ontvangstdatum)
    {
        $this->ontvangstdatum = $ontvangstdatum;

        return $this;
    }

    /**
     * Get omschrijving
     *
     * @return text
     */
    public function getOmschrijving()
    {
        return $this->omschrijving;
    }

    /**
     * Set omschrijving
     *
     * @param text $omschrijving
     *
     * @return goederenontvangst
     */
    public function setOmschrijving($omschrijving)
    {
        $this->omschrijving = $omschrijving;

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

    /**
     * Set hoeveelheid
     *
     * @param int $hoeveelheid
     *
     * @return goederenontvangst
     */
    public function setHoeveelheid($hoeveelheid)
    {
        $this->hoeveelheid = $hoeveelheid;

        return $this;
    }

    /**
     * Get keuringscode
     *
     * @return string
     */
    public function getKeuringscode()
    {
        return $this->keuringscode;
    }

    /**
     * Set keuringscode
     *
     * @param string $keuringcode
     *
     * @return goederenontvangst
     */
    public function setKeuringscode($keuringscode)
    {
        $this->keuringscode = $keuringscode;

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
     * Set artikelnummer
     *
     * @param string $artikelnummer
     *
     * @return goederenontvangst
     */
    public function setArtikelnummer($artikelnummer)
    {
        $this->artikelnummer = $artikelnummer;

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
     * Set naamleverancier
     *
     * @param string $naamleverancier
     *
     * @return goederenontvangst
     */
    public function setNaamleverancier($naamleverancier)
    {
        $this->naamleverancier = $naamleverancier;

        return $this;
    }

}
?>
