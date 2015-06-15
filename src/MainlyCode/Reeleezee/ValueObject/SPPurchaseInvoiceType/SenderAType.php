<?php

namespace MainlyCode\Reeleezee\ValueObject\SPPurchaseInvoiceType;

/**
 * Class representing SenderAType
 */
class SenderAType
{

    /**
     * Naam
     *
     * @property string $fullName
     */
    private $fullName = null;

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
     * Telefoonnummer
     *
     * @property string $phoneNumber
     */
    private $phoneNumber = null;

    /**
     * Faxnummer
     *
     * @property string $faxNumber
     */
    private $faxNumber = null;

    /**
     * E-mailadres
     *
     * @property string $emailAddress
     */
    private $emailAddress = null;

    /**
     * KvK nummer
     *
     * @property string $chamberOfCommerceNumber
     */
    private $chamberOfCommerceNumber = null;

    /**
     * Aangiftenummer OB
     *
     * @property string $taxDepositOBNumber
     */
    private $taxDepositOBNumber = null;

    /**
     * Banknaam
     *
     * @property string $bankName
     */
    private $bankName = null;

    /**
     * Bankrekeningnummer
     *
     * @property string $bankAccountNumber
     */
    private $bankAccountNumber = null;

    /**
     * IBAN
     *
     * @property string $internationalBankAccountNumber
     */
    private $internationalBankAccountNumber = null;

    /**
     * Gets as fullName
     *
     * Naam
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * Sets a new fullName
     *
     * Naam
     *
     * @param string $fullName
     * @return self
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
        return $this;
    }

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

    /**
     * Gets as phoneNumber
     *
     * Telefoonnummer
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Sets a new phoneNumber
     *
     * Telefoonnummer
     *
     * @param string $phoneNumber
     * @return self
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * Gets as faxNumber
     *
     * Faxnummer
     *
     * @return string
     */
    public function getFaxNumber()
    {
        return $this->faxNumber;
    }

    /**
     * Sets a new faxNumber
     *
     * Faxnummer
     *
     * @param string $faxNumber
     * @return self
     */
    public function setFaxNumber($faxNumber)
    {
        $this->faxNumber = $faxNumber;
        return $this;
    }

    /**
     * Gets as emailAddress
     *
     * E-mailadres
     *
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * Sets a new emailAddress
     *
     * E-mailadres
     *
     * @param string $emailAddress
     * @return self
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }

    /**
     * Gets as chamberOfCommerceNumber
     *
     * KvK nummer
     *
     * @return string
     */
    public function getChamberOfCommerceNumber()
    {
        return $this->chamberOfCommerceNumber;
    }

    /**
     * Sets a new chamberOfCommerceNumber
     *
     * KvK nummer
     *
     * @param string $chamberOfCommerceNumber
     * @return self
     */
    public function setChamberOfCommerceNumber($chamberOfCommerceNumber)
    {
        $this->chamberOfCommerceNumber = $chamberOfCommerceNumber;
        return $this;
    }

    /**
     * Gets as taxDepositOBNumber
     *
     * Aangiftenummer OB
     *
     * @return string
     */
    public function getTaxDepositOBNumber()
    {
        return $this->taxDepositOBNumber;
    }

    /**
     * Sets a new taxDepositOBNumber
     *
     * Aangiftenummer OB
     *
     * @param string $taxDepositOBNumber
     * @return self
     */
    public function setTaxDepositOBNumber($taxDepositOBNumber)
    {
        $this->taxDepositOBNumber = $taxDepositOBNumber;
        return $this;
    }

    /**
     * Gets as bankName
     *
     * Banknaam
     *
     * @return string
     */
    public function getBankName()
    {
        return $this->bankName;
    }

    /**
     * Sets a new bankName
     *
     * Banknaam
     *
     * @param string $bankName
     * @return self
     */
    public function setBankName($bankName)
    {
        $this->bankName = $bankName;
        return $this;
    }

    /**
     * Gets as bankAccountNumber
     *
     * Bankrekeningnummer
     *
     * @return string
     */
    public function getBankAccountNumber()
    {
        return $this->bankAccountNumber;
    }

    /**
     * Sets a new bankAccountNumber
     *
     * Bankrekeningnummer
     *
     * @param string $bankAccountNumber
     * @return self
     */
    public function setBankAccountNumber($bankAccountNumber)
    {
        $this->bankAccountNumber = $bankAccountNumber;
        return $this;
    }

    /**
     * Gets as internationalBankAccountNumber
     *
     * IBAN
     *
     * @return string
     */
    public function getInternationalBankAccountNumber()
    {
        return $this->internationalBankAccountNumber;
    }

    /**
     * Sets a new internationalBankAccountNumber
     *
     * IBAN
     *
     * @param string $internationalBankAccountNumber
     * @return self
     */
    public function setInternationalBankAccountNumber($internationalBankAccountNumber)
    {
        $this->internationalBankAccountNumber = $internationalBankAccountNumber;
        return $this;
    }


}

