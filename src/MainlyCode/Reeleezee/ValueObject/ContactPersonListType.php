<?php

namespace MainlyCode\Reeleezee\ValueObject;

/**
 * Class representing ContactPersonListType
 *
 *
 * XSD Type: ContactPersonListType
 */
class ContactPersonListType
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
     * Contactpersoon (VEROUDERD, GEBRUIK ContactPersonReference)
     *
     * @property
     * \MainlyCode\Reeleezee\ValueObject\ContactPersonListType\ContactPersonAType[]
     * $contactPerson
     */
    private $contactPerson = null;

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
     * Adds as contactPerson
     *
     * Contactpersoon (VEROUDERD, GEBRUIK ContactPersonReference)
     *
     * @return self
     * @param
     * \MainlyCode\Reeleezee\ValueObject\ContactPersonListType\ContactPersonAType
     * $contactPerson
     */
    public function addToContactPerson(\MainlyCode\Reeleezee\ValueObject\ContactPersonListType\ContactPersonAType $contactPerson)
    {
        $this->contactPerson[] = $contactPerson;
        return $this;
    }

    /**
     * isset contactPerson
     *
     * Contactpersoon (VEROUDERD, GEBRUIK ContactPersonReference)
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetContactPerson($index)
    {
        return isset($this->contactPerson[$index]);
    }

    /**
     * unset contactPerson
     *
     * Contactpersoon (VEROUDERD, GEBRUIK ContactPersonReference)
     *
     * @param scalar $index
     * @return void
     */
    public function unsetContactPerson($index)
    {
        unset($this->contactPerson[$index]);
    }

    /**
     * Gets as contactPerson
     *
     * Contactpersoon (VEROUDERD, GEBRUIK ContactPersonReference)
     *
     * @return
     * \MainlyCode\Reeleezee\ValueObject\ContactPersonListType\ContactPersonAType[]
     */
    public function getContactPerson()
    {
        return $this->contactPerson;
    }

    /**
     * Sets a new contactPerson
     *
     * Contactpersoon (VEROUDERD, GEBRUIK ContactPersonReference)
     *
     * @param
     * \MainlyCode\Reeleezee\ValueObject\ContactPersonListType\ContactPersonAType[]
     * $contactPerson
     * @return self
     */
    public function setContactPerson(array $contactPerson)
    {
        $this->contactPerson = $contactPerson;
        return $this;
    }


}

