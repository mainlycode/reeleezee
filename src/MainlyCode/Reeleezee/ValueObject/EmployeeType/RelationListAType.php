<?php

namespace MainlyCode\Reeleezee\ValueObject\EmployeeType;

/**
 * Class representing RelationListAType
 */
class RelationListAType
{

    /**
     * Klant referentie
     *
     * @property
     * \MainlyCode\Reeleezee\ValueObject\EmployeeType\RelationListAType\CustomerReferenceAType[]
     * $customerReference
     */
    private $customerReference = null;

    /**
     * Adds as customerReference
     *
     * Klant referentie
     *
     * @return self
     * @param
     * \MainlyCode\Reeleezee\ValueObject\EmployeeType\RelationListAType\CustomerReferenceAType
     * $customerReference
     */
    public function addToCustomerReference(\MainlyCode\Reeleezee\ValueObject\EmployeeType\RelationListAType\CustomerReferenceAType $customerReference)
    {
        $this->customerReference[] = $customerReference;
        return $this;
    }

    /**
     * isset customerReference
     *
     * Klant referentie
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCustomerReference($index)
    {
        return isset($this->customerReference[$index]);
    }

    /**
     * unset customerReference
     *
     * Klant referentie
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCustomerReference($index)
    {
        unset($this->customerReference[$index]);
    }

    /**
     * Gets as customerReference
     *
     * Klant referentie
     *
     * @return
     * \MainlyCode\Reeleezee\ValueObject\EmployeeType\RelationListAType\CustomerReferenceAType[]
     */
    public function getCustomerReference()
    {
        return $this->customerReference;
    }

    /**
     * Sets a new customerReference
     *
     * Klant referentie
     *
     * @param
     * \MainlyCode\Reeleezee\ValueObject\EmployeeType\RelationListAType\CustomerReferenceAType[]
     * $customerReference
     * @return self
     */
    public function setCustomerReference(array $customerReference)
    {
        $this->customerReference = $customerReference;
        return $this;
    }


}

