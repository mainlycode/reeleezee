<?php

namespace MainlyCode\Reeleezee\ValueObject;

/**
 * Class representing CashRegisterTypeReferenceType
 *
 *
 * XSD Type: CashRegisterTypeReferenceType
 */
class CashRegisterTypeReferenceType
{

    /**
     * Omschrijving
     *
     * @property string $description
     */
    private $description = null;

    /**
     * Gets as description
     *
     * Omschrijving
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Omschrijving
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }


}

