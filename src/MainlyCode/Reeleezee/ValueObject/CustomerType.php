<?php

namespace MainlyCode\Reeleezee\ValueObject;

/**
 * Class representing CustomerType
 *
 *
 * XSD Type: CustomerType
 */
class CustomerType
{

    /**
     * Debiteurnummer
     *
     * @property integer $iD
     */
    private $iD = null;

    /**
     * Klantcode
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
     * Klant naam
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
     * Soort klant
     *
     * @property string $entityType
     */
    private $entityType = null;

    /**
     * Standaardadres
     *
     * @property string $defaultAddress
     */
    private $defaultAddress = null;

    /**
     * Keuze factuuradres (VEROUDERD!)
     *
     * @property string $addressForBilling
     */
    private $addressForBilling = null;

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
     * Fiscaal nummer (VEROUDERD!)
     *
     * @property string $fiscalIdentificationNumber
     */
    private $fiscalIdentificationNumber = null;

    /**
     * Aangiftenummer LH (VEROUDERD!)
     *
     * @property string $taxDepositLHNumber
     */
    private $taxDepositLHNumber = null;

    /**
     * Aangiftenummer OB (VEROUDERD!)
     *
     * @property string $taxDepositOBNumber
     */
    private $taxDepositOBNumber = null;

    /**
     * Aangiftenummer ICL (VEROUDERD!)
     *
     * @property string $taxDepositICLNumber
     */
    private $taxDepositICLNumber = null;

    /**
     * Fiscale nummers
     *
     * @property
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\FiscalIdentificationsAType
     * $fiscalIdentifications
     */
    private $fiscalIdentifications = null;

    /**
     * Entity payment accounts
     *
     * @property
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\BankAccountsAType\BankAccountAType[]
     * $bankAccounts
     */
    private $bankAccounts = null;

    /**
     * Bankrekening referentie
     *
     * @property
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\BankAccountsAType\BankAccountAType\DirectDebitAuthorizationAType\PaymentAccountReferenceAType
     * $paymentAccountReference
     */
    private $paymentAccountReference = null;

    /**
     * Betaalwijze referentie
     *
     * @property
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\PaymentMethodReferenceAType
     * $paymentMethodReference
     */
    private $paymentMethodReference = null;

    /**
     * Betalingstermijn in dagen
     *
     * @property integer $defaultInvoiceDueDays
     */
    private $defaultInvoiceDueDays = null;

    /**
     * Openingsbalans
     *
     * @property \MainlyCode\Reeleezee\ValueObject\OpeningbalanceType $openingbalance
     */
    private $openingbalance = null;

    /**
     * Openstaande post: Bedrag (VEROUDERD!)
     *
     * @property float $openingbalanceAmount
     */
    private $openingbalanceAmount = null;

    /**
     * Openstaande post: Referentie (VEROUDERD!)
     *
     * @property string $openingbalanceDescription
     */
    private $openingbalanceDescription = null;

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
     * Afdeling referentie
     *
     * @property
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\DepartmentReferenceAType
     * $departmentReference
     */
    private $departmentReference = null;

    /**
     * @property
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\AddressListAType\AddressAType[]
     * $addressList
     */
    private $addressList = null;

    /**
     * @property \MainlyCode\Reeleezee\ValueObject\ContactPersonListType
     * $contactPersonList
     */
    private $contactPersonList = null;

    /**
     * @property \MainlyCode\Reeleezee\ValueObject\CategoryListType $categoryList
     */
    private $categoryList = null;

    /**
     * @property \MainlyCode\Reeleezee\ValueObject\CustomerType\AccountManagerListAType
     * $accountManagerList
     */
    private $accountManagerList = null;

    /**
     * @property \MainlyCode\Reeleezee\ValueObject\CustomerType\RelationListAType
     * $relationList
     */
    private $relationList = null;

    /**
     * Default invoice address
     *
     * @property
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\DefaultInvoiceSendMethodAType
     * $defaultInvoiceSendMethod
     */
    private $defaultInvoiceSendMethod = null;

    /**
     * Gets as iD
     *
     * Debiteurnummer
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
     * Debiteurnummer
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
     * Klantcode
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
     * Klantcode
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
     * Klant naam
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
     * Klant naam
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
     * Gets as entityType
     *
     * Soort klant
     *
     * @return string
     */
    public function getEntityType()
    {
        return $this->entityType;
    }

