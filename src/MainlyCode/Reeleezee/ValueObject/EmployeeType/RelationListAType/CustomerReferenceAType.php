<?php

namespace MainlyCode\Reeleezee\ValueObject\EmployeeType\RelationListAType;

use MainlyCode\Reeleezee\ValueObject\CustomerReferenceType;

/**
 * Class representing CustomerReferenceAType
 */
class CustomerReferenceAType extends CustomerReferenceType
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

