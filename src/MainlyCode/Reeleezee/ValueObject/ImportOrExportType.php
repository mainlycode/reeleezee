<?php

namespace MainlyCode\Reeleezee\ValueObject;

/**
 * Class representing ImportOrExportType
 *
 *
 * XSD Type: ImportOrExportType
 */
class ImportOrExportType
{

    /**
     * Informatie over de export
     *
     * @property \MainlyCode\Reeleezee\ValueObject\ExportInfoType $exportInfo
     */
    private $exportInfo = null;

    /**
     * @property \MainlyCode\Reeleezee\ValueObject\CustomerType[] $customerList
     */
    private $customerList = null;

    /**
     * @property \MainlyCode\Reeleezee\ValueObject\VendorType[] $vendorList
     */
    private $vendorList = null;

    /**
     * @property \MainlyCode\Reeleezee\ValueObject\EmployeeType[] $employeeList
     */
    private $employeeList = null;

    /**
     * @property \MainlyCode\Reeleezee\ValueObject\PersonType[] $personList
     */
    private $personList = null;

    /**
     * @property \MainlyCode\Reeleezee\ValueObject\SalesInvoiceType[] $salesInvoiceList
     */
    private $salesInvoiceList = null;

    /**
     * @property \MainlyCode\Reeleezee\ValueObject\PurchaseInvoiceType[]
     * $purchaseInvoiceList
     */
    private $purchaseInvoiceList = null;

    /**
     * @property \MainlyCode\Reeleezee\ValueObject\ManualJournalType[]
     * $manualJournalList
     */
    private $manualJournalList = null;

    /**
     * @property \MainlyCode\Reeleezee\ValueObject\ProductType[] $productList
     */
    private $productList = null;

    /**
     * @property \MainlyCode\Reeleezee\ValueObject\AccountType[] $accountList
     */
    private $accountList = null;

    /**
     * @property \MainlyCode\Reeleezee\ValueObject\DossierFileType[] $dossierFileList
     */
    private $dossierFileList = null;

    /**
     * @property \MainlyCode\Reeleezee\ValueObject\CustomerTaxDepositType[]
     * $customerTaxDepositList
     */
    private $customerTaxDepositList = null;

    /**
     * Gets as exportInfo
     *
     * Informatie over de export
     *
     * @return \MainlyCode\Reeleezee\ValueObject\ExportInfoType
     */
    public function getExportInfo()
    {
        return $this->exportInfo;
    }

    /**
     * Sets a new exportInfo
     *
     * Informatie over de export
     *
     * @param \MainlyCode\Reeleezee\ValueObject\ExportInfoType $exportInfo
     * @return self
     */
    public function setExportInfo(\MainlyCode\Reeleezee\ValueObject\ExportInfoType $exportInfo)
    {
        $this->exportInfo = $exportInfo;
        return $this;
    }

    /**
     * Adds as customer
     *
     * @return self
     * @param \MainlyCode\Reeleezee\ValueObject\CustomerType $customer
     */
    public function addToCustomerList(\MainlyCode\Reeleezee\ValueObject\CustomerType $customer)
    {
        $this->customerList[] = $customer;
        return $this;
    }

    /**
     * isset customerList
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCustomerList($index)
    {
        return isset($this->customerList[$index]);
    }

    /**
     * unset customerList
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCustomerList($index)
    {
        unset($this->customerList[$index]);
    }

    /**
     * Gets as customerList
     *
     * @return \MainlyCode\Reeleezee\ValueObject\CustomerType[]
     */
    public function getCustomerList()
    {
        return $this->customerList;
    }

    /**
     * Sets a new customerList
     *
     * @param \MainlyCode\Reeleezee\ValueObject\CustomerType[] $customerList
     * @return self
     */
    public function setCustomerList(array $customerList)
    {
        $this->customerList = $customerList;
        return $this;
    }

    /**
     * Adds as vendor
     *
     * @return self
     * @param \MainlyCode\Reeleezee\ValueObject\VendorType $vendor
     */
    public function addToVendorList(\MainlyCode\Reeleezee\ValueObject\VendorType $vendor)
    {
        $this->vendorList[] = $vendor;
        return $this;
    }

    /**
     * isset vendorList
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetVendorList($index)
    {
        return isset($this->vendorList[$index]);
    }

    /**
     * unset vendorList
     *
     * @param scalar $index
     * @return void
     */
    public function unsetVendorList($index)
    {
        unset($this->vendorList[$index]);
    }

    /**
     * Gets as vendorList
     *
     * @return \MainlyCode\Reeleezee\ValueObject\VendorType[]
     */
    public function getVendorList()
    {
        return $this->vendorList;
    }

    /**
     * Sets a new vendorList
     *
     * @param \MainlyCode\Reeleezee\ValueObject\VendorType[] $vendorList
     * @return self
     */
    public function setVendorList(array $vendorList)
    {
        $this->vendorList = $vendorList;
        return $this;
    }

    /**
     * Adds as employee
     *
     * @return self
     * @param \MainlyCode\Reeleezee\ValueObject\EmployeeType $employee
     */
    public function addToEmployeeList(\MainlyCode\Reeleezee\ValueObject\EmployeeType $employee)
    {
        $this->employeeList[] = $employee;
        return $this;
    }

