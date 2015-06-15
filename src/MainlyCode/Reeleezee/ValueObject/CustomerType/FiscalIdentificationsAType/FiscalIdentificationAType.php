<?php

namespace MainlyCode\Reeleezee\ValueObject\CustomerType\FiscalIdentificationsAType;

/**
 * Class representing FiscalIdentificationAType
 */
class FiscalIdentificationAType
{

    /**
     * @property string $number
     */
    private $number = null;

    /**
     * Gets as number
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
     * @param string $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }


}

