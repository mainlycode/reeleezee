<?php

namespace MainlyCode\Reeleezee\ValueObject;

/**
 * Class representing PersonType
 *
 *
 * XSD Type: PersonType
 */
class PersonType
{

    /**
     * Person id
     *
     * @property integer $iD
     */
    private $iD = null;

    /**
     * Social security number
     *
     * @property string $socialSecurityNumber
     */
    private $socialSecurityNumber = null;

    /**
     * Person code
     *
     * @property string $code
     */
    private $code = null;

    /**
     * DO NOT USE !
     *
     * @property string $internalRlzID
     */
    private $internalRlzID = null;

    /**
     * Zoeknaam
     *
     * @property string $searchName
     */
    private $searchName = null;

    /**
     * Voorletters
     *
     * @property string $initials
     */
    private $initials = null;

    /**
     * Voornaam
     *
     * @property string $firstName
     */
    private $firstName = null;

    /**
     * Tussenvoegsel
     *
     * @property string $lastNamePrefix
     */
    private $lastNamePrefix = null;

    /**
     * Achternaam
     *
     * @property string $lastName
     */
    private $lastName = null;

    /**
     * Geslacht
     *
     * @property string $gender
     */
    private $gender = null;

    /**
     * Telefoonnummer
     *
     * @property string $phoneNumber
     */
    private $phoneNumber = null;

    /**
     * Mobiel telefoonnummer
     *
     * @property string $mobilePhoneNumber
     */
    private $mobilePhoneNumber = null;

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
     * @property
     * \MainlyCode\Reeleezee\ValueObject\PersonType\AddressListAType\AddressAType[]
     * $addressList
     */
    private $addressList = null;

    /**
     * Login gegevens
     *
     * @property \MainlyCode\Reeleezee\ValueObject\LoginType $login
     */
    private $login = null;

    /**
     * @property \MainlyCode\Reeleezee\ValueObject\CategoryListType $categoryList
     */
    private $categoryList = null;

    /**
     * Rechten
     *
     * @property \MainlyCode\Reeleezee\ValueObject\PersonType\PermissionsAType
     * $permissions
     */
    private $permissions = null;

    /**
     * @property \MainlyCode\Reeleezee\ValueObject\PersonType\RelationListAType
     * $relationList
     */
    private $relationList = null;

    /**
     * Gets as iD
     *
     * Person id
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
     * Person id
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
     * Social security number
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
     * Social security number
     *
     * @param string $socialSecurityNumber
     * @return self
     */
    public function setSocialSecurityNumber($socialSecurityNumber)
    {
        $this->socialSecurityNumber = $socialSecurityNumber;
        return $this;
    }

    /**
     * Gets as code
     *
     * Person code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Person code
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as internalRlzID
     *
     * DO NOT USE !
     *
     * @return string
     */
    public function getInternalRlzID()
    {
        return $this->internalRlzID;
    }

    /**
     * Sets a new internalRlzID
     *
     * DO NOT USE !
     *
     * @param string $internalRlzID
     * @return self
     */
    public function setInternalRlzID($internalRlzID)
    {
        $this->internalRlzID = $internalRlzID;
        return $this;
    }

    /**
     * Gets as searchName
     *
     * Zoeknaam
     *
     * @return string
     */
    public function getSearchName()
    {
        return $this->searchName;
    }

    /**
     * Sets a new searchName
     *
     * Zoeknaam
     *
     * @param string $searchName
     * @return self
     */
    public function setSearchName($searchName)
    {
        $this->searchName = $searchName;
        return $this;
    }

    /**
     * Gets as initials
     *
     * Voorletters
     *
     * @return string
     */
    public function getInitials()
    {
        return $this->initials;
    }

    /**
     * Sets a new initials
     *
     * Voorletters
     *
     * @param string $initials
     * @return self
     */
    public function setInitials($initials)
    {
        $this->initials = $initials;
        return $this;
    }

    /**
     * Gets as firstName
     *
     * Voornaam
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Sets a new firstName
     *
     * Voornaam
     *
     * @param string $firstName
     * @return self
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * Gets as lastNamePrefix
     *
     * Tussenvoegsel
     *
     * @return string
     */
    public function getLastNamePrefix()
    {
        return $this->lastNamePrefix;
    }

