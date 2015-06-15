<?php

namespace MainlyCode\Reeleezee\ValueObject;

/**
 * Class representing Reeleezee
 */
class Reeleezee
{

    /**
     * Te importeren in Reeleezee
     *
     * @property \MainlyCode\Reeleezee\ValueObject\Reeleezee\ImportAType $import
     */
    private $import = null;

    /**
     * Resultaat van de import
     *
     * @property \MainlyCode\Reeleezee\ValueObject\ImportResultType $importResult
     */
    private $importResult = null;

    /**
     * Geëxporteerd uit Reeleezee
     *
     * @property \MainlyCode\Reeleezee\ValueObject\ImportOrExportType $export
     */
    private $export = null;

    /**
     * ScanPost
     *
     * @property \MainlyCode\Reeleezee\ValueObject\Reeleezee\ScanPostAType $scanPost
     */
    private $scanPost = null;

    /**
     * Gets as import
     *
     * Te importeren in Reeleezee
     *
     * @return \MainlyCode\Reeleezee\ValueObject\Reeleezee\ImportAType
     */
    public function getImport()
    {
        return $this->import;
    }

    /**
     * Sets a new import
     *
     * Te importeren in Reeleezee
     *
     * @param \MainlyCode\Reeleezee\ValueObject\Reeleezee\ImportAType $import
     * @return self
     */
    public function setImport(\MainlyCode\Reeleezee\ValueObject\Reeleezee\ImportAType $import)
    {
        $this->import = $import;
        return $this;
    }

    /**
     * Gets as importResult
     *
     * Resultaat van de import
     *
     * @return \MainlyCode\Reeleezee\ValueObject\ImportResultType
     */
    public function getImportResult()
    {
        return $this->importResult;
    }

    /**
     * Sets a new importResult
     *
     * Resultaat van de import
     *
     * @param \MainlyCode\Reeleezee\ValueObject\ImportResultType $importResult
     * @return self
     */
    public function setImportResult(\MainlyCode\Reeleezee\ValueObject\ImportResultType $importResult)
    {
        $this->importResult = $importResult;
        return $this;
    }

    /**
     * Gets as export
     *
     * Geëxporteerd uit Reeleezee
     *
     * @return \MainlyCode\Reeleezee\ValueObject\ImportOrExportType
     */
    public function getExport()
    {
        return $this->export;
    }

    /**
     * Sets a new export
     *
     * Geëxporteerd uit Reeleezee
     *
     * @param \MainlyCode\Reeleezee\ValueObject\ImportOrExportType $export
     * @return self
     */
    public function setExport(\MainlyCode\Reeleezee\ValueObject\ImportOrExportType $export)
    {
        $this->export = $export;
        return $this;
    }

    /**
     * Gets as scanPost
     *
     * ScanPost
     *
     * @return \MainlyCode\Reeleezee\ValueObject\Reeleezee\ScanPostAType
     */
    public function getScanPost()
    {
        return $this->scanPost;
    }

    /**
     * Sets a new scanPost
     *
     * ScanPost
     *
     * @param \MainlyCode\Reeleezee\ValueObject\Reeleezee\ScanPostAType $scanPost
     * @return self
     */
    public function setScanPost(\MainlyCode\Reeleezee\ValueObject\Reeleezee\ScanPostAType $scanPost)
    {
        $this->scanPost = $scanPost;
        return $this;
    }


}

