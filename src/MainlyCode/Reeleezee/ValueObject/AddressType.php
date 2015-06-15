<?php

namespace MainlyCode\Reeleezee\ValueObject;

/**
 * Class representing AddressType
 *
 *
 * XSD Type: AddressType
 */
class AddressType
{

    /**
     * Straatnaam
     *
     * @property string $street
     */
    private $street = null;

    /**
     * Huisnummer + Huisnummer toevoeging
     *
     * @property string $number
     */
    private $number = null;

    /**
     * Postcode
     *
     * @property string $zipcode
     */
    private $zipcode = null;

    /**
     * Woonplaats
     *
     * @property string $city
     */
    private $city = null;

    /**
     * Landcode
     *
     * @property string $countryCode
     */
    private $countryCode = null;

    /**
     * Gets as street
     *
     * Straatnaam
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Sets a new street
     *
     * Straatnaam
     *
     * @param string $street
     * @return self
     */
    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }

    /**
     * Gets as number
     *
     * Huisnummer + Huisnummer toevoeging
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
     * Huisnummer + Huisnummer toevoeging
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
     * Gets as zipcode
     *
     * Postcode
     *
     * @return string
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * Sets a new zipcode
     *
     * Postcode
     *
     * @param string $zipcode
     * @return self
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;
        return $this;
    }

    /**
     * Gets as city
     *
     * Woonplaats
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
     * Woonplaats
     *
     * @param string $city
     * @return self
     */
    public function setCity($city)
    {
        $this->city = $city;
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


}

