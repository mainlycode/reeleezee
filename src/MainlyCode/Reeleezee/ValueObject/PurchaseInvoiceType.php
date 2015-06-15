<?php

namespace MainlyCode\Reeleezee\ValueObject;

/**
 * Class representing PurchaseInvoiceType
 *
 *
 * XSD Type: PurchaseInvoiceType
 */
class PurchaseInvoiceType
{

    /**
     * Factuurreferentie
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
     * Contactpersoon
     *
     * @property
     * \MainlyCode\Reeleezee\ValueObject\SalesInvoiceType\ContactPersonReferenceAType
     * $contactPersonReference
     */
    private $contactPersonReference = null;

    /**
     * Contactpersoon
     *
     * @property
     * \MainlyCode\Reeleezee\ValueObject\PurchaseInvoiceType\ContactPersonAType
     * $contactPerson
     */
    private $contactPerson = null;

    /**
     * Crediteur
     *
     * @property
     * \MainlyCode\Reeleezee\ValueObject\PurchaseInvoiceType\VendorReferenceAType
     * $vendorReference
     */
    private $vendorReference = null;

    /**
     * Crediteurnummer (VERVALLEN, GEBRUIK VendorReference)
     *
     * @property integer $vendorID
     */
    private $vendorID = null;

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
     * Datum betalingstermijn verstreken
     *
     * @property \DateTime $paymentDueDate
     */
    private $paymentDueDate = null;

    /**
     * Zijn de bedragen inclusief BTW
     *
     * @property boolean $isVatIncludedInPrice
     */
    private $isVatIncludedInPrice = null;

    /**
     * Status
     *
     * @property string $status
     */
    private $status = null;

    /**
     * Betalingskenmerk
     *
     * @property string $paymentReference
     */
    private $paymentReference = null;

    /**
     * @property \MainlyCode\Reeleezee\ValueObject\PurchaseInvoiceLineType[] $lineList
     */
    private $lineList = null;

    /**
     * Gets as reference
     *
     * Factuurreferentie
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
     * Factuurreferentie
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
     * Gets as contactPersonReference
     *
     * Contactpersoon
     *
     * @return
     * \MainlyCode\Reeleezee\ValueObject\SalesInvoiceType\ContactPersonReferenceAType
     */
    public function getContactPersonReference()
    {
        return $this->contactPersonReference;
    }

    /**
     * Sets a new contactPersonReference
     *
     * Contactpersoon
     *
     * @param
     * \MainlyCode\Reeleezee\ValueObject\SalesInvoiceType\ContactPersonReferenceAType
     * $contactPersonReference
     * @return self
     */
    public function setContactPersonReference(\MainlyCode\Reeleezee\ValueObject\SalesInvoiceType\ContactPersonReferenceAType $contactPersonReference)
    {
        $this->contactPersonReference = $contactPersonReference;
        return $this;
    }

    /**
     * Gets as contactPerson
     *
     * Contactpersoon
     *
     * @return \MainlyCode\Reeleezee\ValueObject\PurchaseInvoiceType\ContactPersonAType
     */
    public function getContactPerson()
    {
        return $this->contactPerson;
    }

    /**
     * Sets a new contactPerson
     *
     * Contactpersoon
     *
     * @param \MainlyCode\Reeleezee\ValueObject\PurchaseInvoiceType\ContactPersonAType
     * $contactPerson
     * @return self
     */
    public function setContactPerson(\MainlyCode\Reeleezee\ValueObject\PurchaseInvoiceType\ContactPersonAType $contactPerson)
    {
        $this->contactPerson = $contactPerson;
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
     * Gets as paymentDueDate
     *
     * Datum betalingstermijn verstreken
     *
     * @return \DateTime
     */
    public function getPaymentDueDate()
    {
        return $this->paymentDueDate;
    }

    /**
     * Sets a new paymentDueDate
     *
     * Datum betalingstermijn verstreken
     *
     * @param \DateTime $paymentDueDate
     * @return self
     */
    public function setPaymentDueDate(\DateTime $paymentDueDate)
    {
        $this->paymentDueDate = $paymentDueDate;
        return $this;
    }

    /**
     * Gets as isVatIncludedInPrice
     *
     * Zijn de bedragen inclusief BTW
     *
     * @return boolean
     */
    public function getIsVatIncludedInPrice()
    {
        return $this->isVatIncludedInPrice;
    }

    /**
     * Sets a new isVatIncludedInPrice
     *
     * Zijn de bedragen inclusief BTW
     *
     * @param boolean $isVatIncludedInPrice
     * @return self
     */
    public function setIsVatIncludedInPrice($isVatIncludedInPrice)
    {
        $this->isVatIncludedInPrice = $isVatIncludedInPrice;
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
     * Gets as paymentReference
     *
     * Betalingskenmerk
     *
     * @return string
     */
    public function getPaymentReference()
    {
        return $this->paymentReference;
    }

    /**
     * Sets a new paymentReference
     *
     * Betalingskenmerk
     *
     * @param string $paymentReference
     * @return self
     */
    public function setPaymentReference($paymentReference)
    {
        $this->paymentReference = $paymentReference;
        return $this;
    }

    /**
     * Adds as line
     *
     * @return self
     * @param \MainlyCode\Reeleezee\ValueObject\PurchaseInvoiceLineType $line
     */
    public function addToLineList(\MainlyCode\Reeleezee\ValueObject\PurchaseInvoiceLineType $line)
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
     * @return \MainlyCode\Reeleezee\ValueObject\PurchaseInvoiceLineType[]
     */
    public function getLineList()
    {
        return $this->lineList;
    }

    /**
     * Sets a new lineList
     *
     * @param \MainlyCode\Reeleezee\ValueObject\PurchaseInvoiceLineType[] $lineList
     * @return self
     */
    public function setLineList(array $lineList)
    {
        $this->lineList = $lineList;
        return $this;
    }


}

