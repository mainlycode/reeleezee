<?php

namespace MainlyCode\Reeleezee\ValueObject;

/**
 * Class representing BankAccountType
 *
 * Entity payment account
 * XSD Type: BankAccountType
 */
class BankAccountType
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
     * Indicates that this payment account is the default for this entity.
     *
     * @property boolean $isDefault
     */
    private $isDefault = null;

    /**
     * Business Identifier Code
     *
     * @property string $bIC
     */
    private $bIC = null;

    /**
     * Naam rekeninghouder
     *
     * @property string $payee
     */
    private $payee = null;

    /**
     * Landcode
     *
     * @property string $countryCode
     */
    private $countryCode = null;

    /**
     * Plaats
     *
     * @property string $city
     */
    private $city = null;

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

    /**
     * Gets as isDefault
     *
     * Indicates that this payment account is the default for this entity.
     *
     * @return boolean
     */
    public function getIsDefault()
    {
        return $this->isDefault;
    }

    /**
     * Sets a new isDefault
     *
     * Indicates that this payment account is the default for this entity.
     *
     * @param boolean $isDefault
     * @return self
     */
    public function setIsDefault($isDefault)
    {
        $this->isDefault = $isDefault;
        return $this;
    }

    /**
     * Gets as bIC
     *
     * Business Identifier Code
     *
     * @return string
     */
    public function getBIC()
    {
        return $this->bIC;
    }

    /**
     * Sets a new bIC
     *
     * Business Identifier Code
     *
     * @param string $bIC
     * @return self
     */
    public function setBIC($bIC)
    {
        $this->bIC = $bIC;
        return $this;
    }

    /**
     * Gets as payee
     *
     * Naam rekeninghouder
     *
     * @return string
     */
    public function getPayee()
    {
        return $this->payee;
    }

    /**
     * Sets a new payee
     *
     * Naam rekeninghouder
     *
     * @param string $payee
     * @return self
     */
    public function setPayee($payee)
    {
        $this->payee = $payee;
        return $this;
    }

    /**
     * Gets as countryCode
     *
     * Landcode
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Sets a new countryCode
     *
     * Landcode
     *
     * @param string $countryCode
     * @return self
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * Gets as city
     *
     * Plaats
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Sets a new city
     *
     * Plaats
     *
     * @param string $city
     * @return self
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }


}

