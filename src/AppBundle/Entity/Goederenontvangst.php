<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Colections\Arraycollection;

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
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ontvangstdatum", type="date")
     */
    private $ontvangstdatum;

    /**
     * @var int
     *
     * @ORM\Column(name="ontvangstregel", type="integer", nullable=true)
     */
    private $ontvangstregel;

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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Goederenontvangst
     */
    public function setId($id)
    {
        $this->id = $id;

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
     * Set ontvangstregel
     *
     * @param integer $ontvangstregel
     *
     * @return Goederenontvangst
     */
    public function setOntvangstregel($ontvangstregel)
    {
        $this->ontvangstregel = $ontvangstregel;

        return $this;
    }

    /**
     * Get ontvangstregel
     *
     * @return integer
     */
    public function getOntvangstregel()
    {
        return $this->ontvangstregel;
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
