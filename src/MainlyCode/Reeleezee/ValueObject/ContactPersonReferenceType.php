<?php

namespace MainlyCode\Reeleezee\ValueObject;

/**
 * Class representing ContactPersonReferenceType
 *
 *
 * XSD Type: ContactPersonReferenceType
 */
class ContactPersonReferenceType
{

    /**
     * Person id
     *
     * @property integer $iD
     */
    private $iD = null;

    /**
     * Social security number
     *
     * @property string $socialSecurityNumber
     */
    private $socialSecurityNumber = null;

    /**
     * Person code
     *
     * @property string $code
     */
    private $code = null;

    /**
     * Internal Reeleezee id
     *
     * @property string $internalRlzID
     */
    private $internalRlzID = null;

    /**
     * Gets as iD
     *
     * Person id
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
     * Person id
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
     * Gets as socialSecurityNumber
     *
     * Social security number
     *
     * @return string
     */
    public function getSocialSecurityNumber()
    {
        return $this->socialSecurityNumber;
    }

    /**
     * Sets a new socialSecurityNumber
     *
     * Social security number
     *
     * @param string $socialSecurityNumber
     * @return self
     */
    public function setSocialSecurityNumber($socialSecurityNumber)
    {
        $this->socialSecurityNumber = $socialSecurityNumber;
        return $this;
    }

    /**
     * Gets as code
     *
     * Person code
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
     * Person code
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
     * Internal Reeleezee id
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
     * Internal Reeleezee id
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

