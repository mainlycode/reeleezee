<?php

namespace MainlyCode\Reeleezee\ValueObject;

/**
 * Class representing PermissionsCustomerType
 *
 *
 * XSD Type: PermissionsCustomerType
 */
class PermissionsCustomerType
{

    /**
     * @property boolean $hasAccess
     */
    private $hasAccess = null;

    /**
     * Debiteur
     *
     * @property
     * \MainlyCode\Reeleezee\ValueObject\PermissionsCustomerType\CustomerReferenceAType[]
     * $customerReference
     */
    private $customerReference = null;

    /**
     * Gets as hasAccess
     *
     * @return boolean
     */
    public function getHasAccess()
    {
        return $this->hasAccess;
    }

    /**
     * Sets a new hasAccess
     *
     * @param boolean $hasAccess
     * @return self
     */
    public function setHasAccess($hasAccess)
    {
        $this->hasAccess = $hasAccess;
        return $this;
    }

    /**
     * Adds as customerReference
     *
     * Debiteur
     *
     * @return self
     * @param
     * \MainlyCode\Reeleezee\ValueObject\PermissionsCustomerType\CustomerReferenceAType
     * $customerReference
     */
    public function addToCustomerReference(\MainlyCode\Reeleezee\ValueObject\PermissionsCustomerType\CustomerReferenceAType $customerReference)
    {
        $this->customerReference[] = $customerReference;
        return $this;
    }

    /**
     * isset customerReference
     *
     * Debiteur
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
     * Debiteur
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
     * Debiteur
     *
     * @return
     * \MainlyCode\Reeleezee\ValueObject\PermissionsCustomerType\CustomerReferenceAType[]
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
     * \MainlyCode\Reeleezee\ValueObject\PermissionsCustomerType\CustomerReferenceAType[]
     * $customerReference
     * @return self
     */
    public function setCustomerReference(array $customerReference)
    {
        $this->customerReference = $customerReference;
        return $this;
    }


}

