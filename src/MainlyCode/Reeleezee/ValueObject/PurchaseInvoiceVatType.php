<?php

namespace MainlyCode\Reeleezee\ValueObject;

/**
 * Class representing PurchaseInvoiceVatType
 *
 *
 * XSD Type: PurchaseInvoiceVatType
 */
class PurchaseInvoiceVatType
{

    /**
     * BTW code
     *
     * @property string $code
     */
    private $code = null;

    /**
     * BTW bedrag
     *
     * @property float $amount
     */
    private $amount = null;

    /**
     * Gets as code
     *
     * BTW code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * BTW code
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as amount
     *
     * BTW bedrag
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
     * BTW bedrag
     *
     * @param float $amount
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }


}

