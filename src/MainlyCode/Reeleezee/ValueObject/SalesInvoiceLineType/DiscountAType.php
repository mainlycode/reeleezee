<?php

namespace MainlyCode\Reeleezee\ValueObject\SalesInvoiceLineType;

/**
 * Class representing DiscountAType
 */
class DiscountAType
{

    /**
     * Kortingspercentage
     *
     * @property float $percentage
     */
    private $percentage = null;

    /**
     * Kortingsbedrag
     *
     * @property float $amount
     */
    private $amount = null;

    /**
     * Gets as percentage
     *
     * Kortingspercentage
     *
     * @return float
     */
    public function getPercentage()
    {
        return $this->percentage;
    }

    /**
     * Sets a new percentage
     *
     * Kortingspercentage
     *
     * @param float $percentage
     * @return self
     */
    public function setPercentage($percentage)
    {
        $this->percentage = $percentage;
        return $this;
    }

    /**
     * Gets as amount
     *
     * Kortingsbedrag
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
     * Kortingsbedrag
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

