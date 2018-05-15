<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 
 *
 * @ORM\Table(name="Productsoort")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\productsoortRepository")
 */
class Productsoort
{

    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(name="tid", type="integer", unique=true)
     */
    private $tid;

    /**
     * @var string
     *
     * @ORM\Column(name="beschrijving", type="string", length=35, nullable=true)
     */
    private $beschrijving;


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
     * Set tid
     *
     * @param integer $tid
     *
     * @return productsoort
     */
    public function setTid($tid)
    {
        $this->tid = $tid;
    
        return $this;
    }

    /**
     * Get tid
     *
     * @return integer
     */
    public function getTid()
    {
        return $this->tid;
    }

    /**
     * Set beschrijving
     *
     * @param string $beschrijving
     *
     * @return productsoort
     */
    public function setBeschrijving($beschrijving)
    {
        $this->beschrijving = $beschrijving;
    
        return $this;
    }

    /**
     * Get beschrijving
     *
     * @return string
     */
    public function getBeschrijving()
    {
        return $this->beschrijving;
    }
}

