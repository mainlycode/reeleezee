<?php

namespace MainlyCode\Reeleezee\ValueObject;

/**
 * Class representing ProductType
 *
 *
 * XSD Type: ProductType
 */
class ProductType
{

    /**
     * Productcode
     *
     * @property string $code
     */
    private $code = null;

    /**
     * DO NOT USE !
     *
     * @property string $internalRlzID
     */
    private $internalRlzID = null;

    /**
     * Naam
     *
     * @property string $name
     */
    private $name = null;

    /**
     * Omschrijving
     *
     * @property string $description
     */
    private $description = null;

    /**
     * Commentaar
     *
     * @property string $comment
     */
    private $comment = null;

    /**
     * Verkoopprijs
     *
     * @property float $price
     */
    private $price = null;

    /**
     * Kostprijs
     *
     * @property float $costPrice
     */
    private $costPrice = null;

    /**
     * Inkoopprijs
     *
     * @property float $purchasePrice
     */
    private $purchasePrice = null;

    /**
     * Eenheid
     *
     * @property string $unit
     */
    private $unit = null;

    /**
     * Grootboekrekening referentie
     *
     * @property
     * \MainlyCode\Reeleezee\ValueObject\SalesInvoiceLineType\AccountReferenceAType
     * $accountReference
     */
    private $accountReference = null;

    /**
     * Grootboekrekening omzet (VERVALLEN, GEBRUIK AccountReference)
     *
     * @property string $accountNumber
     */
    private $accountNumber = null;

    /**
     * BTW groep
     *
     * @property string $vatGroup
     */
    private $vatGroup = null;

    /**
     * Productcode leverancier
     *
     * @property string $vendorProductCode
     */
    private $vendorProductCode = null;

    /**
     * Barcode
     *
     * @property string $barcode
     */
    private $barcode = null;

    /**
     * Producttype
     *
     * @property string $type
     */
    private $type = null;

    /**
     * Printbestemming referentie
     *
     * @property \MainlyCode\Reeleezee\ValueObject\ProductType\OutputTypeReferenceAType
     * $outputTypeReference
     */
    private $outputTypeReference = null;

    /**
     * Sortering
     *
     * @property string $sorting
     */
    private $sorting = null;

    /**
     * Actief
     *
     * @property boolean $active
     */
    private $active = null;

    /**
     * @property \MainlyCode\Reeleezee\ValueObject\ProductGroupReferenceType[]
     * $productGroupReferenceList
     */
    private $productGroupReferenceList = null;

    /**
     * Sortering referentie
     *
     * @property
     * \MainlyCode\Reeleezee\ValueObject\ProductType\CashRegisterTypeReferenceAType
     * $cashRegisterTypeReference
     */
    private $cashRegisterTypeReference = null;

    /**
     * Gets as code
     *
     * Productcode
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Productcode
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as internalRlzID
     *
     * DO NOT USE !
     *
     * @return string
     */
    public function getInternalRlzID()
    {
        return $this->internalRlzID;
    }

    /**
     * Sets a new internalRlzID
     *
     * DO NOT USE !
     *
     * @param string $internalRlzID
     * @return self
     */
    public function setInternalRlzID($internalRlzID)
    {
        $this->internalRlzID = $internalRlzID;
        return $this;
    }

    /**
     * Gets as name
     *
     * Naam
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Naam
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as description
     *
     * Omschrijving
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Omschrijving
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as comment
     *
     * Commentaar
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * Commentaar
     *
     * @param string $comment
     * @return self
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Gets as price
     *
     * Verkoopprijs
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets a new price
     *
     * Verkoopprijs
     *
     * @param float $price
     * @return self
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * Gets as costPrice
     *
     * Kostprijs
     *
     * @return float
     */
    public function getCostPrice()
    {
        return $this->costPrice;
    }

    /**
     * Sets a new costPrice
     *
     * Kostprijs
     *
     * @param float $costPrice
     * @return self
     */
    public function setCostPrice($costPrice)
    {
        $this->costPrice = $costPrice;
        return $this;
    }

    /**
     * Gets as purchasePrice
     *
     * Inkoopprijs
     *
     * @return float
     */
    public function getPurchasePrice()
    {
        return $this->purchasePrice;
    }

    /**
     * Sets a new purchasePrice
     *
     * Inkoopprijs
     *
     * @param float $purchasePrice
     * @return self
     */
    public function setPurchasePrice($purchasePrice)
    {
        $this->purchasePrice = $purchasePrice;
        return $this;
    }

    /**
     * Gets as unit
     *
     * Eenheid
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Sets a new unit
     *
     * Eenheid
     *
     * @param string $unit
     * @return self
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;
        return $this;
    }

    /**
     * Gets as accountReference
     *
     * Grootboekrekening referentie
     *
     * @return
     * \MainlyCode\Reeleezee\ValueObject\SalesInvoiceLineType\AccountReferenceAType
     */
    public function getAccountReference()
    {
        return $this->accountReference;
    }

    /**
     * Sets a new accountReference
     *
     * Grootboekrekening referentie
     *
     * @param
     * \MainlyCode\Reeleezee\ValueObject\SalesInvoiceLineType\AccountReferenceAType
     * $accountReference
     * @return self
     */
    public function setAccountReference(\MainlyCode\Reeleezee\ValueObject\SalesInvoiceLineType\AccountReferenceAType $accountReference)
    {
        $this->accountReference = $accountReference;
        return $this;
    }

