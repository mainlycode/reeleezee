<?php

namespace MainlyCode\Reeleezee\ValueObject\CustomerType;

/**
 * Class representing PaymentMethodReferenceAType
 */
class PaymentMethodReferenceAType
{

    /**
     * Type
     *
     * @property string $type
     */
    private $type = null;

    /**
     * Gets as type
     *
     * Type
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
     * Type
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

