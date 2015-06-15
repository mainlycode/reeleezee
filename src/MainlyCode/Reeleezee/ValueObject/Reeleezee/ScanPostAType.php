<?php

namespace MainlyCode\Reeleezee\ValueObject\Reeleezee;

/**
 * Class representing ScanPostAType
 */
class ScanPostAType
{

    /**
     * Informatie over de export
     *
     * @property \MainlyCode\Reeleezee\ValueObject\ExportInfoType $exportInfo
     */
    private $exportInfo = null;

    /**
     * @property \MainlyCode\Reeleezee\ValueObject\SPPurchaseInvoiceType[]
     * $purchaseInvoiceList
     */
    private $purchaseInvoiceList = null;

    /**
     * Gets as exportInfo
     *
     * Informatie over de export
     *
     * @return \MainlyCode\Reeleezee\ValueObject\ExportInfoType
     */
    public function getExportInfo()
    {
        return $this->exportInfo;
    }

    /**
     * Sets a new exportInfo
     *
     * Informatie over de export
     *
     * @param \MainlyCode\Reeleezee\ValueObject\ExportInfoType $exportInfo
     * @return self
     */
    public function setExportInfo(\MainlyCode\Reeleezee\ValueObject\ExportInfoType $exportInfo)
    {
        $this->exportInfo = $exportInfo;
        return $this;
    }

    /**
     * Adds as purchaseInvoice
     *
     * @return self
     * @param \MainlyCode\Reeleezee\ValueObject\SPPurchaseInvoiceType $purchaseInvoice
     */
    public function addToPurchaseInvoiceList(\MainlyCode\Reeleezee\ValueObject\SPPurchaseInvoiceType $purchaseInvoice)
    {
        $this->purchaseInvoiceList[] = $purchaseInvoice;
        return $this;
    }

    /**
     * isset purchaseInvoiceList
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPurchaseInvoiceList($index)
    {
        return isset($this->purchaseInvoiceList[$index]);
    }

    /**
     * unset purchaseInvoiceList
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPurchaseInvoiceList($index)
    {
        unset($this->purchaseInvoiceList[$index]);
    }

    /**
     * Gets as purchaseInvoiceList
     *
     * @return \MainlyCode\Reeleezee\ValueObject\SPPurchaseInvoiceType[]
     */
    public function getPurchaseInvoiceList()
    {
        return $this->purchaseInvoiceList;
    }

    /**
     * Sets a new purchaseInvoiceList
     *
     * @param \MainlyCode\Reeleezee\ValueObject\SPPurchaseInvoiceType[]
     * $purchaseInvoiceList
     * @return self
     */
    public function setPurchaseInvoiceList(array $purchaseInvoiceList)
    {
        $this->purchaseInvoiceList = $purchaseInvoiceList;
        return $this;
    }


}

