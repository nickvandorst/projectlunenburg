<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProductRepository")
 */
class Product
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(name="barcode", type="integer", unique=true)
     */
    private $barcode;

    /**
     * @var string
     *
     * @ORM\Column(name="naam", type="string", length=35)
     */
    private $naam;

    /**
     * @var string
     *
     * @ORM\Column(name="merk", type="string", length=35)
     */
    private $merk;

    /**
     * @var int
     *
     * @ORM\Column(name="productsoort", type="integer")
     */
    private $productsoort;

    /**
     * @var int
     *
     * @ORM\Column(name="inkoopprijsproduct", type="integer")
     */
    private $inkoopprijsproduct;

    /**
     * @var string
     *
     * @ORM\Column(name="opmerking", type="string", length=35, nullable=true)
     */
    private $opmerking;


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
     * Set barcode
     *
     * @param integer $barcode
     *
     * @return Product
     */
    public function setBarcode($barcode)
    {
        $this->barcode = $barcode;
    
        return $this;
    }

    /**
     * Get barcode
     *
     * @return integer
     */
    public function getBarcode()
    {
        return $this->barcode;
    }

    /**
     * Set naam
     *
     * @param string $naam
     *
     * @return Product
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
     * Set merk
     *
     * @param string $merk
     *
     * @return Product
     */
    public function setMerk($merk)
    {
        $this->merk = $merk;
    
        return $this;
    }

    /**
     * Get merk
     *
     * @return string
     */
    public function getMerk()
    {
        return $this->merk;
    }

    /**
     * Set productsoort
     *
     * @param integer $productsoort
     *
     * @return Product
     */
    public function setProductsoort($productsoort)
    {
        $this->productsoort = $productsoort;
    
        return $this;
    }

    /**
     * Get productsoort
     *
     * @return integer
     */
    public function getProductsoort()
    {
        return $this->productsoort;
    }

    /**
     * Set inkoopprijsproduct
     *
     * @param integer $inkoopprijsproduct
     *
     * @return Product
     */
    public function setInkoopprijsproduct($inkoopprijsproduct)
    {
        $this->inkoopprijsproduct = $inkoopprijsproduct;
    
        return $this;
    }

    /**
     * Get inkoopprijsproduct
     *
     * @return integer
     */
    public function getInkoopprijsproduct()
    {
        return $this->inkoopprijsproduct;
    }

    /**
     * Set opmerking
     *
     * @param string $opmerking
     *
     * @return Product
     */
    public function setOpmerking($opmerking)
    {
        $this->opmerking = $opmerking;
    
        return $this;
    }

    /**
     * Get opmerking
     *
     * @return string
     */
    public function getOpmerking()
    {
        return $this->opmerking;
    }
}

