<?php

namespace MainlyCode\Reeleezee\ValueObject\VendorType;

/**
 * Class representing RelationListAType
 */
class RelationListAType
{

    /**
     * Contactpersoon referentie
     *
     * @property
     * \MainlyCode\Reeleezee\ValueObject\VendorType\RelationListAType\ContactPersonReferenceAType[]
     * $contactPersonReference
     */
    private $contactPersonReference = null;

    /**
     * Adds as contactPersonReference
     *
     * Contactpersoon referentie
     *
     * @return self
     * @param
     * \MainlyCode\Reeleezee\ValueObject\VendorType\RelationListAType\ContactPersonReferenceAType
     * $contactPersonReference
     */
    public function addToContactPersonReference(\MainlyCode\Reeleezee\ValueObject\VendorType\RelationListAType\ContactPersonReferenceAType $contactPersonReference)
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
     * \MainlyCode\Reeleezee\ValueObject\VendorType\RelationListAType\ContactPersonReferenceAType[]
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
     * \MainlyCode\Reeleezee\ValueObject\VendorType\RelationListAType\ContactPersonReferenceAType[]
     * $contactPersonReference
     * @return self
     */
    public function setContactPersonReference(array $contactPersonReference)
    {
        $this->contactPersonReference = $contactPersonReference;
        return $this;
    }


}

