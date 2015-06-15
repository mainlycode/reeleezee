<?php

namespace MainlyCode\Reeleezee\ValueObject;

/**
 * Class representing EmployeeType
 *
 *
 * XSD Type: EmployeeType
 */
class EmployeeType
{

    /**
     * Medewerkernummer
     *
     * @property integer $iD
     */
    private $iD = null;

    /**
     * Medewerkercode
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
     * Medewerker naam
     *
     * @property string $fullName
     */
    private $fullName = null;

    /**
     * Wordt gesorteerd op
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
     * Taalcode
     *
     * @property string $languageCode
     */
    private $languageCode = null;

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
     * Website
     *
     * @property string $websiteAddress
     */
    private $websiteAddress = null;

    /**
     * Memo
     *
     * @property string $comment
     */
    private $comment = null;

    /**
     * Vestiging referentie
     *
     * @property \MainlyCode\Reeleezee\ValueObject\CustomerType\BranchReferenceAType
     * $branchReference
     */
    private $branchReference = null;

    /**
     * Afdeling referentie
     *
     * @property
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\DepartmentReferenceAType
     * $departmentReference
     */
    private $departmentReference = null;

    /**
     * @property
     * \MainlyCode\Reeleezee\ValueObject\EmployeeType\AddressListAType\AddressAType[]
     * $addressList
     */
    private $addressList = null;

    /**
     * @property \MainlyCode\Reeleezee\ValueObject\CategoryListType $categoryList
     */
    private $categoryList = null;

    /**
     * @property
     * \MainlyCode\Reeleezee\ValueObject\EmployeeType\RelationListAType\CustomerReferenceAType[]
     * $relationList
     */
    private $relationList = null;

    /**
     * Gets as iD
     *
     * Medewerkernummer
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
     * Medewerkernummer
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
     * Gets as code
     *
     * Medewerkercode
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
     * Medewerkercode
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
     * Gets as fullName
     *
     * Medewerker naam
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
     * Medewerker naam
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
     * Gets as searchName
     *
     * Wordt gesorteerd op
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
     * Wordt gesorteerd op
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
     * Gets as languageCode
     *
     * Taalcode
     *
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->languageCode;
    }

    /**
     * Sets a new languageCode
     *
     * Taalcode
     *
     * @param string $languageCode
     * @return self
     */
    public function setLanguageCode($languageCode)
    {
        $this->languageCode = $languageCode;
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
     * Gets as websiteAddress
     *
     * Website
     *
     * @return string
     */
    public function getWebsiteAddress()
    {
        return $this->websiteAddress;
    }

    /**
     * Sets a new websiteAddress
     *
     * Website
     *
     * @param string $websiteAddress
     * @return self
     */
    public function setWebsiteAddress($websiteAddress)
    {
        $this->websiteAddress = $websiteAddress;
        return $this;
    }

    /**
     * Gets as comment
     *
     * Memo
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * Memo
     *
     * @param string $comment
     * @return self
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Gets as branchReference
     *
     * Vestiging referentie
     *
     * @return \MainlyCode\Reeleezee\ValueObject\CustomerType\BranchReferenceAType
     */
    public function getBranchReference()
    {
        return $this->branchReference;
    }

    /**
     * Sets a new branchReference
     *
     * Vestiging referentie
     *
     * @param \MainlyCode\Reeleezee\ValueObject\CustomerType\BranchReferenceAType
     * $branchReference
     * @return self
     */
    public function setBranchReference(\MainlyCode\Reeleezee\ValueObject\CustomerType\BranchReferenceAType $branchReference)
    {
        $this->branchReference = $branchReference;
        return $this;
    }

    /**
     * Gets as departmentReference
     *
     * Afdeling referentie
     *
     * @return \MainlyCode\Reeleezee\ValueObject\CustomerType\DepartmentReferenceAType
     */
    public function getDepartmentReference()
    {
        return $this->departmentReference;
    }

    /**
     * Sets a new departmentReference
     *
     * Afdeling referentie
     *
     * @param \MainlyCode\Reeleezee\ValueObject\CustomerType\DepartmentReferenceAType
     * $departmentReference
     * @return self
     */
    public function setDepartmentReference(\MainlyCode\Reeleezee\ValueObject\CustomerType\DepartmentReferenceAType $departmentReference)
    {
        $this->departmentReference = $departmentReference;
        return $this;
    }

    /**
     * Adds as address
     *
     * @return self
     * @param
     * \MainlyCode\Reeleezee\ValueObject\EmployeeType\AddressListAType\AddressAType
     * $address
     */
    public function addToAddressList(\MainlyCode\Reeleezee\ValueObject\EmployeeType\AddressListAType\AddressAType $address)
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
     * \MainlyCode\Reeleezee\ValueObject\EmployeeType\AddressListAType\AddressAType[]
     */
    public function getAddressList()
    {
        return $this->addressList;
    }

    /**
     * Sets a new addressList
     *
     * @param
     * \MainlyCode\Reeleezee\ValueObject\EmployeeType\AddressListAType\AddressAType[]
     * $addressList
     * @return self
     */
    public function setAddressList(array $addressList)
    {
        $this->addressList = $addressList;
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
     * Adds as customerReference
     *
     * @return self
     * @param
     * \MainlyCode\Reeleezee\ValueObject\EmployeeType\RelationListAType\CustomerReferenceAType
     * $customerReference
     */
    public function addToRelationList(\MainlyCode\Reeleezee\ValueObject\EmployeeType\RelationListAType\CustomerReferenceAType $customerReference)
    {
        $this->relationList[] = $customerReference;
        return $this;
    }

    /**
     * isset relationList
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRelationList($index)
    {
        return isset($this->relationList[$index]);
    }

    /**
     * unset relationList
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRelationList($index)
    {
        unset($this->relationList[$index]);
    }

    /**
     * Gets as relationList
     *
     * @return
     * \MainlyCode\Reeleezee\ValueObject\EmployeeType\RelationListAType\CustomerReferenceAType[]
     */
    public function getRelationList()
    {
        return $this->relationList;
    }

    /**
     * Sets a new relationList
     *
     * @param
     * \MainlyCode\Reeleezee\ValueObject\EmployeeType\RelationListAType\CustomerReferenceAType[]
     * $relationList
     * @return self
     */
    public function setRelationList(array $relationList)
    {
        $this->relationList = $relationList;
        return $this;
    }


}

