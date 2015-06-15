<?php

namespace MainlyCode\Reeleezee\ValueObject\DossierFileType;

/**
 * Class representing SourceFileContentAType
 */
class SourceFileContentAType
{

    /**
     * @property mixed $__value
     */
    private $__value = null;

    /**
     * Bron bestand
     *
     * @property string $sourceFileLocation
     */
    private $sourceFileLocation = null;

    /**
     * Compressie
     *
     * @property string $compression
     */
    private $compression = null;

    /**
     * Construct
     *
     * @param mixed $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param mixed $value
     * @return mixed
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

    /**
     * Gets as sourceFileLocation
     *
     * Bron bestand
     *
     * @return string
     */
    public function getSourceFileLocation()
    {
        return $this->sourceFileLocation;
    }

    /**
     * Sets a new sourceFileLocation
     *
     * Bron bestand
     *
     * @param string $sourceFileLocation
     * @return self
     */
    public function setSourceFileLocation($sourceFileLocation)
    {
        $this->sourceFileLocation = $sourceFileLocation;
        return $this;
    }

    /**
     * Gets as compression
     *
     * Compressie
     *
     * @return string
     */
    public function getCompression()
    {
        return $this->compression;
    }

    /**
     * Sets a new compression
     *
     * Compressie
     *
     * @param string $compression
     * @return self
     */
    public function setCompression($compression)
    {
        $this->compression = $compression;
        return $this;
    }


}

