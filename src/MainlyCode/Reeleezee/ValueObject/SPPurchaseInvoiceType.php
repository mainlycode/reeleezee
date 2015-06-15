<?php

namespace MainlyCode\Reeleezee\ValueObject;

/**
 * Class representing SPPurchaseInvoiceType
 *
 *
 * XSD Type: SP_PurchaseInvoiceType
 */
class SPPurchaseInvoiceType
{

    /**
     * Zender
     *
     * @property \MainlyCode\Reeleezee\ValueObject\SPPurchaseInvoiceType\SenderAType
     * $sender
     */
    private $sender = null;

    /**
     * Ontvanger
     *
     * @property \MainlyCode\Reeleezee\ValueObject\SPPurchaseInvoiceType\RecipientAType
     * $recipient
     */
    private $recipient = null;

    /**
     * Nummer
     *
     * @property string $number
     */
    private $number = null;

    /**
     * Betreft
     *
     * @property string $reference
     */
    private $reference = null;

    /**
     * Document datum
     *
     * @property \DateTime $documentDate
     */
    private $documentDate = null;

    /**
     * Datum betalingstermijn verstreken
     *
     * @property \DateTime $paymentDueDate
     */
    private $paymentDueDate = null;

    /**
     * Bruto bedrag
     *
     * @property float $grossAmount
     */
    private $grossAmount = null;

    /**
     * Netto bedrag
     *
     * @property float $netAmount
     */
    private $netAmount = null;

    /**
     * BTW bedrag
     *
     * @property float $vatAmount
     */
    private $vatAmount = null;

    /**
     * @property float[] $vatPercentageList
     */
    private $vatPercentageList = null;

    /**
     * Bestandsnaam ingescand document
     *
     * @property string $fileNameScan
     */
    private $fileNameScan = null;

    /**
     * Gets as sender
     *
     * Zender
     *
     * @return \MainlyCode\Reeleezee\ValueObject\SPPurchaseInvoiceType\SenderAType
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * Sets a new sender
     *
     * Zender
     *
     * @param \MainlyCode\Reeleezee\ValueObject\SPPurchaseInvoiceType\SenderAType
     * $sender
     * @return self
     */
    public function setSender(\MainlyCode\Reeleezee\ValueObject\SPPurchaseInvoiceType\SenderAType $sender)
    {
        $this->sender = $sender;
        return $this;
    }

    /**
     * Gets as recipient
     *
     * Ontvanger
     *
     * @return \MainlyCode\Reeleezee\ValueObject\SPPurchaseInvoiceType\RecipientAType
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * Sets a new recipient
     *
     * Ontvanger
     *
     * @param \MainlyCode\Reeleezee\ValueObject\SPPurchaseInvoiceType\RecipientAType
     * $recipient
     * @return self
     */
    public function setRecipient(\MainlyCode\Reeleezee\ValueObject\SPPurchaseInvoiceType\RecipientAType $recipient)
    {
        $this->recipient = $recipient;
        return $this;
    }

    /**
     * Gets as number
     *
     * Nummer
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * Nummer
     *
     * @param string $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * Gets as reference
     *
     * Betreft
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
     * Betreft
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
     * Gets as grossAmount
     *
     * Bruto bedrag
     *
     * @return float
     */
    public function getGrossAmount()
    {
        return $this->grossAmount;
    }

    /**
     * Sets a new grossAmount
     *
     * Bruto bedrag
     *
     * @param float $grossAmount
     * @return self
     */
    public function setGrossAmount($grossAmount)
    {
        $this->grossAmount = $grossAmount;
        return $this;
    }

    /**
     * Gets as netAmount
     *
     * Netto bedrag
     *
     * @return float
     */
    public function getNetAmount()
    {
        return $this->netAmount;
    }

    /**
     * Sets a new netAmount
     *
     * Netto bedrag
     *
     * @param float $netAmount
     * @return self
     */
    public function setNetAmount($netAmount)
    {
        $this->netAmount = $netAmount;
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
     * Adds as vatPercentage
     *
     * @return self
     * @param float $vatPercentage
     */
    public function addToVatPercentageList($vatPercentage)
    {
        $this->vatPercentageList[] = $vatPercentage;
        return $this;
    }

    /**
     * isset vatPercentageList
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetVatPercentageList($index)
    {
        return isset($this->vatPercentageList[$index]);
    }

    /**
     * unset vatPercentageList
     *
     * @param scalar $index
     * @return void
     */
    public function unsetVatPercentageList($index)
    {
        unset($this->vatPercentageList[$index]);
    }

    /**
     * Gets as vatPercentageList
     *
     * @return float[]
     */
    public function getVatPercentageList()
    {
        return $this->vatPercentageList;
    }

    /**
     * Sets a new vatPercentageList
     *
     * @param float $vatPercentageList
     * @return self
     */
    public function setVatPercentageList(array $vatPercentageList)
    {
        $this->vatPercentageList = $vatPercentageList;
        return $this;
    }

    /**
     * Gets as fileNameScan
     *
     * Bestandsnaam ingescand document
     *
     * @return string
     */
    public function getFileNameScan()
    {
        return $this->fileNameScan;
    }

    /**
     * Sets a new fileNameScan
     *
     * Bestandsnaam ingescand document
     *
     * @param string $fileNameScan
     * @return self
     */
    public function setFileNameScan($fileNameScan)
    {
        $this->fileNameScan = $fileNameScan;
        return $this;
    }


}

