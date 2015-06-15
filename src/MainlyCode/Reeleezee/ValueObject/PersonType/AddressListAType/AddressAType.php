<?php

namespace MainlyCode\Reeleezee\ValueObject\PersonType\AddressListAType;

use MainlyCode\Reeleezee\ValueObject\AddressType;

/**
 * Class representing AddressAType
 */
class AddressAType extends AddressType
{

    /**
     * @property string $type
     */
    private $type = null;

    /**
     * Gets as type
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
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }


}

