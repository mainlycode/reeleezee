<?php

namespace MainlyCode\Reeleezee\ValueObject;

/**
 * Class representing SalesInvoiceType
 *
 *
 * XSD Type: SalesInvoiceType
 */
class SalesInvoiceType
{

    /**
     * Factuurnummer
     *
     * @property integer $referenceNumber
     */
    private $referenceNumber = null;

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
     * @property \MainlyCode\Reeleezee\ValueObject\SalesInvoiceType\ContactPersonAType
     * $contactPerson
     */
    private $contactPerson = null;

    /**
     * Debiteur
     *
     * @property
     * \MainlyCode\Reeleezee\ValueObject\SalesInvoiceType\CustomerReferenceAType
     * $customerReference
     */
    private $customerReference = null;

    /**
     * Debiteurnummer (VERVALLEN, GEBRUIK CustomerReference)
     *
     * @property integer $customerID
     */
    private $customerID = null;

    /**
     * Adres ontvanger (zet op nil om standaard adres van de klant te gebruiken)
     *
     * @property \MainlyCode\Reeleezee\ValueObject\RecipientAddressType
     * $recipientAddress
     */
    private $recipientAddress = null;

    /**
     * Taalcode
     *
     * @property string $languageCode
     */
    private $languageCode = null;

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
     * Bankrekening referentie
     *
     * @property
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\BankAccountsAType\BankAccountAType\DirectDebitAuthorizationAType\PaymentAccountReferenceAType
     * $paymentAccountReference
     */
    private $paymentAccountReference = null;

    /**
     * Betaalwijze referentie
     *
     * @property
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\PaymentMethodReferenceAType
     * $paymentMethodReference
     */
    private $paymentMethodReference = null;

    /**
     * Betreft
     *
     * @property string $header
     */
    private $header = null;

    /**
     * Afsluitende tekst
     *
     * @property string $footer
     */
    private $footer = null;

    /**
     * Voetregel
     *
     * @property string $bottomText
     */
    private $bottomText = null;

    /**
     * Betalingskenmerk
     *
     * @property string $paymentReference
     */
    private $paymentReference = null;

    /**
     * Korting
     *
     * @property \MainlyCode\Reeleezee\ValueObject\SalesInvoiceType\DiscountAType
     * $discount
     */
    private $discount = null;

    /**
     * Soort factuur
     *
     * @property string $documentOrigin
     */
    private $documentOrigin = null;

    /**
     * @property \MainlyCode\Reeleezee\ValueObject\SalesInvoiceLineType[] $lineList
     */
    private $lineList = null;

    /**
     * Gets as referenceNumber
     *
     * Factuurnummer
     *
     * @return integer
     */
    public function getReferenceNumber()
    {
        return $this->referenceNumber;
    }

