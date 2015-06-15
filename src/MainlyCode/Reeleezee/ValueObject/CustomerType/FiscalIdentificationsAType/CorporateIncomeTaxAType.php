<?php

namespace MainlyCode\Reeleezee\ValueObject\CustomerType\FiscalIdentificationsAType;

/**
 * Class representing CorporateIncomeTaxAType
 */
class CorporateIncomeTaxAType
{

    /**
     * @property string $number
     */
    private $number = null;

    /**
     * Aangifte periode
     *
     * @property string $declarationPeriod
     */
    private $declarationPeriod = null;

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

    /**
     * Gets as declarationPeriod
     *
     * Aangifte periode
     *
     * @return string
     */
    public function getDeclarationPeriod()
    {
        return $this->declarationPeriod;
    }

    /**
     * Sets a new declarationPeriod
     *
     * Aangifte periode
     *
     * @param string $declarationPeriod
     * @return self
     */
    public function setDeclarationPeriod($declarationPeriod)
    {
        $this->declarationPeriod = $declarationPeriod;
        return $this;
    }


}

