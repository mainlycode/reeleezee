<?php

namespace MainlyCode\Reeleezee\ValueObject;

/**
 * Class representing ManualJournalType
 *
 *
 * XSD Type: ManualJournalType
 */
class ManualJournalType
{

    /**
     * Referentie
     *
     * @property string $reference
     */
    private $reference = null;

    /**
     * DO NOT USE !
     *
     * @property string $internalRlzID
     */
    private $internalRlzID = null;

    /**
     * Memoriaalboek code
     *
     * @property string $journalEntryDiaryCode
     */
    private $journalEntryDiaryCode = null;

    /**
     * Debiteur
     *
     * @property
     * \MainlyCode\Reeleezee\ValueObject\SalesInvoiceType\CustomerReferenceAType
     * $customerReference
     */
    private $customerReference = null;

    /**
     * Crediteur
     *
     * @property
     * \MainlyCode\Reeleezee\ValueObject\PurchaseInvoiceType\VendorReferenceAType
     * $vendorReference
     */
    private $vendorReference = null;

    /**
     * Medewerker referentie
     *
     * @property
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\AccountManagerListAType\EmployeeReferenceAType
     * $employeeReference
     */
    private $employeeReference = null;

    /**
     * Debiteurnummer (VERVALLEN, GEBRUIK CustomerReference)
     *
     * @property integer $customerID
     */
    private $customerID = null;

    /**
     * Crediteurnummer (VERVALLEN, GEBRUIK VendorReference)
     *
     * @property integer $vendorID
     */
    private $vendorID = null;

    /**
     * Medewerkercode (VERVALLEN, GEBRUIK EmployeeReference)
     *
     * @property string $employeeCode
     */
    private $employeeCode = null;

    /**
     * Omschrijving
     *
     * @property string $description
     */
    private $description = null;

    /**
     * Document datum
     *
     * @property \DateTime $documentDate
     */
    private $documentDate = null;

    /**
     * Boek datum
     *
     * @property \DateTime $bookDate
     */
    private $bookDate = null;

    /**
     * Status
     *
     * @property string $status
     */
    private $status = null;

    /**
     * @property \MainlyCode\Reeleezee\ValueObject\ManualJournalLineType[] $lineList
     */
    private $lineList = null;

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
     * Gets as journalEntryDiaryCode
     *
     * Memoriaalboek code
     *
     * @return string
     */
    public function getJournalEntryDiaryCode()
    {
        return $this->journalEntryDiaryCode;
    }

    /**
     * Sets a new journalEntryDiaryCode
     *
     * Memoriaalboek code
     *
     * @param string $journalEntryDiaryCode
     * @return self
     */
    public function setJournalEntryDiaryCode($journalEntryDiaryCode)
    {
        $this->journalEntryDiaryCode = $journalEntryDiaryCode;
        return $this;
    }

    /**
     * Gets as customerReference
     *
     * Debiteur
     *
     * @return
     * \MainlyCode\Reeleezee\ValueObject\SalesInvoiceType\CustomerReferenceAType
     */
    public function getCustomerReference()
    {
        return $this->customerReference;
    }

    /**
     * Sets a new customerReference
     *
     * Debiteur
     *
     * @param \MainlyCode\Reeleezee\ValueObject\SalesInvoiceType\CustomerReferenceAType
     * $customerReference
     * @return self
     */
    public function setCustomerReference(\MainlyCode\Reeleezee\ValueObject\SalesInvoiceType\CustomerReferenceAType $customerReference)
    {
        $this->customerReference = $customerReference;
        return $this;
    }

    /**
     * Gets as vendorReference
     *
     * Crediteur
     *
     * @return
     * \MainlyCode\Reeleezee\ValueObject\PurchaseInvoiceType\VendorReferenceAType
     */
    public function getVendorReference()
    {
        return $this->vendorReference;
    }

    /**
     * Sets a new vendorReference
     *
     * Crediteur
     *
     * @param
     * \MainlyCode\Reeleezee\ValueObject\PurchaseInvoiceType\VendorReferenceAType
     * $vendorReference
     * @return self
     */
    public function setVendorReference(\MainlyCode\Reeleezee\ValueObject\PurchaseInvoiceType\VendorReferenceAType $vendorReference)
    {
        $this->vendorReference = $vendorReference;
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
     * Gets as customerID
     *
     * Debiteurnummer (VERVALLEN, GEBRUIK CustomerReference)
     *
     * @return integer
     */
    public function getCustomerID()
    {
        return $this->customerID;
    }

    /**
     * Sets a new customerID
     *
     * Debiteurnummer (VERVALLEN, GEBRUIK CustomerReference)
     *
     * @param integer $customerID
     * @return self
     */
    public function setCustomerID($customerID)
    {
        $this->customerID = $customerID;
        return $this;
    }

    /**
     * Gets as vendorID
     *
     * Crediteurnummer (VERVALLEN, GEBRUIK VendorReference)
     *
     * @return integer
     */
    public function getVendorID()
    {
        return $this->vendorID;
    }

    /**
     * Sets a new vendorID
     *
     * Crediteurnummer (VERVALLEN, GEBRUIK VendorReference)
     *
     * @param integer $vendorID
     * @return self
     */
    public function setVendorID($vendorID)
    {
        $this->vendorID = $vendorID;
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
     * Gets as documentDate
     *
     * Document datum
     *
     * @return \DateTime
     */
    public function getDocumentDate()
    {
        return $this->documentDate;
    }

    /**
     * Sets a new documentDate
     *
     * Document datum
     *
     * @param \DateTime $documentDate
     * @return self
     */
    public function setDocumentDate(\DateTime $documentDate)
    {
        $this->documentDate = $documentDate;
        return $this;
    }

    /**
     * Gets as bookDate
     *
     * Boek datum
     *
     * @return \DateTime
     */
    public function getBookDate()
    {
        return $this->bookDate;
    }

    /**
     * Sets a new bookDate
     *
     * Boek datum
     *
     * @param \DateTime $bookDate
     * @return self
     */
    public function setBookDate(\DateTime $bookDate)
    {
        $this->bookDate = $bookDate;
        return $this;
    }

    /**
     * Gets as status
     *
     * Status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Status
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Adds as line
     *
     * @return self
     * @param \MainlyCode\Reeleezee\ValueObject\ManualJournalLineType $line
     */
    public function addToLineList(\MainlyCode\Reeleezee\ValueObject\ManualJournalLineType $line)
    {
        $this->lineList[] = $line;
        return $this;
    }

    /**
     * isset lineList
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLineList($index)
    {
        return isset($this->lineList[$index]);
    }

    /**
     * unset lineList
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLineList($index)
    {
        unset($this->lineList[$index]);
    }

    /**
     * Gets as lineList
     *
     * @return \MainlyCode\Reeleezee\ValueObject\ManualJournalLineType[]
     */
    public function getLineList()
    {
        return $this->lineList;
    }

    /**
     * Sets a new lineList
     *
     * @param \MainlyCode\Reeleezee\ValueObject\ManualJournalLineType[] $lineList
     * @return self
     */
    public function setLineList(array $lineList)
    {
        $this->lineList = $lineList;
        return $this;
    }


}