    /**
     * Sets a new referenceNumber
     *
     * Factuurnummer
     *
     * @param integer $referenceNumber
     * @return self
     */
    public function setReferenceNumber($referenceNumber)
    {
        $this->referenceNumber = $referenceNumber;
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
     * @return \MainlyCode\Reeleezee\ValueObject\SalesInvoiceType\ContactPersonAType
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
     * @param \MainlyCode\Reeleezee\ValueObject\SalesInvoiceType\ContactPersonAType
     * $contactPerson
     * @return self
     */
    public function setContactPerson(\MainlyCode\Reeleezee\ValueObject\SalesInvoiceType\ContactPersonAType $contactPerson)
    {
        $this->contactPerson = $contactPerson;
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
     * Gets as recipientAddress
     *
     * Adres ontvanger (zet op nil om standaard adres van de klant te gebruiken)
     *
     * @return \MainlyCode\Reeleezee\ValueObject\RecipientAddressType
     */
    public function getRecipientAddress()
    {
        return $this->recipientAddress;
    }

    /**
     * Sets a new recipientAddress
     *
     * Adres ontvanger (zet op nil om standaard adres van de klant te gebruiken)
     *
     * @param \MainlyCode\Reeleezee\ValueObject\RecipientAddressType $recipientAddress
     * @return self
     */
    public function setRecipientAddress(\MainlyCode\Reeleezee\ValueObject\RecipientAddressType $recipientAddress)
    {
        $this->recipientAddress = $recipientAddress;
        return $this;
    }

    /**
     * Gets as languageCode
     *
     * Taalcode
     *
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->languageCode;
    }

    /**
     * Sets a new languageCode
     *
     * Taalcode
     *
     * @param string $languageCode
     * @return self
     */
    public function setLanguageCode($languageCode)
    {
        $this->languageCode = $languageCode;
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
     * Gets as paymentAccountReference
     *
     * Bankrekening referentie
     *
     * @return
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\BankAccountsAType\BankAccountAType\DirectDebitAuthorizationAType\PaymentAccountReferenceAType
     */
    public function getPaymentAccountReference()
    {
        return $this->paymentAccountReference;
    }

    /**
     * Sets a new paymentAccountReference
     *
     * Bankrekening referentie
     *
     * @param
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\BankAccountsAType\BankAccountAType\DirectDebitAuthorizationAType\PaymentAccountReferenceAType
     * $paymentAccountReference
     * @return self
     */
    public function setPaymentAccountReference(\MainlyCode\Reeleezee\ValueObject\CustomerType\BankAccountsAType\BankAccountAType\DirectDebitAuthorizationAType\PaymentAccountReferenceAType $paymentAccountReference)
    {
        $this->paymentAccountReference = $paymentAccountReference;
        return $this;
    }

    /**
     * Gets as paymentMethodReference
     *
     * Betaalwijze referentie
     *
     * @return
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\PaymentMethodReferenceAType
     */
    public function getPaymentMethodReference()
    {
        return $this->paymentMethodReference;
    }

    /**
     * Sets a new paymentMethodReference
     *
     * Betaalwijze referentie
     *
     * @param
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\PaymentMethodReferenceAType
     * $paymentMethodReference
     * @return self
     */
    public function setPaymentMethodReference(\MainlyCode\Reeleezee\ValueObject\CustomerType\PaymentMethodReferenceAType $paymentMethodReference)
    {
        $this->paymentMethodReference = $paymentMethodReference;
        return $this;
    }

    /**
     * Gets as header
     *
     * Betreft
     *
     * @return string
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * Betreft
     *
     * @param string $header
     * @return self
     */
    public function setHeader($header)
    {
        $this->header = $header;
        return $this;
    }

    /**
     * Gets as footer
     *
     * Afsluitende tekst
     *
     * @return string
     */
    public function getFooter()
    {
        return $this->footer;
    }

    /**
     * Sets a new footer
     *
     * Afsluitende tekst
     *
     * @param string $footer
     * @return self
     */
    public function setFooter($footer)
    {
        $this->footer = $footer;
        return $this;
    }

    /**
     * Gets as bottomText
     *
     * Voetregel
     *
     * @return string
     */
    public function getBottomText()
    {
        return $this->bottomText;
    }

    /**
     * Sets a new bottomText
     *
     * Voetregel
     *
     * @param string $bottomText
     * @return self
     */
    public function setBottomText($bottomText)
    {
        $this->bottomText = $bottomText;
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
     * Gets as discount
     *
     * Korting
     *
     * @return \MainlyCode\Reeleezee\ValueObject\SalesInvoiceType\DiscountAType
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Sets a new discount
     *
     * Korting
     *
     * @param \MainlyCode\Reeleezee\ValueObject\SalesInvoiceType\DiscountAType
     * $discount
     * @return self
     */
    public function setDiscount(\MainlyCode\Reeleezee\ValueObject\SalesInvoiceType\DiscountAType $discount)
    {
        $this->discount = $discount;
        return $this;
    }

    /**
     * Gets as documentOrigin
     *
     * Soort factuur
     *
     * @return string
     */
    public function getDocumentOrigin()
    {
        return $this->documentOrigin;
    }

    /**
     * Sets a new documentOrigin
     *
     * Soort factuur
     *
     * @param string $documentOrigin
     * @return self
     */
    public function setDocumentOrigin($documentOrigin)
    {
        $this->documentOrigin = $documentOrigin;
        return $this;
    }

    /**
     * Adds as line
     *
     * @return self
     * @param \MainlyCode\Reeleezee\ValueObject\SalesInvoiceLineType $line
     */
    public function addToLineList(\MainlyCode\Reeleezee\ValueObject\SalesInvoiceLineType $line)
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
     * @return \MainlyCode\Reeleezee\ValueObject\SalesInvoiceLineType[]
     */
    public function getLineList()
    {
        return $this->lineList;
    }

    /**
     * Sets a new lineList
     *
     * @param \MainlyCode\Reeleezee\ValueObject\SalesInvoiceLineType[] $lineList
     * @return self
     */
    public function setLineList(array $lineList)
    {
        $this->lineList = $lineList;
        return $this;
    }


}

