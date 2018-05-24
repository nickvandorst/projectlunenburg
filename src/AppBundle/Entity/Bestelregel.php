<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @ORM\Table(name="Artikel")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\artikelRepository")
 * @UniqueEntity(fields={"artikelnummer"}, message="Dit artikelnummer bestaat al.")
 */
// test
class Bestelregel
{
    /**
     * @var int
     * @ORM\OneToMany(targetEntity="bestelRegel", mappedBy="artikel")
     */
    Public $bestelregels;

    /**
     * @var int
     */
    Public $id;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Artikel", inversedBy="bestelregels")
     * @ORM\JoinColumn(name="artikelnummer", referencedColumnName="artikelnummer")
     */
    Public $artikelnummer;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Bestelopdracht", inversedBy="bestelregels")
     * @ORM\JoinColumn(name="bestelordernummer", referencedColumnName="bestelordernummer")
     */
    Public $bestelordernummer;

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
}

?>