<?php

namespace MainlyCode\Reeleezee\ValueObject;

/**
 * Class representing DepartmentReferenceType
 *
 *
 * XSD Type: DepartmentReferenceType
 */
class DepartmentReferenceType
{

    /**
     * Afdelingsnaam
     *
     * @property string $name
     */
    private $name = null;

    /**
     * Afdelingscode
     *
     * @property string $code
     */
    private $code = null;

    /**
     * Gets as name
     *
     * Afdelingsnaam
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
     * Afdelingsnaam
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as code
     *
     * Afdelingscode
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Afdelingscode
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }


}

