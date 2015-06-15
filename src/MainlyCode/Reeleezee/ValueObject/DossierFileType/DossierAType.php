<?php

namespace MainlyCode\Reeleezee\ValueObject\DossierFileType;

/**
 * Class representing DossierAType
 */
class DossierAType
{

    /**
     * Debiteur
     *
     * @property
     * \MainlyCode\Reeleezee\ValueObject\PermissionsCustomerType\CustomerReferenceAType
     * $customerReference
     */
    private $customerReference = null;

    /**
     * Contactpersoon
     *
     * @property
     * \MainlyCode\Reeleezee\ValueObject\ContactPersonListType\ContactPersonReferenceAType
     * $contactPersonReference
     */
    private $contactPersonReference = null;

    /**
     * Medewerker referentie
     *
     * @property
     * \MainlyCode\Reeleezee\ValueObject\DossierFileType\DossierAType\EmployeeReferenceAType
     * $employeeReference
     */
    private $employeeReference = null;

    /**
     * Administratie
     *
     * @property mixed $administrationReference
     */
    private $administrationReference = null;

    /**
     * Gets as customerReference
     *
     * Debiteur
     *
     * @return
     * \MainlyCode\Reeleezee\ValueObject\PermissionsCustomerType\CustomerReferenceAType
     */
    public function getCustomerReference()
    {
        return $this->customerReference;
    }

    /**
     * Sets a new customerReference
     *
     * Debiteur
     *
     * @param
     * \MainlyCode\Reeleezee\ValueObject\PermissionsCustomerType\CustomerReferenceAType
     * $customerReference
     * @return self
     */
    public function setCustomerReference(\MainlyCode\Reeleezee\ValueObject\PermissionsCustomerType\CustomerReferenceAType $customerReference)
    {
        $this->customerReference = $customerReference;
        return $this;
    }

    /**
     * Gets as contactPersonReference
     *
     * Contactpersoon
     *
     * @return
     * \MainlyCode\Reeleezee\ValueObject\ContactPersonListType\ContactPersonReferenceAType
     */
    public function getContactPersonReference()
    {
        return $this->contactPersonReference;
    }

    /**
     * Sets a new contactPersonReference
     *
     * Contactpersoon
     *
     * @param
     * \MainlyCode\Reeleezee\ValueObject\ContactPersonListType\ContactPersonReferenceAType
     * $contactPersonReference
     * @return self
     */
    public function setContactPersonReference(\MainlyCode\Reeleezee\ValueObject\ContactPersonListType\ContactPersonReferenceAType $contactPersonReference)
    {
        $this->contactPersonReference = $contactPersonReference;
        return $this;
    }

    /**
     * Gets as employeeReference
     *
     * Medewerker referentie
     *
     * @return
     * \MainlyCode\Reeleezee\ValueObject\DossierFileType\DossierAType\EmployeeReferenceAType
     */
    public function getEmployeeReference()
    {
        return $this->employeeReference;
    }

    /**
     * Sets a new employeeReference
     *
     * Medewerker referentie
     *
     * @param
     * \MainlyCode\Reeleezee\ValueObject\DossierFileType\DossierAType\EmployeeReferenceAType
     * $employeeReference
     * @return self
     */
    public function setEmployeeReference(\MainlyCode\Reeleezee\ValueObject\DossierFileType\DossierAType\EmployeeReferenceAType $employeeReference)
    {
        $this->employeeReference = $employeeReference;
        return $this;
    }

    /**
     * Gets as administrationReference
     *
     * Administratie
     *
     * @return mixed
     */
    public function getAdministrationReference()
    {
        return $this->administrationReference;
    }

    /**
     * Sets a new administrationReference
     *
     * Administratie
     *
     * @param mixed $administrationReference
     * @return self
     */
    public function setAdministrationReference($administrationReference)
    {
        $this->administrationReference = $administrationReference;
        return $this;
    }


}

