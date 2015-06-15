<?php

namespace MainlyCode\Reeleezee\ValueObject;

/**
 * Class representing AccountReferenceType
 *
 *
 * XSD Type: AccountReferenceType
 */
class AccountReferenceType
{

    /**
     * Nummer
     *
     * @property string $number
     */
    private $number = null;

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


}