    /**
     * isset employeeList
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEmployeeList($index)
    {
        return isset($this->employeeList[$index]);
    }

    /**
     * unset employeeList
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEmployeeList($index)
    {
        unset($this->employeeList[$index]);
    }

    /**
     * Gets as employeeList
     *
     * @return \MainlyCode\Reeleezee\ValueObject\EmployeeType[]
     */
    public function getEmployeeList()
    {
        return $this->employeeList;
    }

    /**
     * Sets a new employeeList
     *
     * @param \MainlyCode\Reeleezee\ValueObject\EmployeeType[] $employeeList
     * @return self
     */
    public function setEmployeeList(array $employeeList)
    {
        $this->employeeList = $employeeList;
        return $this;
    }

    /**
     * Adds as person
     *
     * @return self
     * @param \MainlyCode\Reeleezee\ValueObject\PersonType $person
     */
    public function addToPersonList(\MainlyCode\Reeleezee\ValueObject\PersonType $person)
    {
        $this->personList[] = $person;
        return $this;
    }

    /**
     * isset personList
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPersonList($index)
    {
        return isset($this->personList[$index]);
    }

    /**
     * unset personList
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPersonList($index)
    {
        unset($this->personList[$index]);
    }

    /**
     * Gets as personList
     *
     * @return \MainlyCode\Reeleezee\ValueObject\PersonType[]
     */
    public function getPersonList()
    {
        return $this->personList;
    }

    /**
     * Sets a new personList
     *
     * @param \MainlyCode\Reeleezee\ValueObject\PersonType[] $personList
     * @return self
     */
    public function setPersonList(array $personList)
    {
        $this->personList = $personList;
        return $this;
    }

    /**
     * Adds as salesInvoice
     *
     * @return self
     * @param \MainlyCode\Reeleezee\ValueObject\SalesInvoiceType $salesInvoice
     */
    public function addToSalesInvoiceList(\MainlyCode\Reeleezee\ValueObject\SalesInvoiceType $salesInvoice)
    {
        $this->salesInvoiceList[] = $salesInvoice;
        return $this;
    }

    /**
     * isset salesInvoiceList
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSalesInvoiceList($index)
    {
        return isset($this->salesInvoiceList[$index]);
    }

    /**
     * unset salesInvoiceList
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSalesInvoiceList($index)
    {
        unset($this->salesInvoiceList[$index]);
    }

    /**
     * Gets as salesInvoiceList
     *
     * @return \MainlyCode\Reeleezee\ValueObject\SalesInvoiceType[]
     */
    public function getSalesInvoiceList()
    {
        return $this->salesInvoiceList;
    }

    /**
     * Sets a new salesInvoiceList
     *
     * @param \MainlyCode\Reeleezee\ValueObject\SalesInvoiceType[] $salesInvoiceList
     * @return self
     */
    public function setSalesInvoiceList(array $salesInvoiceList)
    {
        $this->salesInvoiceList = $salesInvoiceList;
        return $this;
    }

    /**
     * Adds as purchaseInvoice
     *
     * @return self
     * @param \MainlyCode\Reeleezee\ValueObject\PurchaseInvoiceType $purchaseInvoice
     */
    public function addToPurchaseInvoiceList(\MainlyCode\Reeleezee\ValueObject\PurchaseInvoiceType $purchaseInvoice)
    {
        $this->purchaseInvoiceList[] = $purchaseInvoice;
        return $this;
    }

    /**
     * isset purchaseInvoiceList
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPurchaseInvoiceList($index)
    {
        return isset($this->purchaseInvoiceList[$index]);
    }

    /**
     * unset purchaseInvoiceList
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPurchaseInvoiceList($index)
    {
        unset($this->purchaseInvoiceList[$index]);
    }

    /**
     * Gets as purchaseInvoiceList
     *
     * @return \MainlyCode\Reeleezee\ValueObject\PurchaseInvoiceType[]
     */
    public function getPurchaseInvoiceList()
    {
        return $this->purchaseInvoiceList;
    }

    /**
     * Sets a new purchaseInvoiceList
     *
     * @param \MainlyCode\Reeleezee\ValueObject\PurchaseInvoiceType[]
     * $purchaseInvoiceList
     * @return self
     */
    public function setPurchaseInvoiceList(array $purchaseInvoiceList)
    {
        $this->purchaseInvoiceList = $purchaseInvoiceList;
        return $this;
    }

    /**
     * Adds as manualJournal
     *
     * @return self
     * @param \MainlyCode\Reeleezee\ValueObject\ManualJournalType $manualJournal
     */
    public function addToManualJournalList(\MainlyCode\Reeleezee\ValueObject\ManualJournalType $manualJournal)
    {
        $this->manualJournalList[] = $manualJournal;
        return $this;
    }

    /**
     * isset manualJournalList
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetManualJournalList($index)
    {
        return isset($this->manualJournalList[$index]);
    }

    /**
     * unset manualJournalList
     *
     * @param scalar $index
     * @return void
     */
    public function unsetManualJournalList($index)
    {
        unset($this->manualJournalList[$index]);
    }

