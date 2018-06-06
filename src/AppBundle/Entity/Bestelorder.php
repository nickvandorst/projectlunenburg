<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Table;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Bestelorder
 *
 * @ORM\Table(name="bestelorder")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BestelorderRepository")
 * @UniqueEntity(fields={"bestelordernummer"}, message="Dit bestelordernummer bestaat al.")
 */
class Bestelorder
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(name="bestelordernummer", type="integer")
     */
    private $bestelordernummer;

    /**
     * @var string
     *
     * @ORM\Column(name="naamleverancier", type="string", length=6)
     * @Assert\Length(
     *      max = 6,
     *      maxMessage = "De naam van de leverancier mag maar maximaal 6 karakters hebben"
     *)
     */
    private $naamleverancier;

    /**
     * @ORM\OneToMany(targetEntity="Bestelregel", mappedBy="bestelorder")
     */
    private $bestelorders;

    /**
     * Set bestelordernummer
     *
     * @param integer $bestelordernummer
     *
     * @return Bestelorder
     */
    public function setBestelordernummer($bestelordernummer)
    {
        $this->bestelordernummer = $bestelordernummer;

        return $this;
    }

    /**
     * Get bestelordernummer
     *
     * @return integer
     */
    public function getBestelordernummer()
    {
        return $this->bestelordernummer;
    }

    /**
     * Set bestelregelid
     *
     * @param integer $bestelregelid
     *
     * @return Bestelorder
     */
    public function setBestelregelid($bestelregelid)
    {
        $this->bestelregelid = $bestelregelid;

        return $this;
    }

    /**
     * Get bestelregelid
     *
     * @return integer
     */
    public function getBestelregelid()
    {
        return $this->bestelregelid;
    }

    /**
     * Set naamleverancier
     *
     * @param string $naamleverancier
     *
     * @return Bestelorder
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