    /**
     * Sets a new lastNamePrefix
     *
     * Tussenvoegsel
     *
     * @param string $lastNamePrefix
     * @return self
     */
    public function setLastNamePrefix($lastNamePrefix)
    {
        $this->lastNamePrefix = $lastNamePrefix;
        return $this;
    }

    /**
     * Gets as lastName
     *
     * Achternaam
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Sets a new lastName
     *
     * Achternaam
     *
     * @param string $lastName
     * @return self
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * Gets as gender
     *
     * Geslacht
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Sets a new gender
     *
     * Geslacht
     *
     * @param string $gender
     * @return self
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
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
     * Gets as mobilePhoneNumber
     *
     * Mobiel telefoonnummer
     *
     * @return string
     */
    public function getMobilePhoneNumber()
    {
        return $this->mobilePhoneNumber;
    }

    /**
     * Sets a new mobilePhoneNumber
     *
     * Mobiel telefoonnummer
     *
     * @param string $mobilePhoneNumber
     * @return self
     */
    public function setMobilePhoneNumber($mobilePhoneNumber)
    {
        $this->mobilePhoneNumber = $mobilePhoneNumber;
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
     * Adds as address
     *
     * @return self
     * @param
     * \MainlyCode\Reeleezee\ValueObject\PersonType\AddressListAType\AddressAType
     * $address
     */
    public function addToAddressList(\MainlyCode\Reeleezee\ValueObject\PersonType\AddressListAType\AddressAType $address)
    {
        $this->addressList[] = $address;
        return $this;
    }

    /**
     * isset addressList
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAddressList($index)
    {
        return isset($this->addressList[$index]);
    }

    /**
     * unset addressList
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAddressList($index)
    {
        unset($this->addressList[$index]);
    }

    /**
     * Gets as addressList
     *
     * @return
     * \MainlyCode\Reeleezee\ValueObject\PersonType\AddressListAType\AddressAType[]
     */
    public function getAddressList()
    {
        return $this->addressList;
    }

    /**
     * Sets a new addressList
     *
     * @param
     * \MainlyCode\Reeleezee\ValueObject\PersonType\AddressListAType\AddressAType[]
     * $addressList
     * @return self
     */
    public function setAddressList(array $addressList)
    {
        $this->addressList = $addressList;
        return $this;
    }

    /**
     * Gets as login
     *
     * Login gegevens
     *
     * @return \MainlyCode\Reeleezee\ValueObject\LoginType
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Sets a new login
     *
     * Login gegevens
     *
     * @param \MainlyCode\Reeleezee\ValueObject\LoginType $login
     * @return self
     */
    public function setLogin(\MainlyCode\Reeleezee\ValueObject\LoginType $login)
    {
        $this->login = $login;
        return $this;
    }

    /**
     * Gets as categoryList
     *
     * @return \MainlyCode\Reeleezee\ValueObject\CategoryListType
     */
    public function getCategoryList()
    {
        return $this->categoryList;
    }

    /**
     * Sets a new categoryList
     *
     * @param \MainlyCode\Reeleezee\ValueObject\CategoryListType $categoryList
     * @return self
     */
    public function setCategoryList(\MainlyCode\Reeleezee\ValueObject\CategoryListType $categoryList)
    {
        $this->categoryList = $categoryList;
        return $this;
    }

    /**
     * Gets as permissions
     *
     * Rechten
     *
     * @return \MainlyCode\Reeleezee\ValueObject\PersonType\PermissionsAType
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * Sets a new permissions
     *
     * Rechten
     *
     * @param \MainlyCode\Reeleezee\ValueObject\PersonType\PermissionsAType
     * $permissions
     * @return self
     */
    public function setPermissions(\MainlyCode\Reeleezee\ValueObject\PersonType\PermissionsAType $permissions)
    {
        $this->permissions = $permissions;
        return $this;
    }

    /**
     * Gets as relationList
     *
     * @return \MainlyCode\Reeleezee\ValueObject\PersonType\RelationListAType
     */
    public function getRelationList()
    {
        return $this->relationList;
    }

    /**
     * Sets a new relationList
     *
     * @param \MainlyCode\Reeleezee\ValueObject\PersonType\RelationListAType
     * $relationList
     * @return self
     */
    public function setRelationList(\MainlyCode\Reeleezee\ValueObject\PersonType\RelationListAType $relationList)
    {
        $this->relationList = $relationList;
        return $this;
    }


}

