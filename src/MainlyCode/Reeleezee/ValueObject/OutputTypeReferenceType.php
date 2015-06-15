<?php

namespace MainlyCode\Reeleezee\ValueObject;

/**
 * Class representing OutputTypeReferenceType
 *
 *
 * XSD Type: OutputTypeReferenceType
 */
class OutputTypeReferenceType
{

    /**
     * Printbestemming
     *
     * @property string $name
     */
    private $name = null;

    /**
     * Gets as name
     *
     * Printbestemming
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Printbestemming
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }


}

