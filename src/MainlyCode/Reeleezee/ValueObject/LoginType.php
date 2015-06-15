<?php

namespace MainlyCode\Reeleezee\ValueObject;

/**
 * Class representing LoginType
 *
 *
 * XSD Type: LoginType
 */
class LoginType
{

    /**
     * Reeleezee Login
     *
     * @property \MainlyCode\Reeleezee\ValueObject\ReeleezeeLoginType $reeleezee
     */
    private $reeleezee = null;

    /**
     * PASS Login
     *
     * @property \MainlyCode\Reeleezee\ValueObject\PassLoginType $pass
     */
    private $pass = null;

    /**
     * Unit4 Webber Login
     *
     * @property \MainlyCode\Reeleezee\ValueObject\Unit4WebberLoginType $unit4Webber
     */
    private $unit4Webber = null;

    /**
     * Docproof Login
     *
     * @property \MainlyCode\Reeleezee\ValueObject\DocproofLoginType $docproof
     */
    private $docproof = null;

    /**
     * Gets as reeleezee
     *
     * Reeleezee Login
     *
     * @return \MainlyCode\Reeleezee\ValueObject\ReeleezeeLoginType
     */
    public function getReeleezee()
    {
        return $this->reeleezee;
    }

    /**
     * Sets a new reeleezee
     *
     * Reeleezee Login
     *
     * @param \MainlyCode\Reeleezee\ValueObject\ReeleezeeLoginType $reeleezee
     * @return self
     */
    public function setReeleezee(\MainlyCode\Reeleezee\ValueObject\ReeleezeeLoginType $reeleezee)
    {
        $this->reeleezee = $reeleezee;
        return $this;
    }

    /**
     * Gets as pass
     *
     * PASS Login
     *
     * @return \MainlyCode\Reeleezee\ValueObject\PassLoginType
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * Sets a new pass
     *
     * PASS Login
     *
     * @param \MainlyCode\Reeleezee\ValueObject\PassLoginType $pass
     * @return self
     */
    public function setPass(\MainlyCode\Reeleezee\ValueObject\PassLoginType $pass)
    {
        $this->pass = $pass;
        return $this;
    }

    /**
     * Gets as unit4Webber
     *
     * Unit4 Webber Login
     *
     * @return \MainlyCode\Reeleezee\ValueObject\Unit4WebberLoginType
     */
    public function getUnit4Webber()
    {
        return $this->unit4Webber;
    }

    /**
     * Sets a new unit4Webber
     *
     * Unit4 Webber Login
     *
     * @param \MainlyCode\Reeleezee\ValueObject\Unit4WebberLoginType $unit4Webber
     * @return self
     */
    public function setUnit4Webber(\MainlyCode\Reeleezee\ValueObject\Unit4WebberLoginType $unit4Webber)
    {
        $this->unit4Webber = $unit4Webber;
        return $this;
    }

    /**
     * Gets as docproof
     *
     * Docproof Login
     *
     * @return \MainlyCode\Reeleezee\ValueObject\DocproofLoginType
     */
    public function getDocproof()
    {
        return $this->docproof;
    }

    /**
     * Sets a new docproof
     *
     * Docproof Login
     *
     * @param \MainlyCode\Reeleezee\ValueObject\DocproofLoginType $docproof
     * @return self
     */
    public function setDocproof(\MainlyCode\Reeleezee\ValueObject\DocproofLoginType $docproof)
    {
        $this->docproof = $docproof;
        return $this;
    }


}

