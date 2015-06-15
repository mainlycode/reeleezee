<?php

namespace MainlyCode\Reeleezee\ValueObject\CustomerType;

/**
 * Class representing DefaultInvoiceSendMethodAType
 */
class DefaultInvoiceSendMethodAType
{

    /**
     * By normal postal address
     *
     * @property
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\DefaultInvoiceSendMethodAType\AddressReferenceAType
     * $addressReference
     */
    private $addressReference = null;

    /**
     * By e-mail. The e-mail address will be added to the customer if it doesn't exist.
     *
     * @property
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\DefaultInvoiceSendMethodAType\EmailAddressReferenceAType
     * $emailAddressReference
     */
    private $emailAddressReference = null;

    /**
     * Gets as addressReference
     *
     * By normal postal address
     *
     * @return
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\DefaultInvoiceSendMethodAType\AddressReferenceAType
     */
    public function getAddressReference()
    {
        return $this->addressReference;
    }

    /**
     * Sets a new addressReference
     *
     * By normal postal address
     *
     * @param
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\DefaultInvoiceSendMethodAType\AddressReferenceAType
     * $addressReference
     * @return self
     */
    public function setAddressReference(\MainlyCode\Reeleezee\ValueObject\CustomerType\DefaultInvoiceSendMethodAType\AddressReferenceAType $addressReference)
    {
        $this->addressReference = $addressReference;
        return $this;
    }

    /**
     * Gets as emailAddressReference
     *
     * By e-mail. The e-mail address will be added to the customer if it doesn't exist.
     *
     * @return
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\DefaultInvoiceSendMethodAType\EmailAddressReferenceAType
     */
    public function getEmailAddressReference()
    {
        return $this->emailAddressReference;
    }

    /**
     * Sets a new emailAddressReference
     *
     * By e-mail. The e-mail address will be added to the customer if it doesn't exist.
     *
     * @param
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\DefaultInvoiceSendMethodAType\EmailAddressReferenceAType
     * $emailAddressReference
     * @return self
     */
    public function setEmailAddressReference(\MainlyCode\Reeleezee\ValueObject\CustomerType\DefaultInvoiceSendMethodAType\EmailAddressReferenceAType $emailAddressReference)
    {
        $this->emailAddressReference = $emailAddressReference;
        return $this;
    }


}

