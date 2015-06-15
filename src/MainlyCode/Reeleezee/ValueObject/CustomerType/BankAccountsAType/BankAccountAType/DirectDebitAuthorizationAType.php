<?php

namespace MainlyCode\Reeleezee\ValueObject\CustomerType\BankAccountsAType\BankAccountAType;

/**
 * Class representing DirectDebitAuthorizationAType
 */
class DirectDebitAuthorizationAType
{

    /**
     * Bankrekening referentie
     *
     * @property
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\BankAccountsAType\BankAccountAType\DirectDebitAuthorizationAType\PaymentAccountReferenceAType
     * $paymentAccountReference
     */
    private $paymentAccountReference = null;

    /**
     * Signature date. Will be set to 11/01/2009 if SignatureDate is omitted or before
     * this date.
     *
     * @property \DateTime $signatureDate
     */
    private $signatureDate = null;

    /**
     * Type
     *
     * @property string $type
     */
    private $type = null;

    /**
     * Mandate ID
     *
     * @property string $mandateID
     */
    private $mandateID = null;

    /**
     * Maximum amount per transaction
     *
     * @property float $maxAmount
     */
    private $maxAmount = null;

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
     * Gets as signatureDate
     *
     * Signature date. Will be set to 11/01/2009 if SignatureDate is omitted or before
     * this date.
     *
     * @return \DateTime
     */
    public function getSignatureDate()
    {
        return $this->signatureDate;
    }

    /**
     * Sets a new signatureDate
     *
     * Signature date. Will be set to 11/01/2009 if SignatureDate is omitted or before
     * this date.
     *
     * @param \DateTime $signatureDate
     * @return self
     */
    public function setSignatureDate(\DateTime $signatureDate)
    {
        $this->signatureDate = $signatureDate;
        return $this;
    }

    /**
     * Gets as type
     *
     * Type
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
     * Type
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
     * Gets as mandateID
     *
     * Mandate ID
     *
     * @return string
     */
    public function getMandateID()
    {
        return $this->mandateID;
    }

    /**
     * Sets a new mandateID
     *
     * Mandate ID
     *
     * @param string $mandateID
     * @return self
     */
    public function setMandateID($mandateID)
    {
        $this->mandateID = $mandateID;
        return $this;
    }

    /**
     * Gets as maxAmount
     *
     * Maximum amount per transaction
     *
     * @return float
     */
    public function getMaxAmount()
    {
        return $this->maxAmount;
    }

    /**
     * Sets a new maxAmount
     *
     * Maximum amount per transaction
     *
     * @param float $maxAmount
     * @return self
     */
    public function setMaxAmount($maxAmount)
    {
        $this->maxAmount = $maxAmount;
        return $this;
    }


}

