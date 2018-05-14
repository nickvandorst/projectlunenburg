<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 
 *
 * @ORM\Table(name="Artikel")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\artikelRepository")
 */
class Artikel
{
    /**
     * @var string
     * @ORM\Id
     * @ORM\Column(name="artikelnummer", type="string", length=35, unique=true)
     */
    private $artikelnummer;

    /**
     * @var string
     *
     * @ORM\Column(name="codevervangendartikel", type="string", length=35, nullable=true)
     */
    private $codevervangendartikel;

    /**
     * @var int
     *
     * @ORM\Column(name="inkoopprijs", type="integer")
     */
    private $inkoopprijs;

    /**
     * @var int
     *
     * @ORM\Column(name="bestelserie", type="integer", nullable=true)
     */
    private $bestelserie;

    /**
     * @var string
     *
     * @ORM\Column(name="magazijnlocatie", type="string", length=35)
     */
    private $magazijnlocatie;

    /**
     * @var int
     *
     * @ORM\Column(name="minimumvoorraad", type="integer")
     */
    private $minimumvoorraad;

    /**
     * @var string
     *
     * @ORM\Column(name="omschrijving", type="string", length=35, nullable=true)
     */
    private $omschrijving;

    /**
     * @var string
     *
     * @ORM\Column(name="technischespecificaties", type="string", length=35, nullable=true)
     */
    private $technischespecificaties;

    /**
     * @var int
     *
     * @ORM\Column(name="voorraadaantal", type="integer")
     */
    private $voorraadaantal;


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
     * Set artikelnummer
     *
     * @param string $artikelnummer
     *
     * @return artikel
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
     * Set codevervangendartikel
     *
     * @param string $codevervangendartikel
     *
     * @return artikel
     */
    public function setCodevervangendartikel($codevervangendartikel)
    {
        $this->codevervangendartikel = $codevervangendartikel;
    
        return $this;
    }

    /**
     * Get codevervangendartikel
     *
     * @return string
     */
    public function getCodevervangendartikel()
    {
        return $this->codevervangendartikel;
    }

    /**
     * Set inkoopprijs
     *
     * @param integer $inkoopprijs
     *
     * @return artikel
     */
    public function setInkoopprijs($inkoopprijs)
    {
        $this->inkoopprijs = $inkoopprijs;
    
        return $this;
    }

    /**
     * Get inkoopprijs
     *
     * @return integer
     */
    public function getInkoopprijs()
    {
        return $this->inkoopprijs;
    }

    /**
     * Set bestelserie
     *
     * @param integer $bestelserie
     *
     * @return artikel
     */
    public function setBestelserie($bestelserie)
    {
        $this->bestelserie = $bestelserie;
    
        return $this;
    }

    /**
     * Get bestelserie
     *
     * @return integer
     */
    public function getBestelserie()
    {
        return $this->bestelserie;
    }

    /**
     * Set magazijnlocatie
     *
     * @param string $magazijnlocatie
     *
     * @return artikel
     */
    public function setMagazijnlocatie($magazijnlocatie)
    {
        $this->magazijnlocatie = $magazijnlocatie;
    
        return $this;
    }

    /**
     * Get magazijnlocatie
     *
     * @return string
     */
    public function getMagazijnlocatie()
    {
        return $this->magazijnlocatie;
    }

    /**
     * Set minimumvoorraad
     *
     * @param integer $minimumvoorraad
     *
     * @return artikel
     */
    public function setMinimumvoorraad($minimumvoorraad)
    {
        $this->minimumvoorraad = $minimumvoorraad;
    
        return $this;
    }

    /**
     * Get minimumvoorraad
     *
     * @return integer
     */
    public function getMinimumvoorraad()
    {
        return $this->minimumvoorraad;
    }

    /**
     * Set omschrijving
     *
     * @param string $omschrijving
     *
     * @return artikel
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
     * Set technischespecificaties
     *
     * @param string $technischespecificaties
     *
     * @return artikel
     */
    public function setTechnischespecificaties($technischespecificaties)
    {
        $this->technischespecificaties = $technischespecificaties;
    
        return $this;
    }

    /**
     * Get technischespecificaties
     *
     * @return string
     */
    public function getTechnischespecificaties()
    {
        return $this->technischespecificaties;
    }

    /**
     * Set voorraadaantal
     *
     * @param integer $voorraadaantal
     *
     * @return artikel
     */
    public function setVoorraadaantal($voorraadaantal)
    {
        $this->voorraadaantal = $voorraadaantal;
    
        return $this;
    }

    /**
     * Get voorraadaantal
     *
     * @return integer
     */
    public function getVoorraadaantal()
    {
        return $this->voorraadaantal;
    }
}

