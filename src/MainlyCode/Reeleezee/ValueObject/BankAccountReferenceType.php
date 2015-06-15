<?php

namespace MainlyCode\Reeleezee\ValueObject;

/**
 * Class representing BankAccountReferenceType
 *
 *
 * XSD Type: BankAccountReferenceType
 */
class BankAccountReferenceType
{

    /**
     * Basic Bank Account Number
     *
     * @property string $bBAN
     */
    private $bBAN = null;

    /**
     * International Bank Account Number
     *
     * @property string $iBAN
     */
    private $iBAN = null;

    /**
     * Gets as bBAN
     *
     * Basic Bank Account Number
     *
     * @return string
     */
    public function getBBAN()
    {
        return $this->bBAN;
    }

    /**
     * Sets a new bBAN
     *
     * Basic Bank Account Number
     *
     * @param string $bBAN
     * @return self
     */
    public function setBBAN($bBAN)
    {
        $this->bBAN = $bBAN;
        return $this;
    }

    /**
     * Gets as iBAN
     *
     * International Bank Account Number
     *
     * @return string
     */
    public function getIBAN()
    {
        return $this->iBAN;
    }

    /**
     * Sets a new iBAN
     *
     * International Bank Account Number
     *
     * @param string $iBAN
     * @return self
     */
    public function setIBAN($iBAN)
    {
        $this->iBAN = $iBAN;
        return $this;
    }


}

