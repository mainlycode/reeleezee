<?php

namespace MainlyCode\Reeleezee\ValueObject;

/**
 * Class representing OpeningbalanceType
 *
 *
 * XSD Type: OpeningbalanceType
 */
class OpeningbalanceType
{

    /**
     * Bedrag
     *
     * @property float $amount
     */
    private $amount = null;

    /**
     * Referentie
     *
     * @property string $reference
     */
    private $reference = null;

    /**
     * Gets as amount
     *
     * Bedrag
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
     * Bedrag
     *
     * @param float $amount
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Gets as reference
     *
     * Referentie
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
     * Referentie
     *
     * @param string $reference
     * @return self
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
        return $this;
    }


}

