<?php

namespace MainlyCode\Reeleezee\ValueObject;

/**
 * Class representing ManualJournalLineType
 *
 *
 * XSD Type: ManualJournalLineType
 */
class ManualJournalLineType
{

    /**
     * Referentie
     *
     * @property string $reference
     */
    private $reference = null;

    /**
     * Omschrijving
     *
     * @property string $description
     */
    private $description = null;

    /**
     * Bedrag (+ Debet, - Credit)
     *
     * @property float $amount
     */
    private $amount = null;

    /**
     * Grootboekrekening referentie
     *
     * @property
     * \MainlyCode\Reeleezee\ValueObject\SalesInvoiceLineType\AccountReferenceAType
     * $accountReference
     */
    private $accountReference = null;

    /**
     * Product referentie
     *
     * @property
     * \MainlyCode\Reeleezee\ValueObject\ManualJournalLineType\ProductReferenceAType
     * $productReference
     */
    private $productReference = null;

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
     * Grootboekrekening (VERVALLEN, GEBRUIK AccountReference)
     *
     * @property string $accountNumber
     */
    private $accountNumber = null;

    /**
     * Productcode (VERVALLEN, GEBRUIK ProductReference)
     *
     * @property string $productCode
     */
    private $productCode = null;

    /**
     * Medewerkercode (VERVALLEN, GEBRUIK EmployeeReference)
     *
     * @property string $employeeCode
     */
    private $employeeCode = null;

    /**
     * Afdelingscode (VERVALLEN, GEBRUIK DepartmentReference)
     *
     * @property string $departmentCode
     */
    private $departmentCode = null;

    /**
     * Project (VERVALLEN, GEBRUIK ProjectReference)
     *
     * @property string $project
     */
    private $project = null;

    /**
     * Gets as reference
     *
     * Referentie
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Sets a new reference
     *
     * Referentie
     *
     * @param string $reference
     * @return self
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
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
     * Gets as amount
     *
     * Bedrag (+ Debet, - Credit)
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * Bedrag (+ Debet, - Credit)
     *
     * @param float $amount
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
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
     * Gets as productReference
     *
     * Product referentie
     *
     * @return
     * \MainlyCode\Reeleezee\ValueObject\ManualJournalLineType\ProductReferenceAType
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
     * \MainlyCode\Reeleezee\ValueObject\ManualJournalLineType\ProductReferenceAType
     * $productReference
     * @return self
     */
    public function setProductReference(\MainlyCode\Reeleezee\ValueObject\ManualJournalLineType\ProductReferenceAType $productReference)
    {
        $this->productReference = $productReference;
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

    /**
     * Gets as accountNumber
     *
     * Grootboekrekening (VERVALLEN, GEBRUIK AccountReference)
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
     * Grootboekrekening (VERVALLEN, GEBRUIK AccountReference)
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
     * Gets as productCode
     *
     * Productcode (VERVALLEN, GEBRUIK ProductReference)
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
     * Productcode (VERVALLEN, GEBRUIK ProductReference)
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
     * Gets as employeeCode
     *
     * Medewerkercode (VERVALLEN, GEBRUIK EmployeeReference)
     *
     * @return string
     */
    public function getEmployeeCode()
    {
        return $this->employeeCode;
    }

    /**
     * Sets a new employeeCode
     *
     * Medewerkercode (VERVALLEN, GEBRUIK EmployeeReference)
     *
     * @param string $employeeCode
     * @return self
     */
    public function setEmployeeCode($employeeCode)
    {
        $this->employeeCode = $employeeCode;
        return $this;
    }

    /**
     * Gets as departmentCode
     *
     * Afdelingscode (VERVALLEN, GEBRUIK DepartmentReference)
     *
     * @return string
     */
    public function getDepartmentCode()
    {
        return $this->departmentCode;
    }

    /**
     * Sets a new departmentCode
     *
     * Afdelingscode (VERVALLEN, GEBRUIK DepartmentReference)
     *
     * @param string $departmentCode
     * @return self
     */
    public function setDepartmentCode($departmentCode)
    {
        $this->departmentCode = $departmentCode;
        return $this;
    }

    /**
     * Gets as project
     *
     * Project (VERVALLEN, GEBRUIK ProjectReference)
     *
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Sets a new project
     *
     * Project (VERVALLEN, GEBRUIK ProjectReference)
     *
     * @param string $project
     * @return self
     */
    public function setProject($project)
    {
        $this->project = $project;
        return $this;
    }


}

