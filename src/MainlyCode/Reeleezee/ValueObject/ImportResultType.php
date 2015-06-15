<?php

namespace MainlyCode\Reeleezee\ValueObject;

/**
 * Class representing ImportResultType
 *
 *
 * XSD Type: ImportResultType
 */
class ImportResultType
{

    /**
     * @property \DateTime $processedDateTime
     */
    private $processedDateTime = null;

    /**
     * @property boolean $succeeded
     */
    private $succeeded = null;

    /**
     * Informatie over de export
     *
     * @property \MainlyCode\Reeleezee\ValueObject\ExportInfoType $exportInfo
     */
    private $exportInfo = null;

    /**
     * @property \MainlyCode\Reeleezee\ValueObject\ImportResultType\MaxMessageAType
     * $maxMessage
     */
    private $maxMessage = null;

    /**
     * @property \MainlyCode\Reeleezee\ValueObject\MessageListType\MessageAType[]
     * $messageList
     */
    private $messageList = null;

    /**
     * @property \MainlyCode\Reeleezee\ValueObject\ImportResultType\PersonAType $person
     */
    private $person = null;

    /**
     * @property \MainlyCode\Reeleezee\ValueObject\ImportResultType\CustomerAType
     * $customer
     */
    private $customer = null;

    /**
     * @property \MainlyCode\Reeleezee\ValueObject\ImportResultType\VendorAType $vendor
     */
    private $vendor = null;

    /**
     * @property \MainlyCode\Reeleezee\ValueObject\ImportResultType\EmployeeAType
     * $employee
     */
    private $employee = null;

    /**
     * @property \MainlyCode\Reeleezee\ValueObject\ImportResultType\SalesInvoiceAType
     * $salesInvoice
     */
    private $salesInvoice = null;

    /**
     * @property
     * \MainlyCode\Reeleezee\ValueObject\ImportResultType\PurchaseInvoiceAType
     * $purchaseInvoice
     */
    private $purchaseInvoice = null;

    /**
     * @property \MainlyCode\Reeleezee\ValueObject\ImportResultType\ManualJournalAType
     * $manualJournal
     */
    private $manualJournal = null;

    /**
     * @property \MainlyCode\Reeleezee\ValueObject\ImportResultType\ProductAType
     * $product
     */
    private $product = null;

    /**
     * @property \MainlyCode\Reeleezee\ValueObject\ImportResultType\AccountAType
     * $account
     */
    private $account = null;

    /**
     * @property \MainlyCode\Reeleezee\ValueObject\ImportResultType\DossierFileAType
     * $dossierFile
     */
    private $dossierFile = null;

    /**
     * Gets as processedDateTime
     *
     * @return \DateTime
     */
    public function getProcessedDateTime()
    {
        return $this->processedDateTime;
    }

    /**
     * Sets a new processedDateTime
     *
     * @param \DateTime $processedDateTime
     * @return self
     */
    public function setProcessedDateTime(\DateTime $processedDateTime)
    {
        $this->processedDateTime = $processedDateTime;
        return $this;
    }

    /**
     * Gets as succeeded
     *
     * @return boolean
     */
    public function getSucceeded()
    {
        return $this->succeeded;
    }

    /**
     * Sets a new succeeded
     *
     * @param boolean $succeeded
     * @return self
     */
    public function setSucceeded($succeeded)
    {
        $this->succeeded = $succeeded;
        return $this;
    }

    /**
     * Gets as exportInfo
     *
     * Informatie over de export
     *
     * @return \MainlyCode\Reeleezee\ValueObject\ExportInfoType
     */
    public function getExportInfo()
    {
        return $this->exportInfo;
    }

    /**
     * Sets a new exportInfo
     *
     * Informatie over de export
     *
     * @param \MainlyCode\Reeleezee\ValueObject\ExportInfoType $exportInfo
     * @return self
     */
    public function setExportInfo(\MainlyCode\Reeleezee\ValueObject\ExportInfoType $exportInfo)
    {
        $this->exportInfo = $exportInfo;
        return $this;
    }

    /**
     * Gets as maxMessage
     *
     * @return \MainlyCode\Reeleezee\ValueObject\ImportResultType\MaxMessageAType
     */
    public function getMaxMessage()
    {
        return $this->maxMessage;
    }

    /**
     * Sets a new maxMessage
     *
     * @param \MainlyCode\Reeleezee\ValueObject\ImportResultType\MaxMessageAType
     * $maxMessage
     * @return self
     */
    public function setMaxMessage(\MainlyCode\Reeleezee\ValueObject\ImportResultType\MaxMessageAType $maxMessage)
    {
        $this->maxMessage = $maxMessage;
        return $this;
    }

    /**
     * Adds as message
     *
     * @return self
     * @param \MainlyCode\Reeleezee\ValueObject\MessageListType\MessageAType $message
     */
    public function addToMessageList(\MainlyCode\Reeleezee\ValueObject\MessageListType\MessageAType $message)
    {
        $this->messageList[] = $message;
        return $this;
    }

    /**
     * isset messageList
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMessageList($index)
    {
        return isset($this->messageList[$index]);
    }

    /**
     * unset messageList
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMessageList($index)
    {
        unset($this->messageList[$index]);
    }

    /**
     * Gets as messageList
     *
     * @return \MainlyCode\Reeleezee\ValueObject\MessageListType\MessageAType[]
     */
    public function getMessageList()
    {
        return $this->messageList;
    }

    /**
     * Sets a new messageList
     *
     * @param \MainlyCode\Reeleezee\ValueObject\MessageListType\MessageAType[]
     * $messageList
     * @return self
     */
    public function setMessageList(array $messageList)
    {
        $this->messageList = $messageList;
        return $this;
    }

