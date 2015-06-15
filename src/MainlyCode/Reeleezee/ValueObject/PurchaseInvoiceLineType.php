<?php

namespace MainlyCode\Reeleezee\ValueObject;

/**
 * Class representing PurchaseInvoiceLineType
 *
 *
 * XSD Type: PurchaseInvoiceLineType
 */
class PurchaseInvoiceLineType
{

    /**
     * Datum
     *
     * @property \DateTime $date
     */
    private $date = null;

    /**
     * Omschrijving
     *
     * @property string $description
     */
    private $description = null;

    /**
     * Hoeveelheid
     *
     * @property float $quantity
     */
    private $quantity = null;

    /**
     * Eenheid
     *
     * @property string $unit
     */
    private $unit = null;

    /**
     * Product referentie
     *
     * @property
     * \MainlyCode\Reeleezee\ValueObject\SalesInvoiceLineType\ProductReferenceAType
     * $productReference
     */
    private $productReference = null;

    /**
     * Productcode
     *
     * @property string $productCode
     */
    private $productCode = null;

    /**
     * Prijs
     *
     * @property float $price
     */
    private $price = null;

    /**
     * BTW bedrag
     *
     * @property float $vatAmount
     */
    private $vatAmount = null;

    /**
     * BTW code
     *
     * @property string $vatCode
     */
    private $vatCode = null;

    /**
     * Grootboekrekening referentie
     *
     * @property
     * \MainlyCode\Reeleezee\ValueObject\SalesInvoiceLineType\AccountReferenceAType
     * $accountReference
     */
    private $accountReference = null;

    /**
     * Medewerker referentie
     *
     * @property
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\AccountManagerListAType\EmployeeReferenceAType
     * $employeeReference
     */
    private $employeeReference = null;

    /**
     * Afdeling referentie
     *
     * @property
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\DepartmentReferenceAType
     * $departmentReference
     */
    private $departmentReference = null;

    /**
     * Project referentie
     *
     * @property
     * \MainlyCode\Reeleezee\ValueObject\SalesInvoiceLineType\ProjectReferenceAType
     * $projectReference
     */
    private $projectReference = null;

    /**
     * Gets as date
     *
     * Datum
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * Datum
     *
     * @param \DateTime $date
     * @return self
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
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
     * Gets as quantity
     *
     * Hoeveelheid
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * Hoeveelheid
     *
     * @param float $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
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
     * Gets as productReference
     *
     * Product referentie
     *
     * @return
     * \MainlyCode\Reeleezee\ValueObject\SalesInvoiceLineType\ProductReferenceAType
     */
    public function getProductReference()
    {
        return $this->productReference;
    }

    /**
     * Sets a new productReference
     *
     * Product referentie
     *
     * @param
     * \MainlyCode\Reeleezee\ValueObject\SalesInvoiceLineType\ProductReferenceAType
     * $productReference
     * @return self
     */
    public function setProductReference(\MainlyCode\Reeleezee\ValueObject\SalesInvoiceLineType\ProductReferenceAType $productReference)
    {
        $this->productReference = $productReference;
        return $this;
    }

    /**
     * Gets as productCode
     *
     * Productcode
     *
     * @return string
     */
    public function getProductCode()
    {
        return $this->productCode;
    }

    /**
     * Sets a new productCode
     *
     * Productcode
     *
     * @param string $productCode
     * @return self
     */
    public function setProductCode($productCode)
    {
        $this->productCode = $productCode;
        return $this;
    }

    /**
     * Gets as price
     *
     * Prijs
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
     * Prijs
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
     * Gets as vatAmount
     *
     * BTW bedrag
     *
     * @return float
     */
    public function getVatAmount()
    {
        return $this->vatAmount;
    }

    /**
     * Sets a new vatAmount
     *
     * BTW bedrag
     *
     * @param float $vatAmount
     * @return self
     */
    public function setVatAmount($vatAmount)
    {
        $this->vatAmount = $vatAmount;
        return $this;
    }

    /**
     * Gets as vatCode
     *
     * BTW code
     *
     * @return string
     */
    public function getVatCode()
    {
        return $this->vatCode;
    }

    /**
     * Sets a new vatCode
     *
     * BTW code
     *
     * @param string $vatCode
     * @return self
     */
    public function setVatCode($vatCode)
    {
        $this->vatCode = $vatCode;
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
     * Gets as employeeReference
     *
     * Medewerker referentie
     *
     * @return
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\AccountManagerListAType\EmployeeReferenceAType
     */
    public function getEmployeeReference()
    {
        return $this->employeeReference;
    }

    /**
     * Sets a new employeeReference
     *
     * Medewerker referentie
     *
     * @param
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\AccountManagerListAType\EmployeeReferenceAType
     * $employeeReference
     * @return self
     */
    public function setEmployeeReference(\MainlyCode\Reeleezee\ValueObject\CustomerType\AccountManagerListAType\EmployeeReferenceAType $employeeReference)
    {
        $this->employeeReference = $employeeReference;
        return $this;
    }

    /**
     * Gets as departmentReference
     *
     * Afdeling referentie
     *
     * @return \MainlyCode\Reeleezee\ValueObject\CustomerType\DepartmentReferenceAType
     */
    public function getDepartmentReference()
    {
        return $this->departmentReference;
    }

    /**
     * Sets a new departmentReference
     *
     * Afdeling referentie
     *
     * @param \MainlyCode\Reeleezee\ValueObject\CustomerType\DepartmentReferenceAType
     * $departmentReference
     * @return self
     */
    public function setDepartmentReference(\MainlyCode\Reeleezee\ValueObject\CustomerType\DepartmentReferenceAType $departmentReference)
    {
        $this->departmentReference = $departmentReference;
        return $this;
    }

    /**
     * Gets as projectReference
     *
     * Project referentie
     *
     * @return
     * \MainlyCode\Reeleezee\ValueObject\SalesInvoiceLineType\ProjectReferenceAType
     */
    public function getProjectReference()
    {
        return $this->projectReference;
    }

    /**
     * Sets a new projectReference
     *
     * Project referentie
     *
     * @param
     * \MainlyCode\Reeleezee\ValueObject\SalesInvoiceLineType\ProjectReferenceAType
     * $projectReference
     * @return self
     */
    public function setProjectReference(\MainlyCode\Reeleezee\ValueObject\SalesInvoiceLineType\ProjectReferenceAType $projectReference)
    {
        $this->projectReference = $projectReference;
        return $this;
    }


}

