<?php

namespace MainlyCode\Reeleezee\ValueObject;

/**
 * Class representing ReeleezeeLoginType
 *
 *
 * XSD Type: ReeleezeeLoginType
 */
class ReeleezeeLoginType
{

    /**
     * Gebruikersnaam in Reeleezee
     *
     * @property string $loginName
     */
    private $loginName = null;

    /**
     * Wachtwoord in Reeleezee
     *
     * @property string $password
     */
    private $password = null;

    /**
     * Gets as loginName
     *
     * Gebruikersnaam in Reeleezee
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
     * Gebruikersnaam in Reeleezee
     *
     * @param string $loginName
     * @return self
     */
    public function setLoginName($loginName)
    {
        $this->loginName = $loginName;
        return $this;
    }

    /**
     * Gets as password
     *
     * Wachtwoord in Reeleezee
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Sets a new password
     *
     * Wachtwoord in Reeleezee
     *
     * @param string $password
     * @return self
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }


}

