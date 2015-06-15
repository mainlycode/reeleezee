<?php

namespace MainlyCode\Reeleezee\ValueObject\DossierFileType;

/**
 * Class representing SignerListAType
 */
class SignerListAType
{

    /**
     * Medewerker referentie
     *
     * @property
     * \MainlyCode\Reeleezee\ValueObject\DossierFileType\SignerListAType\EmployeeReferenceAType[]
     * $employeeReference
     */
    private $employeeReference = null;

    /**
     * Contactpersoon referentie
     *
     * @property
     * \MainlyCode\Reeleezee\ValueObject\DossierFileType\SignerListAType\ContactPersonReferenceAType[]
     * $contactPersonReference
     */
    private $contactPersonReference = null;

    /**
     * Adds as employeeReference
     *
     * Medewerker referentie
     *
     * @return self
     * @param
     * \MainlyCode\Reeleezee\ValueObject\DossierFileType\SignerListAType\EmployeeReferenceAType
     * $employeeReference
     */
    public function addToEmployeeReference(\MainlyCode\Reeleezee\ValueObject\DossierFileType\SignerListAType\EmployeeReferenceAType $employeeReference)
    {
        $this->employeeReference[] = $employeeReference;
        return $this;
    }

    /**
     * isset employeeReference
     *
     * Medewerker referentie
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEmployeeReference($index)
    {
        return isset($this->employeeReference[$index]);
    }

    /**
     * unset employeeReference
     *
     * Medewerker referentie
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEmployeeReference($index)
    {
        unset($this->employeeReference[$index]);
    }

    /**
     * Gets as employeeReference
     *
     * Medewerker referentie
     *
     * @return
     * \MainlyCode\Reeleezee\ValueObject\DossierFileType\SignerListAType\EmployeeReferenceAType[]
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
     * \MainlyCode\Reeleezee\ValueObject\DossierFileType\SignerListAType\EmployeeReferenceAType[]
     * $employeeReference
     * @return self
     */
    public function setEmployeeReference(array $employeeReference)
    {
        $this->employeeReference = $employeeReference;
        return $this;
    }

    /**
     * Adds as contactPersonReference
     *
     * Contactpersoon referentie
     *
     * @return self
     * @param
     * \MainlyCode\Reeleezee\ValueObject\DossierFileType\SignerListAType\ContactPersonReferenceAType
     * $contactPersonReference
     */
    public function addToContactPersonReference(\MainlyCode\Reeleezee\ValueObject\DossierFileType\SignerListAType\ContactPersonReferenceAType $contactPersonReference)
    {
        $this->contactPersonReference[] = $contactPersonReference;
        return $this;
    }

    /**
     * isset contactPersonReference
     *
     * Contactpersoon referentie
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetContactPersonReference($index)
    {
        return isset($this->contactPersonReference[$index]);
    }

    /**
     * unset contactPersonReference
     *
     * Contactpersoon referentie
     *
     * @param scalar $index
     * @return void
     */
    public function unsetContactPersonReference($index)
    {
        unset($this->contactPersonReference[$index]);
    }

    /**
     * Gets as contactPersonReference
     *
     * Contactpersoon referentie
     *
     * @return
     * \MainlyCode\Reeleezee\ValueObject\DossierFileType\SignerListAType\ContactPersonReferenceAType[]
     */
    public function getContactPersonReference()
    {
        return $this->contactPersonReference;
    }

    /**
     * Sets a new contactPersonReference
     *
     * Contactpersoon referentie
     *
     * @param
     * \MainlyCode\Reeleezee\ValueObject\DossierFileType\SignerListAType\ContactPersonReferenceAType[]
     * $contactPersonReference
     * @return self
     */
    public function setContactPersonReference(array $contactPersonReference)
    {
        $this->contactPersonReference = $contactPersonReference;
        return $this;
    }


}

