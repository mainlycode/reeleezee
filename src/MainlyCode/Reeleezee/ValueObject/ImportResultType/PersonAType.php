<?php

namespace MainlyCode\Reeleezee\ValueObject\ImportResultType;

/**
 * Class representing PersonAType
 */
class PersonAType
{

    /**
     * @property integer $totalProcessed
     */
    private $totalProcessed = null;

    /**
     * @property integer $totalCreated
     */
    private $totalCreated = null;

    /**
     * @property integer $totalUpdated
     */
    private $totalUpdated = null;

    /**
     * @property integer $totalDeleted
     */
    private $totalDeleted = null;

    /**
     * @property integer $totalIgnored
     */
    private $totalIgnored = null;

    /**
     * @property \MainlyCode\Reeleezee\ValueObject\MessageListType\MessageAType[]
     * $messageList
     */
    private $messageList = null;

    /**
     * @property
     * \MainlyCode\Reeleezee\ValueObject\ImportResultType\PersonAType\LoginAType $login
     */
    private $login = null;

    /**
     * Gets as totalProcessed
     *
     * @return integer
     */
    public function getTotalProcessed()
    {
        return $this->totalProcessed;
    }

    /**
     * Sets a new totalProcessed
     *
     * @param integer $totalProcessed
     * @return self
     */
    public function setTotalProcessed($totalProcessed)
    {
        $this->totalProcessed = $totalProcessed;
        return $this;
    }

    /**
     * Gets as totalCreated
     *
     * @return integer
     */
    public function getTotalCreated()
    {
        return $this->totalCreated;
    }

    /**
     * Sets a new totalCreated
     *
     * @param integer $totalCreated
     * @return self
     */
    public function setTotalCreated($totalCreated)
    {
        $this->totalCreated = $totalCreated;
        return $this;
    }

    /**
     * Gets as totalUpdated
     *
     * @return integer
     */
    public function getTotalUpdated()
    {
        return $this->totalUpdated;
    }

    /**
     * Sets a new totalUpdated
     *
     * @param integer $totalUpdated
     * @return self
     */
    public function setTotalUpdated($totalUpdated)
    {
        $this->totalUpdated = $totalUpdated;
        return $this;
    }

    /**
     * Gets as totalDeleted
     *
     * @return integer
     */
    public function getTotalDeleted()
    {
        return $this->totalDeleted;
    }

    /**
     * Sets a new totalDeleted
     *
     * @param integer $totalDeleted
     * @return self
     */
    public function setTotalDeleted($totalDeleted)
    {
        $this->totalDeleted = $totalDeleted;
        return $this;
    }

    /**
     * Gets as totalIgnored
     *
     * @return integer
     */
    public function getTotalIgnored()
    {
        return $this->totalIgnored;
    }

    /**
     * Sets a new totalIgnored
     *
     * @param integer $totalIgnored
     * @return self
     */
    public function setTotalIgnored($totalIgnored)
    {
        $this->totalIgnored = $totalIgnored;
        return $this;
    }

    /**
     * Adds as message
     *
     * @return self
     * @param \MainlyCode\Reeleezee\ValueObject\MessageListType\MessageAType $message
     */
    public function addToMessageList(\MainlyCode\Reeleezee\ValueObject\MessageListType\MessageAType $message)
    {
        $this->messageList[] = $message;
        return $this;
    }

    /**
     * isset messageList
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMessageList($index)
    {
        return isset($this->messageList[$index]);
    }

    /**
     * unset messageList
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMessageList($index)
    {
        unset($this->messageList[$index]);
    }

    /**
     * Gets as messageList
     *
     * @return \MainlyCode\Reeleezee\ValueObject\MessageListType\MessageAType[]
     */
    public function getMessageList()
    {
        return $this->messageList;
    }

    /**
     * Sets a new messageList
     *
     * @param \MainlyCode\Reeleezee\ValueObject\MessageListType\MessageAType[]
     * $messageList
     * @return self
     */
    public function setMessageList(array $messageList)
    {
        $this->messageList = $messageList;
        return $this;
    }

    /**
     * Gets as login
     *
     * @return
     * \MainlyCode\Reeleezee\ValueObject\ImportResultType\PersonAType\LoginAType
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Sets a new login
     *
     * @param \MainlyCode\Reeleezee\ValueObject\ImportResultType\PersonAType\LoginAType
     * $login
     * @return self
     */
    public function setLogin(\MainlyCode\Reeleezee\ValueObject\ImportResultType\PersonAType\LoginAType $login)
    {
        $this->login = $login;
        return $this;
    }


}

