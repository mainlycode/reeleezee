<?php

namespace MainlyCode\Reeleezee\ValueObject;

/**
 * Class representing PassLoginType
 *
 *
 * XSD Type: PassLoginType
 */
class PassLoginType
{

    /**
     * Gebruikerscode in PASS
     *
     * @property string $userID
     */
    private $userID = null;

    /**
     * Aanmelden voor PASS
     *
     * @property boolean $signup
     */
    private $signup = null;

    /**
     * OTP token opsturen
     *
     * @property boolean $sendOTP
     */
    private $sendOTP = null;

    /**
     * Gets as userID
     *
     * Gebruikerscode in PASS
     *
     * @return string
     */
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     * Sets a new userID
     *
     * Gebruikerscode in PASS
     *
     * @param string $userID
     * @return self
     */
    public function setUserID($userID)
    {
        $this->userID = $userID;
        return $this;
    }

    /**
     * Gets as signup
     *
     * Aanmelden voor PASS
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
     * Aanmelden voor PASS
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
     * Gets as sendOTP
     *
     * OTP token opsturen
     *
     * @return boolean
     */
    public function getSendOTP()
    {
        return $this->sendOTP;
    }

    /**
     * Sets a new sendOTP
     *
     * OTP token opsturen
     *
     * @param boolean $sendOTP
     * @return self
     */
    public function setSendOTP($sendOTP)
    {
        $this->sendOTP = $sendOTP;
        return $this;
    }


}

