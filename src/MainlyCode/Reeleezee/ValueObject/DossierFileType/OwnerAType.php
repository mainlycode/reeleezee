<?php

namespace MainlyCode\Reeleezee\ValueObject\DossierFileType;

/**
 * Class representing OwnerAType
 */
class OwnerAType
{

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


}

