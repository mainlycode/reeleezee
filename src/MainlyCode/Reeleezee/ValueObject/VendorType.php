<?php

namespace MainlyCode\Reeleezee\ValueObject;

/**
 * Class representing VendorType
 *
 *
 * XSD Type: VendorType
 */
class VendorType
{

    /**
     * Crediteurnummer
     *
     * @property integer $iD
     */
    private $iD = null;

    /**
     * Leveranciercode
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
     * Leverancier naam
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
     * Standaardadres
     *
     * @property string $defaultAddress
     */
    private $defaultAddress = null;

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
     * KvK nummer
     *
     * @property string $chamberOfCommerceNumber
     */
    private $chamberOfCommerceNumber = null;

    /**
     * KvK stad
     *
     * @property string $chamberOfCommerceCity
     */
    private $chamberOfCommerceCity = null;

    /**
     * Aangiftenummer OB
     *
     * @property string $taxDepositOBNumber
     */
    private $taxDepositOBNumber = null;

    /**
     * Entity payment accounts
     *
     * @property \MainlyCode\Reeleezee\ValueObject\BankAccountType[] $bankAccounts
     */
    private $bankAccounts = null;

    /**
     * Openingsbalans
     *
     * @property \MainlyCode\Reeleezee\ValueObject\OpeningbalanceType $openingbalance
     */
    private $openingbalance = null;

    /**
     * Vestiging referentie
     *
     * @property \MainlyCode\Reeleezee\ValueObject\CustomerType\BranchReferenceAType
     * $branchReference
     */
    private $branchReference = null;

    /**
     * Hoort bij vestiging (VEROUDERD, GEBRUIK BranchReference)
     *
     * @property string $branch
     */
    private $branch = null;

    /**
     * @property
     * \MainlyCode\Reeleezee\ValueObject\VendorType\AddressListAType\AddressAType[]
     * $addressList
     */
    private $addressList = null;

    /**
     * @property \MainlyCode\Reeleezee\ValueObject\ContactPersonListType
     * $contactPersonList
     */
    private $contactPersonList = null;

    /**
     * @property
     * \MainlyCode\Reeleezee\ValueObject\VendorType\RelationListAType\ContactPersonReferenceAType[]
     * $relationList
     */
    private $relationList = null;

    /**
     * Gets as iD
     *
     * Crediteurnummer
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
     * Crediteurnummer
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
     * Leveranciercode
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
     * Leveranciercode
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
     * Leverancier naam
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
     * Leverancier naam
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
     * Gets as defaultAddress
     *
     * Standaardadres
     *
     * @return string
     */
    public function getDefaultAddress()
    {
        return $this->defaultAddress;
    }