    /**
     * Gets as person
     *
     * @return \MainlyCode\Reeleezee\ValueObject\ImportResultType\PersonAType
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * Sets a new person
     *
     * @param \MainlyCode\Reeleezee\ValueObject\ImportResultType\PersonAType $person
     * @return self
     */
    public function setPerson(\MainlyCode\Reeleezee\ValueObject\ImportResultType\PersonAType $person)
    {
        $this->person = $person;
        return $this;
    }

    /**
     * Gets as customer
     *
     * @return \MainlyCode\Reeleezee\ValueObject\ImportResultType\CustomerAType
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Sets a new customer
     *
     * @param \MainlyCode\Reeleezee\ValueObject\ImportResultType\CustomerAType
     * $customer
     * @return self
     */
    public function setCustomer(\MainlyCode\Reeleezee\ValueObject\ImportResultType\CustomerAType $customer)
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * Gets as vendor
     *
     * @return \MainlyCode\Reeleezee\ValueObject\ImportResultType\VendorAType
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * Sets a new vendor
     *
     * @param \MainlyCode\Reeleezee\ValueObject\ImportResultType\VendorAType $vendor
     * @return self
     */
    public function setVendor(\MainlyCode\Reeleezee\ValueObject\ImportResultType\VendorAType $vendor)
    {
        $this->vendor = $vendor;
        return $this;
    }

    /**
     * Gets as employee
     *
     * @return \MainlyCode\Reeleezee\ValueObject\ImportResultType\EmployeeAType
     */
    public function getEmployee()
    {
        return $this->employee;
    }

    /**
     * Sets a new employee
     *
     * @param \MainlyCode\Reeleezee\ValueObject\ImportResultType\EmployeeAType
     * $employee
     * @return self
     */
    public function setEmployee(\MainlyCode\Reeleezee\ValueObject\ImportResultType\EmployeeAType $employee)
    {
        $this->employee = $employee;
        return $this;
    }

    /**
     * Gets as salesInvoice
     *
     * @return \MainlyCode\Reeleezee\ValueObject\ImportResultType\SalesInvoiceAType
     */
    public function getSalesInvoice()
    {
        return $this->salesInvoice;
    }

    /**
     * Sets a new salesInvoice
     *
     * @param \MainlyCode\Reeleezee\ValueObject\ImportResultType\SalesInvoiceAType
     * $salesInvoice
     * @return self
     */
    public function setSalesInvoice(\MainlyCode\Reeleezee\ValueObject\ImportResultType\SalesInvoiceAType $salesInvoice)
    {
        $this->salesInvoice = $salesInvoice;
        return $this;
    }

    /**
     * Gets as purchaseInvoice
     *
     * @return \MainlyCode\Reeleezee\ValueObject\ImportResultType\PurchaseInvoiceAType
     */
    public function getPurchaseInvoice()
    {
        return $this->purchaseInvoice;
    }

    /**
     * Sets a new purchaseInvoice
     *
     * @param \MainlyCode\Reeleezee\ValueObject\ImportResultType\PurchaseInvoiceAType
     * $purchaseInvoice
     * @return self
     */
    public function setPurchaseInvoice(\MainlyCode\Reeleezee\ValueObject\ImportResultType\PurchaseInvoiceAType $purchaseInvoice)
    {
        $this->purchaseInvoice = $purchaseInvoice;
        return $this;
    }

    /**
     * Gets as manualJournal
     *
     * @return \MainlyCode\Reeleezee\ValueObject\ImportResultType\ManualJournalAType
     */
    public function getManualJournal()
    {
        return $this->manualJournal;
    }

    /**
     * Sets a new manualJournal
     *
     * @param \MainlyCode\Reeleezee\ValueObject\ImportResultType\ManualJournalAType
     * $manualJournal
     * @return self
     */
    public function setManualJournal(\MainlyCode\Reeleezee\ValueObject\ImportResultType\ManualJournalAType $manualJournal)
    {
        $this->manualJournal = $manualJournal;
        return $this;
    }

    /**
     * Gets as product
     *
     * @return \MainlyCode\Reeleezee\ValueObject\ImportResultType\ProductAType
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Sets a new product
     *
     * @param \MainlyCode\Reeleezee\ValueObject\ImportResultType\ProductAType $product
     * @return self
     */
    public function setProduct(\MainlyCode\Reeleezee\ValueObject\ImportResultType\ProductAType $product)
    {
        $this->product = $product;
        return $this;
    }

    /**
     * Gets as account
     *
     * @return \MainlyCode\Reeleezee\ValueObject\ImportResultType\AccountAType
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Sets a new account
     *
     * @param \MainlyCode\Reeleezee\ValueObject\ImportResultType\AccountAType $account
     * @return self
     */
    public function setAccount(\MainlyCode\Reeleezee\ValueObject\ImportResultType\AccountAType $account)
    {
        $this->account = $account;
        return $this;
    }

    /**
     * Gets as dossierFile
     *
     * @return \MainlyCode\Reeleezee\ValueObject\ImportResultType\DossierFileAType
     */
    public function getDossierFile()
    {
        return $this->dossierFile;
    }

    /**
     * Sets a new dossierFile
     *
     * @param \MainlyCode\Reeleezee\ValueObject\ImportResultType\DossierFileAType
     * $dossierFile
     * @return self
     */
    public function setDossierFile(\MainlyCode\Reeleezee\ValueObject\ImportResultType\DossierFileAType $dossierFile)
    {
        $this->dossierFile = $dossierFile;
        return $this;
    }


}

