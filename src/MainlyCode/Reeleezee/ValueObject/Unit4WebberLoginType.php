<?php

namespace MainlyCode\Reeleezee\ValueObject;

/**
 * Class representing Unit4WebberLoginType
 *
 *
 * XSD Type: Unit4WebberLoginType
 */
class Unit4WebberLoginType
{

    /**
     * Aanmelden voor Unit4 Webber
     *
     * @property boolean $signup
     */
    private $signup = null;

    /**
     * Gebruikersnaam in Unit4 Webber
     *
     * @property string $loginName
     */
    private $loginName = null;

    /**
     * Gets as signup
     *
     * Aanmelden voor Unit4 Webber
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
     * Aanmelden voor Unit4 Webber
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
     * Gebruikersnaam in Unit4 Webber
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
     * Gebruikersnaam in Unit4 Webber
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