    /**
     * Sets a new entityType
     *
     * Soort klant
     *
     * @param string $entityType
     * @return self
     */
    public function setEntityType($entityType)
    {
        $this->entityType = $entityType;
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
     * Gets as addressForBilling
     *
     * Keuze factuuradres (VEROUDERD!)
     *
     * @return string
     */
    public function getAddressForBilling()
    {
        return $this->addressForBilling;
    }

    /**
     * Sets a new addressForBilling
     *
     * Keuze factuuradres (VEROUDERD!)
     *
     * @param string $addressForBilling
     * @return self
     */
    public function setAddressForBilling($addressForBilling)
    {
        $this->addressForBilling = $addressForBilling;
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
     * Gets as fiscalIdentificationNumber
     *
     * Fiscaal nummer (VEROUDERD!)
     *
     * @return string
     */
    public function getFiscalIdentificationNumber()
    {
        return $this->fiscalIdentificationNumber;
    }

    /**
     * Sets a new fiscalIdentificationNumber
     *
     * Fiscaal nummer (VEROUDERD!)
     *
     * @param string $fiscalIdentificationNumber
     * @return self
     */
    public function setFiscalIdentificationNumber($fiscalIdentificationNumber)
    {
        $this->fiscalIdentificationNumber = $fiscalIdentificationNumber;
        return $this;
    }

    /**
     * Gets as taxDepositLHNumber
     *
     * Aangiftenummer LH (VEROUDERD!)
     *
     * @return string
     */
    public function getTaxDepositLHNumber()
    {
        return $this->taxDepositLHNumber;
    }

    /**
     * Sets a new taxDepositLHNumber
     *
     * Aangiftenummer LH (VEROUDERD!)
     *
     * @param string $taxDepositLHNumber
     * @return self
     */
    public function setTaxDepositLHNumber($taxDepositLHNumber)
    {
        $this->taxDepositLHNumber = $taxDepositLHNumber;
        return $this;
    }

    /**
     * Gets as taxDepositOBNumber
     *
     * Aangiftenummer OB (VEROUDERD!)
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
     * Aangiftenummer OB (VEROUDERD!)
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
     * Gets as taxDepositICLNumber
     *
     * Aangiftenummer ICL (VEROUDERD!)
     *
     * @return string
     */
    public function getTaxDepositICLNumber()
    {
        return $this->taxDepositICLNumber;
    }

    /**
     * Sets a new taxDepositICLNumber
     *
     * Aangiftenummer ICL (VEROUDERD!)
     *
     * @param string $taxDepositICLNumber
     * @return self
     */
    public function setTaxDepositICLNumber($taxDepositICLNumber)
    {
        $this->taxDepositICLNumber = $taxDepositICLNumber;
        return $this;
    }

    /**
     * Gets as fiscalIdentifications
     *
     * Fiscale nummers
     *
     * @return
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\FiscalIdentificationsAType
     */
    public function getFiscalIdentifications()
    {
        return $this->fiscalIdentifications;
    }

    /**
     * Sets a new fiscalIdentifications
     *
     * Fiscale nummers
     *
     * @param \MainlyCode\Reeleezee\ValueObject\CustomerType\FiscalIdentificationsAType
     * $fiscalIdentifications
     * @return self
     */
    public function setFiscalIdentifications(\MainlyCode\Reeleezee\ValueObject\CustomerType\FiscalIdentificationsAType $fiscalIdentifications)
    {
        $this->fiscalIdentifications = $fiscalIdentifications;
        return $this;
    }

    /**
     * Adds as bankAccount
     *
     * Entity payment accounts
     *
     * @return self
     * @param
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\BankAccountsAType\BankAccountAType
     * $bankAccount
     */
    public function addToBankAccounts(\MainlyCode\Reeleezee\ValueObject\CustomerType\BankAccountsAType\BankAccountAType $bankAccount)
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
     * @return
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\BankAccountsAType\BankAccountAType[]
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
     * @param
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\BankAccountsAType\BankAccountAType[]
     * $bankAccounts
     * @return self
     */
    public function setBankAccounts(array $bankAccounts)
    {
        $this->bankAccounts = $bankAccounts;
        return $this;
    }

    /**
     * Gets as paymentAccountReference
     *
     * Bankrekening referentie
     *
     * @return
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\BankAccountsAType\BankAccountAType\DirectDebitAuthorizationAType\PaymentAccountReferenceAType
     */
    public function getPaymentAccountReference()
    {
        return $this->paymentAccountReference;
    }

    /**
     * Sets a new paymentAccountReference
     *
     * Bankrekening referentie
     *
     * @param
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\BankAccountsAType\BankAccountAType\DirectDebitAuthorizationAType\PaymentAccountReferenceAType
     * $paymentAccountReference
     * @return self
     */
    public function setPaymentAccountReference(\MainlyCode\Reeleezee\ValueObject\CustomerType\BankAccountsAType\BankAccountAType\DirectDebitAuthorizationAType\PaymentAccountReferenceAType $paymentAccountReference)
    {
        $this->paymentAccountReference = $paymentAccountReference;
        return $this;
    }

    /**
     * Gets as paymentMethodReference
     *
     * Betaalwijze referentie
     *
     * @return
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\PaymentMethodReferenceAType
     */
    public function getPaymentMethodReference()
    {
        return $this->paymentMethodReference;
    }

    /**
     * Sets a new paymentMethodReference
     *
     * Betaalwijze referentie
     *
     * @param
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\PaymentMethodReferenceAType
     * $paymentMethodReference
     * @return self
     */
    public function setPaymentMethodReference(\MainlyCode\Reeleezee\ValueObject\CustomerType\PaymentMethodReferenceAType $paymentMethodReference)
    {
        $this->paymentMethodReference = $paymentMethodReference;
        return $this;
    }

    /**
     * Gets as defaultInvoiceDueDays
     *
     * Betalingstermijn in dagen
     *
     * @return integer
     */
    public function getDefaultInvoiceDueDays()
    {
        return $this->defaultInvoiceDueDays;
    }

    /**
     * Sets a new defaultInvoiceDueDays
     *
     * Betalingstermijn in dagen
     *
     * @param integer $defaultInvoiceDueDays
     * @return self
     */
    public function setDefaultInvoiceDueDays($defaultInvoiceDueDays)
    {
        $this->defaultInvoiceDueDays = $defaultInvoiceDueDays;
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
     * Gets as openingbalanceAmount
     *
     * Openstaande post: Bedrag (VEROUDERD!)
     *
     * @return float
     */
    public function getOpeningbalanceAmount()
    {
        return $this->openingbalanceAmount;
    }

    /**
     * Sets a new openingbalanceAmount
     *
     * Openstaande post: Bedrag (VEROUDERD!)
     *
     * @param float $openingbalanceAmount
     * @return self
     */
    public function setOpeningbalanceAmount($openingbalanceAmount)
    {
        $this->openingbalanceAmount = $openingbalanceAmount;
        return $this;
    }

    /**
     * Gets as openingbalanceDescription
     *
     * Openstaande post: Referentie (VEROUDERD!)
     *
     * @return string
     */
    public function getOpeningbalanceDescription()
    {
        return $this->openingbalanceDescription;
    }

    /**
     * Sets a new openingbalanceDescription
     *
     * Openstaande post: Referentie (VEROUDERD!)
     *
     * @param string $openingbalanceDescription
     * @return self
     */
    public function setOpeningbalanceDescription($openingbalanceDescription)
    {
        $this->openingbalanceDescription = $openingbalanceDescription;
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
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\AddressListAType\AddressAType
     * $address
     */
    public function addToAddressList(\MainlyCode\Reeleezee\ValueObject\CustomerType\AddressListAType\AddressAType $address)
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
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\AddressListAType\AddressAType[]
     */
    public function getAddressList()
    {
        return $this->addressList;
    }

    /**
     * Sets a new addressList
     *
     * @param
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\AddressListAType\AddressAType[]
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
     * Gets as accountManagerList
     *
     * @return \MainlyCode\Reeleezee\ValueObject\CustomerType\AccountManagerListAType
     */
    public function getAccountManagerList()
    {
        return $this->accountManagerList;
    }

    /**
     * Sets a new accountManagerList
     *
     * @param \MainlyCode\Reeleezee\ValueObject\CustomerType\AccountManagerListAType
     * $accountManagerList
     * @return self
     */
    public function setAccountManagerList(\MainlyCode\Reeleezee\ValueObject\CustomerType\AccountManagerListAType $accountManagerList)
    {
        $this->accountManagerList = $accountManagerList;
        return $this;
    }

    /**
     * Gets as relationList
     *
     * @return \MainlyCode\Reeleezee\ValueObject\CustomerType\RelationListAType
     */
    public function getRelationList()
    {
        return $this->relationList;
    }

    /**
     * Sets a new relationList
     *
     * @param \MainlyCode\Reeleezee\ValueObject\CustomerType\RelationListAType
     * $relationList
     * @return self
     */
    public function setRelationList(\MainlyCode\Reeleezee\ValueObject\CustomerType\RelationListAType $relationList)
    {
        $this->relationList = $relationList;
        return $this;
    }

    /**
     * Gets as defaultInvoiceSendMethod
     *
     * Default invoice address
     *
     * @return
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\DefaultInvoiceSendMethodAType
     */
    public function getDefaultInvoiceSendMethod()
    {
        return $this->defaultInvoiceSendMethod;
    }

    /**
     * Sets a new defaultInvoiceSendMethod
     *
     * Default invoice address
     *
     * @param
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\DefaultInvoiceSendMethodAType
     * $defaultInvoiceSendMethod
     * @return self
     */
    public function setDefaultInvoiceSendMethod(\MainlyCode\Reeleezee\ValueObject\CustomerType\DefaultInvoiceSendMethodAType $defaultInvoiceSendMethod)
    {
        $this->defaultInvoiceSendMethod = $defaultInvoiceSendMethod;
        return $this;
    }


}

