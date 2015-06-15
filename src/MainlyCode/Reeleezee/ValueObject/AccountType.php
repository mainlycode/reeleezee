<?php

namespace MainlyCode\Reeleezee\ValueObject;

/**
 * Class representing AccountType
 *
 *
 * XSD Type: AccountType
 */
class AccountType
{

    /**
     * Rekening nummer
     *
     * @property string $number
     */
    private $number = null;

    /**
     * Type rekening
     *
     * @property string $type
     */
    private $type = null;

    /**
     * Rekening nummer verdichting
     *
     * @property string $summationAccount
     */
    private $summationAccount = null;

    /**
     * Is de grootboekrekening een verdichting
     *
     * @property boolean $isSummationAccount
     */
    private $isSummationAccount = null;

    /**
     * Naam
     *
     * @property string $name
     */
    private $name = null;

    /**
     * Rekening nummer voor export
     *
     * @property string $exportNumber
     */
    private $exportNumber = null;

    /**
     * Commentaar
     *
     * @property string $comment
     */
    private $comment = null;

    /**
     * Opmerkingen/informatie
     *
     * @property string $notes
     */
    private $notes = null;

    /**
     * Voorkeur BTW tarief
     *
     * @property string $defaultVatCode
     */
    private $defaultVatCode = null;

    /**
     * Verkoop boeking toegestaan
     *
     * @property boolean $allowSalesInvoice
     */
    private $allowSalesInvoice = null;

    /**
     * Inkoop boeking toegestaan
     *
     * @property boolean $allowPurchaseInvoice
     */
    private $allowPurchaseInvoice = null;

    /**
     * Memoriaal boeking toegestaan
     *
     * @property boolean $allowManualJournal
     */
    private $allowManualJournal = null;

    /**
     * Bank en Kas, Kosten/Opbrengsten boeking toegestaan
     *
     * @property boolean $allowBankCashMutation
     */
    private $allowBankCashMutation = null;

    /**
     * Gebruik grootboekrekening om het saldo van een bankrekening of kas te
     * registreren
     *
     * @property boolean $useForBank
     */
    private $useForBank = null;

    /**
     * Gebruik grootboekrekening om het saldo van een rekening courant verhouding te
     * registreren
     *
     * @property boolean $useForBalance
     */
    private $useForBalance = null;

    /**
     * Verplicht boeken met de dimensie afdeling
     *
     * @property boolean $requireDimensionDepartment
     */
    private $requireDimensionDepartment = null;

    /**
     * Verplicht boeken met de dimensie medewerker
     *
     * @property boolean $requireDimensionEmployee
     */
    private $requireDimensionEmployee = null;

    /**
     * Verplicht boeken met de dimensie Producp
     *
     * @property boolean $requireDimensionProduct
     */
    private $requireDimensionProduct = null;

    /**
     * Verplicht boeken met de dimensie project
     *
     * @property boolean $requireDimensionProject
     */
    private $requireDimensionProject = null;

    /**
     * Gets as number
     *
     * Rekening nummer
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
     * Rekening nummer
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
     * Gets as type
     *
     * Type rekening
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Type rekening
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as summationAccount
     *
     * Rekening nummer verdichting
     *
     * @return string
     */
    public function getSummationAccount()
    {
        return $this->summationAccount;
    }

    /**
     * Sets a new summationAccount
     *
     * Rekening nummer verdichting
     *
     * @param string $summationAccount
     * @return self
     */
    public function setSummationAccount($summationAccount)
    {
        $this->summationAccount = $summationAccount;
        return $this;
    }

    /**
     * Gets as isSummationAccount
     *
     * Is de grootboekrekening een verdichting
     *
     * @return boolean
     */
    public function getIsSummationAccount()
    {
        return $this->isSummationAccount;
    }

    /**
     * Sets a new isSummationAccount
     *
     * Is de grootboekrekening een verdichting
     *
     * @param boolean $isSummationAccount
     * @return self
     */
    public function setIsSummationAccount($isSummationAccount)
    {
        $this->isSummationAccount = $isSummationAccount;
        return $this;
    }

    /**
     * Gets as name
     *
     * Naam
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Naam
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as exportNumber
     *
     * Rekening nummer voor export
     *
     * @return string
     */
    public function getExportNumber()
    {
        return $this->exportNumber;
    }

    /**
     * Sets a new exportNumber
     *
     * Rekening nummer voor export
     *
     * @param string $exportNumber
     * @return self
     */
    public function setExportNumber($exportNumber)
    {
        $this->exportNumber = $exportNumber;
        return $this;
    }

    /**
     * Gets as comment
     *
     * Commentaar
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
     * Commentaar
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
     * Gets as notes
     *
     * Opmerkingen/informatie
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Sets a new notes
     *
     * Opmerkingen/informatie
     *
     * @param string $notes
     * @return self
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
        return $this;
    }

    /**
     * Gets as defaultVatCode
     *
     * Voorkeur BTW tarief
     *
     * @return string
     */
    public function getDefaultVatCode()
    {
        return $this->defaultVatCode;
    }

    /**
     * Sets a new defaultVatCode
     *
     * Voorkeur BTW tarief
     *
     * @param string $defaultVatCode
     * @return self
     */
    public function setDefaultVatCode($defaultVatCode)
    {
        $this->defaultVatCode = $defaultVatCode;
        return $this;
    }

    /**
     * Gets as allowSalesInvoice
     *
     * Verkoop boeking toegestaan
     *
     * @return boolean
     */
    public function getAllowSalesInvoice()
    {
        return $this->allowSalesInvoice;
    }

