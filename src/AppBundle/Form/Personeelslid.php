<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Personeelslid
 *
 * @ORM\Table(name="Personeelslid")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PersoneelslidRepository")
 */
class Personeelslid
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", length=11)
     * @ORM\Id
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="winkel", type="integer", length=11, nullable=false)
     */
    private $winkel;
    /**
     * @var string
     *
     * @ORM\Column(name="naam", type="string", length=255, nullable=true)
     */
    private $naam;
    /**
     * @var string
     *
     * @ORM\Column(name="geslacht", type="string", length=5, nullable=true)
     */
    private $geslacht;
    /**
     * @var decimal
     *
     * @ORM\Column(name="dienstjaren", type="decimal", length=(10,1), nullable=false)
     */
    private $dienstjaren;
    public function __construct() {
          $this->personeelslid = new ArrayCollection();
    /**
     * Set id
     *
     * @param string $id
     *
     * @return Personeelslid
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set naam
     *
     * @param string $naam
     * @return Winkel
     */
    public function setNaam($naam)
    {
        $this->naam = $naam;

        return $this;
    }

    /**
     * Get naam
     *
     * @return string
     */
    public function getNaam()
    {
        return $this->naam;
    }
    /**
     * Set winkel
     *
     * @param int $winkel
     * @return Winkel
     */
    public function setWinkel($winkel)
    {
        $this->winkel = $winkel;

        return $this;
    }

    /**
     * Get winkel
     *
     * @return int
     */
    public function getWinkel()
    {
        return $this->winkel;
    }
    /**
     * Set geslacht
     *
     * @param string $geslacht
     * @return Personeelslid
     */
    public function setGeslacht($geslacht)
    {
        $this->geslacht = $geslacht;

        return $this;
    }

    /**
     * Get geslacht
     *
     * @return string
     */
    public function getGeslacht()
    {
        return $this->geslacht;
    }
    /**
     * Set dienstjaren
     *
     * @param string $dienstjaren
     * @return Personeelslid
     */
    public function setDienstjaren($dienstjaren)
    {
        $this->dienstjaren = $dienstjaren;

        return $this;
    }

    /**
     * Get dienstjaren
     *
     * @return string
     */
    public function getDienstjaren()
    {
        return $this->dienstjaren;
    }
}
