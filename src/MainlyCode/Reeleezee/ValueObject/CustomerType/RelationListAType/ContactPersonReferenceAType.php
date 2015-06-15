<?php

namespace MainlyCode\Reeleezee\ValueObject\CustomerType\RelationListAType;

use MainlyCode\Reeleezee\ValueObject\ContactPersonReferenceType;

/**
 * Class representing ContactPersonReferenceAType
 */
class ContactPersonReferenceAType extends ContactPersonReferenceType
{

    /**
     * Soort relatie
     *
     * @property string $type
     */
    private $type = null;

    /**
     * Gets as type
     *
     * Soort relatie
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
     * Soort relatie
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }


}