    /**
     * Sets a new defaultAddress
     *
     * Standaardadres
     *
     * @param string $defaultAddress
     * @return self
     */
    public function setDefaultAddress($defaultAddress)
    {
        $this->defaultAddress = $defaultAddress;
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
     * Gets as chamberOfCommerceCity
     *
     * KvK stad
     *
     * @return string
     */
    public function getChamberOfCommerceCity()
    {
        return $this->chamberOfCommerceCity;
    }

    /**
     * Sets a new chamberOfCommerceCity
     *
     * KvK stad
     *
     * @param string $chamberOfCommerceCity
     * @return self
     */
    public function setChamberOfCommerceCity($chamberOfCommerceCity)
    {
        $this->chamberOfCommerceCity = $chamberOfCommerceCity;
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
     * Adds as bankAccount
     *
     * Entity payment accounts
     *
     * @return self
     * @param \MainlyCode\Reeleezee\ValueObject\BankAccountType $bankAccount
     */
    public function addToBankAccounts(\MainlyCode\Reeleezee\ValueObject\BankAccountType $bankAccount)
    {
        $this->bankAccounts[] = $bankAccount;
        return $this;
    }

    /**
     * isset bankAccounts
     *
     * Entity payment accounts
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBankAccounts($index)
    {
        return isset($this->bankAccounts[$index]);
    }

    /**
     * unset bankAccounts
     *
     * Entity payment accounts
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBankAccounts($index)
    {
        unset($this->bankAccounts[$index]);
    }

    /**
     * Gets as bankAccounts
     *
     * Entity payment accounts
     *
     * @return \MainlyCode\Reeleezee\ValueObject\BankAccountType[]
     */
    public function getBankAccounts()
    {
        return $this->bankAccounts;
    }

    /**
     * Sets a new bankAccounts
     *
     * Entity payment accounts
     *
     * @param \MainlyCode\Reeleezee\ValueObject\BankAccountType[] $bankAccounts
     * @return self
     */
    public function setBankAccounts(array $bankAccounts)
    {
        $this->bankAccounts = $bankAccounts;
        return $this;
    }

    /**
     * Gets as openingbalance
     *
     * Openingsbalans
     *
     * @return \MainlyCode\Reeleezee\ValueObject\OpeningbalanceType
     */
    public function getOpeningbalance()
    {
        return $this->openingbalance;
    }

    /**
     * Sets a new openingbalance
     *
     * Openingsbalans
     *
     * @param \MainlyCode\Reeleezee\ValueObject\OpeningbalanceType $openingbalance
     * @return self
     */
    public function setOpeningbalance(\MainlyCode\Reeleezee\ValueObject\OpeningbalanceType $openingbalance)
    {
        $this->openingbalance = $openingbalance;
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
     * Gets as branch
     *
     * Hoort bij vestiging (VEROUDERD, GEBRUIK BranchReference)
     *
     * @return string
     */
    public function getBranch()
    {
        return $this->branch;
    }

    /**
     * Sets a new branch
     *
     * Hoort bij vestiging (VEROUDERD, GEBRUIK BranchReference)
     *
     * @param string $branch
     * @return self
     */
    public function setBranch($branch)
    {
        $this->branch = $branch;
        return $this;
    }

    /**
     * Adds as address
     *
     * @return self
     * @param
     * \MainlyCode\Reeleezee\ValueObject\VendorType\AddressListAType\AddressAType
     * $address
     */
    public function addToAddressList(\MainlyCode\Reeleezee\ValueObject\VendorType\AddressListAType\AddressAType $address)
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
     * \MainlyCode\Reeleezee\ValueObject\VendorType\AddressListAType\AddressAType[]
     */
    public function getAddressList()
    {
        return $this->addressList;
    }

    /**
     * Sets a new addressList
     *
     * @param
     * \MainlyCode\Reeleezee\ValueObject\VendorType\AddressListAType\AddressAType[]
     * $addressList
     * @return self
     */
    public function setAddressList(array $addressList)
    {
        $this->addressList = $addressList;
        return $this;
    }

    /**
     * Gets as contactPersonList
     *
     * @return \MainlyCode\Reeleezee\ValueObject\ContactPersonListType
     */
    public function getContactPersonList()
    {
        return $this->contactPersonList;
    }

    /**
     * Sets a new contactPersonList
     *
     * @param \MainlyCode\Reeleezee\ValueObject\ContactPersonListType
     * $contactPersonList
     * @return self
     */
    public function setContactPersonList(\MainlyCode\Reeleezee\ValueObject\ContactPersonListType $contactPersonList)
    {
        $this->contactPersonList = $contactPersonList;
        return $this;
    }

    /**
     * Adds as contactPersonReference
     *
     * @return self
     * @param
     * \MainlyCode\Reeleezee\ValueObject\VendorType\RelationListAType\ContactPersonReferenceAType
     * $contactPersonReference
     */
    public function addToRelationList(\MainlyCode\Reeleezee\ValueObject\VendorType\RelationListAType\ContactPersonReferenceAType $contactPersonReference)
    {
        $this->relationList[] = $contactPersonReference;
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
     * \MainlyCode\Reeleezee\ValueObject\VendorType\RelationListAType\ContactPersonReferenceAType[]
     */
    public function getRelationList()
    {
        return $this->relationList;
    }

    /**
     * Sets a new relationList
     *
     * @param
     * \MainlyCode\Reeleezee\ValueObject\VendorType\RelationListAType\ContactPersonReferenceAType[]
     * $relationList
     * @return self
     */
    public function setRelationList(array $relationList)
    {
        $this->relationList = $relationList;
        return $this;
    }


}

