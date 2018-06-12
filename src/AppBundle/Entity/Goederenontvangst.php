<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Goederenontvangst
 *
 * @ORM\Table(name="goederenontvangst")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GoederenontvangstRepository")
 */
class Goederenontvangst
{
    /**
     * @var int
     *
     * @ORM\Column(name="goederenontvangstid", type="integer")
     * @ORM\Id
     */
    private $goederenontvangstid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ontvangstdatum", type="date")
     */
    private $ontvangstdatum;

    /**
     * @var string
     *
     * @ORM\Column(name="naamleverancier", type="string", length=6)
     */
    private $naamleverancier;

    /**
     * @ORM\OneToMany(targetEntity="Ontvangstregel", mappedBy="goederenontvangst")
     */
    private $goederen;

    public function __construct() {
          $this->goederen = new ArrayCollection();
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
     * Set goederenontvangstid
     *
     * @param integer $goederenontvangstid
     *
     * @return Goederenontvangst
     */
    public function setGoederenontvangstid($goederenontvangstid)
    {
        $this->goederenontvangstid = $goederenontvangstid;

        return $this;
    }


    /**
     * Set ontvangstdatum
     *
     * @param \DateTime $ontvangstdatum
     *
     * @return Goederenontvangst
     */
    public function setOntvangstdatum($ontvangstdatum)
    {
        $this->ontvangstdatum = $ontvangstdatum;

        return $this;
    }

    /**
     * Get ontvangstdatum
     *
     * @return \DateTime
     */
    public function getOntvangstdatum()
    {
        return $this->ontvangstdatum;
    }

    /**
     * Set naamleverancier
     *
     * @param string $naamleverancier
     *
     * @return Goederenontvangst
     */
    public function setNaamleverancier($naamleverancier)
    {
        $this->naamleverancier = $naamleverancier;

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
}
