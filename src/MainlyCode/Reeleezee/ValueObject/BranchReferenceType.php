<?php

namespace MainlyCode\Reeleezee\ValueObject;

/**
 * Class representing BranchReferenceType
 *
 *
 * XSD Type: BranchReferenceType
 */
class BranchReferenceType
{

    /**
     * Naam
     *
     * @property string $name
     */
    private $name = null;

    /**
     * Code
     *
     * @property string $code
     */
    private $code = null;

    /**
     * Gets as name
     *
     * Naam
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
     * Naam
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
     * Code
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
     * Code
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

