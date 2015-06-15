<?php

namespace MainlyCode\Reeleezee\ValueObject\SPPurchaseInvoiceType;

/**
 * Class representing RecipientAType
 */
class RecipientAType
{

    /**
     * Naam
     *
     * @property string $fullName
     */
    private $fullName = null;

    /**
     * Postcode
     *
     * @property string $zipcode
     */
    private $zipcode = null;

    /**
     * Postbus nummer
     *
     * @property integer $mailboxNumber
     */
    private $mailboxNumber = null;

    /**
     * ReeleezeeID
     *
     * @property string $reeleezeeID
     */
    private $reeleezeeID = null;

    /**
     * Gets as fullName
     *
     * Naam
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * Sets a new fullName
     *
     * Naam
     *
     * @param string $fullName
     * @return self
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
        return $this;
    }

    /**
     * Gets as zipcode
     *
     * Postcode
     *
     * @return string
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * Sets a new zipcode
     *
     * Postcode
     *
     * @param string $zipcode
     * @return self
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;
        return $this;
    }

    /**
     * Gets as mailboxNumber
     *
     * Postbus nummer
     *
     * @return integer
     */
    public function getMailboxNumber()
    {
        return $this->mailboxNumber;
    }

    /**
     * Sets a new mailboxNumber
     *
     * Postbus nummer
     *
     * @param integer $mailboxNumber
     * @return self
     */
    public function setMailboxNumber($mailboxNumber)
    {
        $this->mailboxNumber = $mailboxNumber;
        return $this;
    }

    /**
     * Gets as reeleezeeID
     *
     * ReeleezeeID
     *
     * @return string
     */
    public function getReeleezeeID()
    {
        return $this->reeleezeeID;
    }

    /**
     * Sets a new reeleezeeID
     *
     * ReeleezeeID
     *
     * @param string $reeleezeeID
     * @return self
     */
    public function setReeleezeeID($reeleezeeID)
    {
        $this->reeleezeeID = $reeleezeeID;
        return $this;
    }


}

