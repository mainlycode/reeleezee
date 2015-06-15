<?php

namespace MainlyCode\Reeleezee;

class Import
{
    /**
     * @var string
     */
    private $userName;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $xmlDocument;

    /**
     * @var boolean
     */
    private $checkValidityOnly = false;

    /**
     * @param string $userName
     * @param string $password
     * @param string $xmlDocument
     *
     * @param boolean $checkValidityOnly
     */
    public function __construct($userName, $password, $xmlDocument, $checkValidityOnly = false)
    {
        $this->userName          = $userName;
        $this->password          = $password;
        $this->xmlDocument       = $xmlDocument;
        $this->checkValidityOnly = $checkValidityOnly;
    }
}
