<?php

namespace MainlyCode\Reeleezee\ValueObject;

/**
 * Class representing EmployeeReferenceType
 *
 *
 * XSD Type: EmployeeReferenceType
 */
class EmployeeReferenceType
{

    /**
     * Medewerkernummer
     *
     * @property integer $iD
     */
    private $iD = null;

    /**
     * Medewerkercode
     *
     * @property string $code
     */
    private $code = null;

    /**
     * DO NOT USE !
     *
     * @property string $internalRlzID
     */
    private $internalRlzID = null;

    /**
     * Gets as iD
     *
     * Medewerkernummer
     *
     * @return integer
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * Medewerkernummer
     *
     * @param integer $iD
     * @return self
     */
    public function setID($iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as code
     *
     * Medewerkercode
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
     * Medewerkercode
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as internalRlzID
     *
     * DO NOT USE !
     *
     * @return string
     */
    public function getInternalRlzID()
    {
        return $this->internalRlzID;
    }

    /**
     * Sets a new internalRlzID
     *
     * DO NOT USE !
     *
     * @param string $internalRlzID
     * @return self
     */
    public function setInternalRlzID($internalRlzID)
    {
        $this->internalRlzID = $internalRlzID;
        return $this;
    }


}

