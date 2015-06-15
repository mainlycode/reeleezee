<?php

namespace MainlyCode\Reeleezee\ValueObject\SPPurchaseInvoiceType;

/**
 * Class representing VatPercentageListAType
 */
class VatPercentageListAType
{

    /**
     * BTW percentage
     *
     * @property float[] $vatPercentage
     */
    private $vatPercentage = null;

    /**
     * Adds as vatPercentage
     *
     * BTW percentage
     *
     * @return self
     * @param float $vatPercentage
     */
    public function addToVatPercentage($vatPercentage)
    {
        $this->vatPercentage[] = $vatPercentage;
        return $this;
    }

    /**
     * isset vatPercentage
     *
     * BTW percentage
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetVatPercentage($index)
    {
        return isset($this->vatPercentage[$index]);
    }

    /**
     * unset vatPercentage
     *
     * BTW percentage
     *
     * @param scalar $index
     * @return void
     */
    public function unsetVatPercentage($index)
    {
        unset($this->vatPercentage[$index]);
    }

    /**
     * Gets as vatPercentage
     *
     * BTW percentage
     *
     * @return float[]
     */
    public function getVatPercentage()
    {
        return $this->vatPercentage;
    }

    /**
     * Sets a new vatPercentage
     *
     * BTW percentage
     *
     * @param float $vatPercentage
     * @return self
     */
    public function setVatPercentage(array $vatPercentage)
    {
        $this->vatPercentage = $vatPercentage;
        return $this;
    }


}

