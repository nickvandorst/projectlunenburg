<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @ORM\Table(name="artikel")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\artikelRepository")
 * @UniqueEntity(fields={"artikelnummer"}, message="Dit artikelnummer bestaat al.")
 */
class Artikel
{
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

    protected $artikelnummer;

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
     * @ORM\Column(name="bestelserie", type="integer")
     */
    private $bestelserie;

    /**
     * @var string
     *
     * @ORM\Column(name="Magazijnlocatie", type="string", length=6)
     * @Assert\Regex(
     *    pattern = "/^20|[0-1]{1}[0-9]{1}\/[A-Z][0]{1}[0-9]{1}|10$/i",
     *    match=true,
     *    message="Ongeldige locatie [ERROR1]")
     * @Assert\Regex(
     *    pattern = "/^[2]{1}[1-9]{1}\/[A-Z]{1}[0-9]{1}$/i",
     *    match=false,
     *    message="Ongeldige locatie [ERROR2]")
     * @Assert\Regex(
     *    pattern = "/^[3-9]{1}[0-9]{1}\/[A-Z][0-9]{1}$/i",
     *    match=false,
     *    message="Ongeldige locatie [ERROR3]")
     * @Assert\Regex(
     *    pattern = "/^[0-1]{1}[0-9]{1}\/[A-Z][1]{1}[1-9]{1}$/i",
     *    match=false,
     *    message="Ongeldige locatie [ERROR4]")
     * @Assert\Regex(
     *    pattern = "/^[0-1]{1}[0-9]{1}\/[A-Z][2-9]{1}[0-9]{1}$/i",
     *    match=false,
     *    message="Ongeldige locatie [ERROR5]")
     * @Assert\Regex(
     *    pattern = "/^[0-9A-Za-z]+$/i",
     *    match=false,
     *    message="Ongeldige locatie [ERROR6]")
     * @Assert\Length(
     *      max = 6,
     *      maxMessage = "Mag niet meer zijn dan {{ limit }} karakters"
     * )
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
     * @ORM\Column(name="vrijevoorraad", type="integer")
     */
    private $vrijevoorraad;

    /**
     * @ORM\OneToMany(targetEntity="Ontvangstregel", mappedBy="artikel")
     */
    private $artikelen;

    /**
     * @var string
     *
     * @ORM\Column(name="inassortiment", type="string", length=3, nullable=false)
     */
    private $inassortiment;

    /**
     * @var int
     *
     * @ORM\Column(name="technischevoorraad", type="integer")
     */
    private $technischevoorraad;

    /**
     * @var int
     *
     * @ORM\Column(name="gereserveerdevoorraad", type="integer")
     */
    private $gereserveerdevoorraad;

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
     * Set vrijevoorraad
     *
     * @param integer $vrijevoorraad
     *
     * @return artikel
     */
    public function setVrijeVoorraad($vrijevoorraad)
    {
        $this->vrijevoorraad = $vrijevoorraad;

        return $this;
    }

    /**
     * Get vrijevoorraad
     *
     * @return integer
     */
    public function getVrijeVoorraad()
    {
        return $this->vrijevoorraad;
    }

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
    Public function __construct()
    {   $bestelregels = new ArrayCollection();
    }
    /**
     * Get inassortiment
     *
     * @return string
     */
    public function getinassortiment()
    {
        return $this->inassortiment;
    }

    /**
     * Set inassortiment
     *
     * @param string $inassortiment
     *
     * @return artikel
     */
    public function setInassortiment($inassortiment)
    {
        $this->inassortiment = $inassortiment;

        return $this;
    }

    /**
     * Set technischevoorraad
     *
     * @param integer $technischevoorraad
     *
     * @return artikel
     */
    public function setTechnischeVoorraad($technischevoorraad)
    {
        $this->technischevoorraad = $technischevoorraad;

        return $this;
    }

    /**
     * Get technischevoorraad
     *
     * @return integer
     */
    public function getTechnischeVoorraad()
    {
        return $this->technischevoorraad;
    }

    /**
     * Set gereserveerdevoorraad
     *
     * @param integer $gereserveerdevoorraad
     *
     * @return artikel
     */
    public function setGereserveerdeVoorraad($gereserveerdevoorraad)
    {
        $this->gereserveerdevoorraad = $gereserveerdevoorraad;

        return $this;
    }

    /**
     * Get gereserveerdevoorraad
     *
     * @return integer
     */
    public function getGereserveerdeVoorraad()
    {
        return $this->gereserveerdevoorraad;
    }
}
?>

