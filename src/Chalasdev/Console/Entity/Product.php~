<?php

namespace Chalasdev\Console\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Account.
 *
 * @ORM\Table(name="products")
 * @ORM\Entity(repositoryClass="Chalasdev\Console\Entity\ProductRepository")
 */
class Product
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_product", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProduct;

    /**
     * @var int
     *
     * @ORM\Column(name="id_product_attribute", type="integer", nullable=true)
     */
    protected $idProductAttribute;

    /**
     * @var int
     *
     * @ORM\Column(name="id_lang", type="integer", nullable=true)
     */
    protected $idLang;

    /**
     * @var string
     *
     * @ORM\Column(name="sku", type="string", length=64, nullable=false)
     */
    protected $sku;

    /**
     * @var string
     *
     * @ORM\Column(name="marketplace", type="string", length=255, nullable=false)
     */
    protected $marketplace;

    /**
     * @var string
     *
     * @ORM\Column(name="action", type="string", length=1, nullable=false)
     */
    protected $action;

    /**
     * @var string
     *
     * @ORM\Column(name="dateadd", type="datetime", nullable=true)
     */
    protected $dateAdd;

    /**
     * @var string
     *
     * @ORM\Column(name="dateupd", type="datetime", nullable=true)
     */
    protected $dateUpd;

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
     * Set name
     *
     * @param string $name
     *
     * @return Product
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set state
     *
     * @param boolean $state
     *
     * @return Product
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return boolean
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Get idProduct
     *
     * @return integer
     */
    public function getIdProduct()
    {
        return $this->idProduct;
    }

    /**
     * Set idProductAttribute
     *
     * @param integer $idProductAttribute
     *
     * @return Product
     */
    public function setIdProductAttribute($idProductAttribute)
    {
        $this->idProductAttribute = $idProductAttribute;

        return $this;
    }

    /**
     * Get idProductAttribute
     *
     * @return integer
     */
    public function getIdProductAttribute()
    {
        return $this->idProductAttribute;
    }

    /**
     * Set idLang
     *
     * @param integer $idLang
     *
     * @return Product
     */
    public function setIdLang($idLang)
    {
        $this->idLang = $idLang;

        return $this;
    }

    /**
     * Get idLang
     *
     * @return integer
     */
    public function getIdLang()
    {
        return $this->idLang;
    }

    /**
     * Set sku
     *
     * @param string $sku
     *
     * @return Product
     */
    public function setSku($sku)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * Get sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * Set marketplace
     *
     * @param string $marketplace
     *
     * @return Product
     */
    public function setMarketplace($marketplace)
    {
        $this->marketplace = $marketplace;

        return $this;
    }

    /**
     * Get marketplace
     *
     * @return string
     */
    public function getMarketplace()
    {
        return $this->marketplace;
    }

    /**
     * Set action
     *
     * @param string $action
     *
     * @return Product
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     *
     * @return Product
     */
    public function setDateAdd($dateAdd)
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }

    /**
     * Get dateAdd
     *
     * @return \DateTime
     */
    public function getDateAdd()
    {
        return $this->dateAdd;
    }

    /**
     * Set dateUpd
     *
     * @param \DateTime $dateUpd
     *
     * @return Product
     */
    public function setDateUpd($dateUpd)
    {
        $this->dateUpd = $dateUpd;

        return $this;
    }

    /**
     * Get dateUpd
     *
     * @return \DateTime
     */
    public function getDateUpd()
    {
        return $this->dateUpd;
    }
}
