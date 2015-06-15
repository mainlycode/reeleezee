<?php

namespace MainlyCode\Reeleezee\ValueObject\SalesInvoiceType;

/**
 * Class representing LineListAType
 */
class LineListAType
{

    /**
     * Factuurregel
     *
     * @property \MainlyCode\Reeleezee\ValueObject\SalesInvoiceLineType[] $line
     */
    private $line = null;

    /**
     * Adds as line
     *
     * Factuurregel
     *
     * @return self
     * @param \MainlyCode\Reeleezee\ValueObject\SalesInvoiceLineType $line
     */
    public function addToLine(\MainlyCode\Reeleezee\ValueObject\SalesInvoiceLineType $line)
    {
        $this->line[] = $line;
        return $this;
    }

    /**
     * isset line
     *
     * Factuurregel
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLine($index)
    {
        return isset($this->line[$index]);
    }

    /**
     * unset line
     *
     * Factuurregel
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLine($index)
    {
        unset($this->line[$index]);
    }

    /**
     * Gets as line
     *
     * Factuurregel
     *
     * @return \MainlyCode\Reeleezee\ValueObject\SalesInvoiceLineType[]
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * Sets a new line
     *
     * Factuurregel
     *
     * @param \MainlyCode\Reeleezee\ValueObject\SalesInvoiceLineType[] $line
     * @return self
     */
    public function setLine(array $line)
    {
        $this->line = $line;
        return $this;
    }


}