    /**
     * Gets as manualJournalList
     *
     * @return \MainlyCode\Reeleezee\ValueObject\ManualJournalType[]
     */
    public function getManualJournalList()
    {
        return $this->manualJournalList;
    }

    /**
     * Sets a new manualJournalList
     *
     * @param \MainlyCode\Reeleezee\ValueObject\ManualJournalType[] $manualJournalList
     * @return self
     */
    public function setManualJournalList(array $manualJournalList)
    {
        $this->manualJournalList = $manualJournalList;
        return $this;
    }

    /**
     * Adds as product
     *
     * @return self
     * @param \MainlyCode\Reeleezee\ValueObject\ProductType $product
     */
    public function addToProductList(\MainlyCode\Reeleezee\ValueObject\ProductType $product)
    {
        $this->productList[] = $product;
        return $this;
    }

    /**
     * isset productList
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProductList($index)
    {
        return isset($this->productList[$index]);
    }

    /**
     * unset productList
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProductList($index)
    {
        unset($this->productList[$index]);
    }

    /**
     * Gets as productList
     *
     * @return \MainlyCode\Reeleezee\ValueObject\ProductType[]
     */
    public function getProductList()
    {
        return $this->productList;
    }

    /**
     * Sets a new productList
     *
     * @param \MainlyCode\Reeleezee\ValueObject\ProductType[] $productList
     * @return self
     */
    public function setProductList(array $productList)
    {
        $this->productList = $productList;
        return $this;
    }

    /**
     * Adds as account
     *
     * @return self
     * @param \MainlyCode\Reeleezee\ValueObject\AccountType $account
     */
    public function addToAccountList(\MainlyCode\Reeleezee\ValueObject\AccountType $account)
    {
        $this->accountList[] = $account;
        return $this;
    }

    /**
     * isset accountList
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAccountList($index)
    {
        return isset($this->accountList[$index]);
    }

    /**
     * unset accountList
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAccountList($index)
    {
        unset($this->accountList[$index]);
    }

    /**
     * Gets as accountList
     *
     * @return \MainlyCode\Reeleezee\ValueObject\AccountType[]
     */
    public function getAccountList()
    {
        return $this->accountList;
    }

    /**
     * Sets a new accountList
     *
     * @param \MainlyCode\Reeleezee\ValueObject\AccountType[] $accountList
     * @return self
     */
    public function setAccountList(array $accountList)
    {
        $this->accountList = $accountList;
        return $this;
    }

    /**
     * Adds as dossierFile
     *
     * @return self
     * @param \MainlyCode\Reeleezee\ValueObject\DossierFileType $dossierFile
     */
    public function addToDossierFileList(\MainlyCode\Reeleezee\ValueObject\DossierFileType $dossierFile)
    {
        $this->dossierFileList[] = $dossierFile;
        return $this;
    }

    /**
     * isset dossierFileList
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDossierFileList($index)
    {
        return isset($this->dossierFileList[$index]);
    }

    /**
     * unset dossierFileList
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDossierFileList($index)
    {
        unset($this->dossierFileList[$index]);
    }

    /**
     * Gets as dossierFileList
     *
     * @return \MainlyCode\Reeleezee\ValueObject\DossierFileType[]
     */
    public function getDossierFileList()
    {
        return $this->dossierFileList;
    }

    /**
     * Sets a new dossierFileList
     *
     * @param \MainlyCode\Reeleezee\ValueObject\DossierFileType[] $dossierFileList
     * @return self
     */
    public function setDossierFileList(array $dossierFileList)
    {
        $this->dossierFileList = $dossierFileList;
        return $this;
    }

    /**
     * Adds as customerTaxDeposit
     *
     * @return self
     * @param \MainlyCode\Reeleezee\ValueObject\CustomerTaxDepositType
     * $customerTaxDeposit
     */
    public function addToCustomerTaxDepositList(\MainlyCode\Reeleezee\ValueObject\CustomerTaxDepositType $customerTaxDeposit)
    {
        $this->customerTaxDepositList[] = $customerTaxDeposit;
        return $this;
    }

    /**
     * isset customerTaxDepositList
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCustomerTaxDepositList($index)
    {
        return isset($this->customerTaxDepositList[$index]);
    }

    /**
     * unset customerTaxDepositList
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCustomerTaxDepositList($index)
    {
        unset($this->customerTaxDepositList[$index]);
    }

    /**
     * Gets as customerTaxDepositList
     *
     * @return \MainlyCode\Reeleezee\ValueObject\CustomerTaxDepositType[]
     */
    public function getCustomerTaxDepositList()
    {
        return $this->customerTaxDepositList;
    }

    /**
     * Sets a new customerTaxDepositList
     *
     * @param \MainlyCode\Reeleezee\ValueObject\CustomerTaxDepositType[]
     * $customerTaxDepositList
     * @return self
     */
    public function setCustomerTaxDepositList(array $customerTaxDepositList)
    {
        $this->customerTaxDepositList = $customerTaxDepositList;
        return $this;
    }


}

