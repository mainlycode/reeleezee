<?php

namespace MainlyCode\Reeleezee\ValueObject;

/**
 * Class representing DocproofLoginType
 *
 *
 * XSD Type: DocproofLoginType
 */
class DocproofLoginType
{

    /**
     * Aanmelden voor Docproof
     *
     * @property boolean $signup
     */
    private $signup = null;

    /**
     * Gebruikersnaam in Docproof
     *
     * @property string $loginName
     */
    private $loginName = null;

    /**
     * Gets as signup
     *
     * Aanmelden voor Docproof
     *
     * @return boolean
     */
    public function getSignup()
    {
        return $this->signup;
    }

    /**
     * Sets a new signup
     *
     * Aanmelden voor Docproof
     *
     * @param boolean $signup
     * @return self
     */
    public function setSignup($signup)
    {
        $this->signup = $signup;
        return $this;
    }

    /**
     * Gets as loginName
     *
     * Gebruikersnaam in Docproof
     *
     * @return string
     */
    public function getLoginName()
    {
        return $this->loginName;
    }

    /**
     * Sets a new loginName
     *
     * Gebruikersnaam in Docproof
     *
     * @param string $loginName
     * @return self
     */
    public function setLoginName($loginName)
    {
        $this->loginName = $loginName;
        return $this;
    }


}

