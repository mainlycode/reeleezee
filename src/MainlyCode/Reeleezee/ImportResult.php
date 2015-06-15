<?php

namespace MainlyCode\Reeleezee;

class ImportResult
{
    /**
     * @var string
     */
    private $ImportResult;

    /**
     * @return string
     */
    public function getImportResult()
    {
        return $this->ImportResult;
    }

    /**
     * @return SimpleXMLElement
     */
    public function getImportResultAsSimpleXmlElement()
    {
        return simplexml_load_string($this->ImportResult);
    }
}
