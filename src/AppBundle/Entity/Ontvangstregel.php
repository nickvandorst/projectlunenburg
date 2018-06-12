<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Ontvangstregel
 *
 * @ORM\Table(name="ontvangstregel")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OntvangstregelRepository")
 * @UniqueEntity(fields={"artikelnummer"}, message="Het artikelnummer bestaat al.")
 */
class Ontvangstregel
{
    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="Goederenontvangst", inversedBy="goederen")
     * @ORM\Column(name="goederenontvangstid", type="integer", unique=true, nullable=true)
     */
    private $goederenontvangstid;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="Artikel", inversedBy="artikelen")
     * @ORM\Column(name="artikelnummer", unique=true)
     * @Assert\Length(
     *      min = 10,
     *      max = 10,
     *      minMessage = "Het artikelnummer moet 10 karakters hebben",
     *      maxMessage = "Het artikelnummer moet 10 karakters hebben"
     *)
     */
    private $artikelnummer;

    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(name="hoeveelheid", type="integer")
     */
    private $hoeveelheid;

    /**
     * @var string
     *
     * @ORM\Column(name="kwaliteit", type="string", length=11)
     */
    private $kwaliteit;

    /**
     * Set goederenontvangstid
     *
     * @param integer $goederenontvangstid
     *
     * @return Ontvangstregel
     */
    public function setGoederenontvangstid($goederenontvangstid)
    {
        $this->goederenontvangstid = $goederenontvangstid;

        return $this;
    }

    /**
     * Get goederenontvangstid
     *
     * @return integer
     */
    public function getGoederenontvangstid()
    {
        return $this->goederenontvangstid;
    }

    /**
     * Set artikelnummer
     *
     * @param string $artikelnummer
     *
     * @return Ontvangstregel
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
     * Set hoeveelheid
     *
     * @param integer $hoeveelheid
     *
     * @return Ontvangstregel
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

    /**
     * Set kwaliteit
     *
     * @param string $kwaliteit
     *
     * @return Ontvangstregel
     */
    public function setKwaliteit($kwaliteit)
    {
        $this->kwaliteit = $kwaliteit;

        return $this;
    }

    /**
     * Get kwaliteit
     *
     * @return string
     */
    public function getKwaliteit()
    {
        return $this->kwaliteit;
    }

}