    /**
     * Sets a new allowSalesInvoice
     *
     * Verkoop boeking toegestaan
     *
     * @param boolean $allowSalesInvoice
     * @return self
     */
    public function setAllowSalesInvoice($allowSalesInvoice)
    {
        $this->allowSalesInvoice = $allowSalesInvoice;
        return $this;
    }

    /**
     * Gets as allowPurchaseInvoice
     *
     * Inkoop boeking toegestaan
     *
     * @return boolean
     */
    public function getAllowPurchaseInvoice()
    {
        return $this->allowPurchaseInvoice;
    }

    /**
     * Sets a new allowPurchaseInvoice
     *
     * Inkoop boeking toegestaan
     *
     * @param boolean $allowPurchaseInvoice
     * @return self
     */
    public function setAllowPurchaseInvoice($allowPurchaseInvoice)
    {
        $this->allowPurchaseInvoice = $allowPurchaseInvoice;
        return $this;
    }

    /**
     * Gets as allowManualJournal
     *
     * Memoriaal boeking toegestaan
     *
     * @return boolean
     */
    public function getAllowManualJournal()
    {
        return $this->allowManualJournal;
    }

    /**
     * Sets a new allowManualJournal
     *
     * Memoriaal boeking toegestaan
     *
     * @param boolean $allowManualJournal
     * @return self
     */
    public function setAllowManualJournal($allowManualJournal)
    {
        $this->allowManualJournal = $allowManualJournal;
        return $this;
    }

    /**
     * Gets as allowBankCashMutation
     *
     * Bank en Kas, Kosten/Opbrengsten boeking toegestaan
     *
     * @return boolean
     */
    public function getAllowBankCashMutation()
    {
        return $this->allowBankCashMutation;
    }

    /**
     * Sets a new allowBankCashMutation
     *
     * Bank en Kas, Kosten/Opbrengsten boeking toegestaan
     *
     * @param boolean $allowBankCashMutation
     * @return self
     */
    public function setAllowBankCashMutation($allowBankCashMutation)
    {
        $this->allowBankCashMutation = $allowBankCashMutation;
        return $this;
    }

    /**
     * Gets as useForBank
     *
     * Gebruik grootboekrekening om het saldo van een bankrekening of kas te
     * registreren
     *
     * @return boolean
     */
    public function getUseForBank()
    {
        return $this->useForBank;
    }

    /**
     * Sets a new useForBank
     *
     * Gebruik grootboekrekening om het saldo van een bankrekening of kas te
     * registreren
     *
     * @param boolean $useForBank
     * @return self
     */
    public function setUseForBank($useForBank)
    {
        $this->useForBank = $useForBank;
        return $this;
    }

    /**
     * Gets as useForBalance
     *
     * Gebruik grootboekrekening om het saldo van een rekening courant verhouding te
     * registreren
     *
     * @return boolean
     */
    public function getUseForBalance()
    {
        return $this->useForBalance;
    }

    /**
     * Sets a new useForBalance
     *
     * Gebruik grootboekrekening om het saldo van een rekening courant verhouding te
     * registreren
     *
     * @param boolean $useForBalance
     * @return self
     */
    public function setUseForBalance($useForBalance)
    {
        $this->useForBalance = $useForBalance;
        return $this;
    }

    /**
     * Gets as requireDimensionDepartment
     *
     * Verplicht boeken met de dimensie afdeling
     *
     * @return boolean
     */
    public function getRequireDimensionDepartment()
    {
        return $this->requireDimensionDepartment;
    }

    /**
     * Sets a new requireDimensionDepartment
     *
     * Verplicht boeken met de dimensie afdeling
     *
     * @param boolean $requireDimensionDepartment
     * @return self
     */
    public function setRequireDimensionDepartment($requireDimensionDepartment)
    {
        $this->requireDimensionDepartment = $requireDimensionDepartment;
        return $this;
    }

    /**
     * Gets as requireDimensionEmployee
     *
     * Verplicht boeken met de dimensie medewerker
     *
     * @return boolean
     */
    public function getRequireDimensionEmployee()
    {
        return $this->requireDimensionEmployee;
    }

    /**
     * Sets a new requireDimensionEmployee
     *
     * Verplicht boeken met de dimensie medewerker
     *
     * @param boolean $requireDimensionEmployee
     * @return self
     */
    public function setRequireDimensionEmployee($requireDimensionEmployee)
    {
        $this->requireDimensionEmployee = $requireDimensionEmployee;
        return $this;
    }

    /**
     * Gets as requireDimensionProduct
     *
     * Verplicht boeken met de dimensie Producp
     *
     * @return boolean
     */
    public function getRequireDimensionProduct()
    {
        return $this->requireDimensionProduct;
    }

    /**
     * Sets a new requireDimensionProduct
     *
     * Verplicht boeken met de dimensie Producp
     *
     * @param boolean $requireDimensionProduct
     * @return self
     */
    public function setRequireDimensionProduct($requireDimensionProduct)
    {
        $this->requireDimensionProduct = $requireDimensionProduct;
        return $this;
    }

    /**
     * Gets as requireDimensionProject
     *
     * Verplicht boeken met de dimensie project
     *
     * @return boolean
     */
    public function getRequireDimensionProject()
    {
        return $this->requireDimensionProject;
    }

    /**
     * Sets a new requireDimensionProject
     *
     * Verplicht boeken met de dimensie project
     *
     * @param boolean $requireDimensionProject
     * @return self
     */
    public function setRequireDimensionProject($requireDimensionProject)
    {
        $this->requireDimensionProject = $requireDimensionProject;
        return $this;
    }


}

