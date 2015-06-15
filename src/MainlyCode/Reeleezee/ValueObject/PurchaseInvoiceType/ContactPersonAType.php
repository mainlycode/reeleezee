<?php

namespace MainlyCode\Reeleezee\ValueObject\PurchaseInvoiceType;

/**
 * Class representing ContactPersonAType
 */
class ContactPersonAType
{

    /**
     * Persoonnummer
     *
     * @property integer $iD
     */
    private $iD = null;

    /**
     * Burger Service Nummer
     *
     * @property string $socialSecurityNumber
     */
    private $socialSecurityNumber = null;

    /**
     * Gets as iD
     *
     * Persoonnummer
     *
     * @return integer
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * Persoonnummer
     *
     * @param integer $iD
     * @return self
     */
    public function setID($iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as socialSecurityNumber
     *
     * Burger Service Nummer
     *
     * @return string
     */
    public function getSocialSecurityNumber()
    {
        return $this->socialSecurityNumber;
    }

    /**
     * Sets a new socialSecurityNumber
     *
     * Burger Service Nummer
     *
     * @param string $socialSecurityNumber
     * @return self
     */
    public function setSocialSecurityNumber($socialSecurityNumber)
    {
        $this->socialSecurityNumber = $socialSecurityNumber;
        return $this;
    }


}

