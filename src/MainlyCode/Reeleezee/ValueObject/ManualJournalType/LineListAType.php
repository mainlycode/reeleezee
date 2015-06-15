<?php

namespace MainlyCode\Reeleezee\ValueObject\ManualJournalType;

/**
 * Class representing LineListAType
 */
class LineListAType
{

    /**
     * Memoriaalregel
     *
     * @property \MainlyCode\Reeleezee\ValueObject\ManualJournalLineType[] $line
     */
    private $line = null;

    /**
     * Adds as line
     *
     * Memoriaalregel
     *
     * @return self
     * @param \MainlyCode\Reeleezee\ValueObject\ManualJournalLineType $line
     */
    public function addToLine(\MainlyCode\Reeleezee\ValueObject\ManualJournalLineType $line)
    {
        $this->line[] = $line;
        return $this;
    }

    /**
     * isset line
     *
     * Memoriaalregel
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
     * Memoriaalregel
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
     * Memoriaalregel
     *
     * @return \MainlyCode\Reeleezee\ValueObject\ManualJournalLineType[]
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * Sets a new line
     *
     * Memoriaalregel
     *
     * @param \MainlyCode\Reeleezee\ValueObject\ManualJournalLineType[] $line
     * @return self
     */
    public function setLine(array $line)
    {
        $this->line = $line;
        return $this;
    }


}

