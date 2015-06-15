<?php

namespace MainlyCode\Reeleezee\ValueObject\CustomerType\DefaultInvoiceSendMethodAType;

/**
 * Class representing EmailAddressReferenceAType
 */
class EmailAddressReferenceAType
{

    /**
     * @property string $emailAddress
     */
    private $emailAddress = null;

    /**
     * Gets as emailAddress
     *
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * Sets a new emailAddress
     *
     * @param string $emailAddress
     * @return self
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }


}

