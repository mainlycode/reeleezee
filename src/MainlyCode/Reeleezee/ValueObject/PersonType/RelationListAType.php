<?php

namespace MainlyCode\Reeleezee\ValueObject\PersonType;

/**
 * Class representing RelationListAType
 */
class RelationListAType
{

    /**
     * Klant referentie
     *
     * @property
     * \MainlyCode\Reeleezee\ValueObject\PersonType\RelationListAType\CustomerReferenceAType[]
     * $customerReference
     */
    private $customerReference = null;

    /**
     * Leverancier referentie
     *
     * @property
     * \MainlyCode\Reeleezee\ValueObject\PersonType\RelationListAType\VendorReferenceAType[]
     * $vendorReference
     */
    private $vendorReference = null;

    /**
     * Contactpersoon referentie
     *
     * @property
     * \MainlyCode\Reeleezee\ValueObject\PersonType\RelationListAType\ContactPersonReferenceAType[]
     * $contactPersonReference
     */
    private $contactPersonReference = null;

    /**
     * Adds as customerReference
     *
     * Klant referentie
     *
     * @return self
     * @param
     * \MainlyCode\Reeleezee\ValueObject\PersonType\RelationListAType\CustomerReferenceAType
     * $customerReference
     */
    public function addToCustomerReference(\MainlyCode\Reeleezee\ValueObject\PersonType\RelationListAType\CustomerReferenceAType $customerReference)
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
     * \MainlyCode\Reeleezee\ValueObject\PersonType\RelationListAType\CustomerReferenceAType[]
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
     * \MainlyCode\Reeleezee\ValueObject\PersonType\RelationListAType\CustomerReferenceAType[]
     * $customerReference
     * @return self
     */
    public function setCustomerReference(array $customerReference)
    {
        $this->customerReference = $customerReference;
        return $this;
    }

    /**
     * Adds as vendorReference
     *
     * Leverancier referentie
     *
     * @return self
     * @param
     * \MainlyCode\Reeleezee\ValueObject\PersonType\RelationListAType\VendorReferenceAType
     * $vendorReference
     */
    public function addToVendorReference(\MainlyCode\Reeleezee\ValueObject\PersonType\RelationListAType\VendorReferenceAType $vendorReference)
    {
        $this->vendorReference[] = $vendorReference;
        return $this;
    }

    /**
     * isset vendorReference
     *
     * Leverancier referentie
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetVendorReference($index)
    {
        return isset($this->vendorReference[$index]);
    }

    /**
     * unset vendorReference
     *
     * Leverancier referentie
     *
     * @param scalar $index
     * @return void
     */
    public function unsetVendorReference($index)
    {
        unset($this->vendorReference[$index]);
    }

    /**
     * Gets as vendorReference
     *
     * Leverancier referentie
     *
     * @return
     * \MainlyCode\Reeleezee\ValueObject\PersonType\RelationListAType\VendorReferenceAType[]
     */
    public function getVendorReference()
    {
        return $this->vendorReference;
    }

    /**
     * Sets a new vendorReference
     *
     * Leverancier referentie
     *
     * @param
     * \MainlyCode\Reeleezee\ValueObject\PersonType\RelationListAType\VendorReferenceAType[]
     * $vendorReference
     * @return self
     */
    public function setVendorReference(array $vendorReference)
    {
        $this->vendorReference = $vendorReference;
        return $this;
    }

    /**
     * Adds as contactPersonReference
     *
     * Contactpersoon referentie
     *
     * @return self
     * @param
     * \MainlyCode\Reeleezee\ValueObject\PersonType\RelationListAType\ContactPersonReferenceAType
     * $contactPersonReference
     */
    public function addToContactPersonReference(\MainlyCode\Reeleezee\ValueObject\PersonType\RelationListAType\ContactPersonReferenceAType $contactPersonReference)
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
     * \MainlyCode\Reeleezee\ValueObject\PersonType\RelationListAType\ContactPersonReferenceAType[]
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
     * \MainlyCode\Reeleezee\ValueObject\PersonType\RelationListAType\ContactPersonReferenceAType[]
     * $contactPersonReference
     * @return self
     */
    public function setContactPersonReference(array $contactPersonReference)
    {
        $this->contactPersonReference = $contactPersonReference;
        return $this;
    }


}