    /**
     * Gets as accountNumber
     *
     * Grootboekrekening omzet (VERVALLEN, GEBRUIK AccountReference)
     *
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * Sets a new accountNumber
     *
     * Grootboekrekening omzet (VERVALLEN, GEBRUIK AccountReference)
     *
     * @param string $accountNumber
     * @return self
     */
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;
        return $this;
    }

    /**
     * Gets as vatGroup
     *
     * BTW groep
     *
     * @return string
     */
    public function getVatGroup()
    {
        return $this->vatGroup;
    }

    /**
     * Sets a new vatGroup
     *
     * BTW groep
     *
     * @param string $vatGroup
     * @return self
     */
    public function setVatGroup($vatGroup)
    {
        $this->vatGroup = $vatGroup;
        return $this;
    }

    /**
     * Gets as vendorProductCode
     *
     * Productcode leverancier
     *
     * @return string
     */
    public function getVendorProductCode()
    {
        return $this->vendorProductCode;
    }

    /**
     * Sets a new vendorProductCode
     *
     * Productcode leverancier
     *
     * @param string $vendorProductCode
     * @return self
     */
    public function setVendorProductCode($vendorProductCode)
    {
        $this->vendorProductCode = $vendorProductCode;
        return $this;
    }

    /**
     * Gets as barcode
     *
     * Barcode
     *
     * @return string
     */
    public function getBarcode()
    {
        return $this->barcode;
    }

    /**
     * Sets a new barcode
     *
     * Barcode
     *
     * @param string $barcode
     * @return self
     */
    public function setBarcode($barcode)
    {
        $this->barcode = $barcode;
        return $this;
    }

    /**
     * Gets as type
     *
     * Producttype
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Producttype
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as outputTypeReference
     *
     * Printbestemming referentie
     *
     * @return \MainlyCode\Reeleezee\ValueObject\ProductType\OutputTypeReferenceAType
     */
    public function getOutputTypeReference()
    {
        return $this->outputTypeReference;
    }

    /**
     * Sets a new outputTypeReference
     *
     * Printbestemming referentie
     *
     * @param \MainlyCode\Reeleezee\ValueObject\ProductType\OutputTypeReferenceAType
     * $outputTypeReference
     * @return self
     */
    public function setOutputTypeReference(\MainlyCode\Reeleezee\ValueObject\ProductType\OutputTypeReferenceAType $outputTypeReference)
    {
        $this->outputTypeReference = $outputTypeReference;
        return $this;
    }

    /**
     * Gets as sorting
     *
     * Sortering
     *
     * @return string
     */
    public function getSorting()
    {
        return $this->sorting;
    }

    /**
     * Sets a new sorting
     *
     * Sortering
     *
     * @param string $sorting
     * @return self
     */
    public function setSorting($sorting)
    {
        $this->sorting = $sorting;
        return $this;
    }

    /**
     * Gets as active
     *
     * Actief
     *
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Sets a new active
     *
     * Actief
     *
     * @param boolean $active
     * @return self
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * Adds as productGroupReference
     *
     * @return self
     * @param \MainlyCode\Reeleezee\ValueObject\ProductGroupReferenceType
     * $productGroupReference
     */
    public function addToProductGroupReferenceList(\MainlyCode\Reeleezee\ValueObject\ProductGroupReferenceType $productGroupReference)
    {
        $this->productGroupReferenceList[] = $productGroupReference;
        return $this;
    }

    /**
     * isset productGroupReferenceList
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProductGroupReferenceList($index)
    {
        return isset($this->productGroupReferenceList[$index]);
    }

    /**
     * unset productGroupReferenceList
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProductGroupReferenceList($index)
    {
        unset($this->productGroupReferenceList[$index]);
    }

    /**
     * Gets as productGroupReferenceList
     *
     * @return \MainlyCode\Reeleezee\ValueObject\ProductGroupReferenceType[]
     */
    public function getProductGroupReferenceList()
    {
        return $this->productGroupReferenceList;
    }

    /**
     * Sets a new productGroupReferenceList
     *
     * @param \MainlyCode\Reeleezee\ValueObject\ProductGroupReferenceType[]
     * $productGroupReferenceList
     * @return self
     */
    public function setProductGroupReferenceList(array $productGroupReferenceList)
    {
        $this->productGroupReferenceList = $productGroupReferenceList;
        return $this;
    }

    /**
     * Gets as cashRegisterTypeReference
     *
     * Sortering referentie
     *
     * @return
     * \MainlyCode\Reeleezee\ValueObject\ProductType\CashRegisterTypeReferenceAType
     */
    public function getCashRegisterTypeReference()
    {
        return $this->cashRegisterTypeReference;
    }

    /**
     * Sets a new cashRegisterTypeReference
     *
     * Sortering referentie
     *
     * @param
     * \MainlyCode\Reeleezee\ValueObject\ProductType\CashRegisterTypeReferenceAType
     * $cashRegisterTypeReference
     * @return self
     */
    public function setCashRegisterTypeReference(\MainlyCode\Reeleezee\ValueObject\ProductType\CashRegisterTypeReferenceAType $cashRegisterTypeReference)
    {
        $this->cashRegisterTypeReference = $cashRegisterTypeReference;
        return $this;
    }


}

