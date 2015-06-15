<?php

namespace MainlyCode\Reeleezee\ValueObject\CustomerType;

/**
 * Class representing AccountManagerListAType
 */
class AccountManagerListAType
{

    /**
     * Medewerker referentie
     *
     * @property
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\AccountManagerListAType\EmployeeReferenceAType
     * $employeeReference
     */
    private $employeeReference = null;

    /**
     * Gets as employeeReference
     *
     * Medewerker referentie
     *
     * @return
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\AccountManagerListAType\EmployeeReferenceAType
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
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\AccountManagerListAType\EmployeeReferenceAType
     * $employeeReference
     * @return self
     */
    public function setEmployeeReference(\MainlyCode\Reeleezee\ValueObject\CustomerType\AccountManagerListAType\EmployeeReferenceAType $employeeReference)
    {
        $this->employeeReference = $employeeReference;
        return $this;
    }


}

