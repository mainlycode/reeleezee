<?php

namespace MainlyCode\Reeleezee\ValueObject\Reeleezee;

use MainlyCode\Reeleezee\ValueObject\ImportOrExportType;

/**
 * Class representing ImportAType
 */
class ImportAType extends ImportOrExportType
{

    /**
     * Optionele waarden negeren als ze ongeldig zijn
     *
     * @property boolean $autoIgnoreEnabled
     */
    private $autoIgnoreEnabled = null;

    /**
     * Optionele waarden negeren als ze ongeldig zijn
     *
     * @property boolean $autoTrimEnabled
     */
    private $autoTrimEnabled = null;

    /**
     * Waarden inkorten als ze te lang zijn
     *
     * @property boolean $autoTruncateEnabled
     */
    private $autoTruncateEnabled = null;

    /**
     * Afhandeling van inactieve objecten
     *
     * @property string $recoveryHandling
     */
    private $recoveryHandling = null;

    /**
     * Gets as autoIgnoreEnabled
     *
     * Optionele waarden negeren als ze ongeldig zijn
     *
     * @return boolean
     */
    public function getAutoIgnoreEnabled()
    {
        return $this->autoIgnoreEnabled;
    }

    /**
     * Sets a new autoIgnoreEnabled
     *
     * Optionele waarden negeren als ze ongeldig zijn
     *
     * @param boolean $autoIgnoreEnabled
     * @return self
     */
    public function setAutoIgnoreEnabled($autoIgnoreEnabled)
    {
        $this->autoIgnoreEnabled = $autoIgnoreEnabled;
        return $this;
    }

    /**
     * Gets as autoTrimEnabled
     *
     * Optionele waarden negeren als ze ongeldig zijn
     *
     * @return boolean
     */
    public function getAutoTrimEnabled()
    {
        return $this->autoTrimEnabled;
    }

    /**
     * Sets a new autoTrimEnabled
     *
     * Optionele waarden negeren als ze ongeldig zijn
     *
     * @param boolean $autoTrimEnabled
     * @return self
     */
    public function setAutoTrimEnabled($autoTrimEnabled)
    {
        $this->autoTrimEnabled = $autoTrimEnabled;
        return $this;
    }

    /**
     * Gets as autoTruncateEnabled
     *
     * Waarden inkorten als ze te lang zijn
     *
     * @return boolean
     */
    public function getAutoTruncateEnabled()
    {
        return $this->autoTruncateEnabled;
    }

    /**
     * Sets a new autoTruncateEnabled
     *
     * Waarden inkorten als ze te lang zijn
     *
     * @param boolean $autoTruncateEnabled
     * @return self
     */
    public function setAutoTruncateEnabled($autoTruncateEnabled)
    {
        $this->autoTruncateEnabled = $autoTruncateEnabled;
        return $this;
    }

    /**
     * Gets as recoveryHandling
     *
     * Afhandeling van inactieve objecten
     *
     * @return string
     */
    public function getRecoveryHandling()
    {
        return $this->recoveryHandling;
    }

    /**
     * Sets a new recoveryHandling
     *
     * Afhandeling van inactieve objecten
     *
     * @param string $recoveryHandling
     * @return self
     */
    public function setRecoveryHandling($recoveryHandling)
    {
        $this->recoveryHandling = $recoveryHandling;
        return $this;
    }


}

