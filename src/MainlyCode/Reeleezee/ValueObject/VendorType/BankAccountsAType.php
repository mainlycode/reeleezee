<?php

namespace MainlyCode\Reeleezee\ValueObject\VendorType;

/**
 * Class representing BankAccountsAType
 */
class BankAccountsAType
{

    /**
     * @property \MainlyCode\Reeleezee\ValueObject\BankAccountType[] $bankAccount
     */
    private $bankAccount = null;

    /**
     * Adds as bankAccount
     *
     * @return self
     * @param \MainlyCode\Reeleezee\ValueObject\BankAccountType $bankAccount
     */
    public function addToBankAccount(\MainlyCode\Reeleezee\ValueObject\BankAccountType $bankAccount)
    {
        $this->bankAccount[] = $bankAccount;
        return $this;
    }

    /**
     * isset bankAccount
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBankAccount($index)
    {
        return isset($this->bankAccount[$index]);
    }

    /**
     * unset bankAccount
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBankAccount($index)
    {
        unset($this->bankAccount[$index]);
    }

    /**
     * Gets as bankAccount
     *
     * @return \MainlyCode\Reeleezee\ValueObject\BankAccountType[]
     */
    public function getBankAccount()
    {
        return $this->bankAccount;
    }

    /**
     * Sets a new bankAccount
     *
     * @param \MainlyCode\Reeleezee\ValueObject\BankAccountType[] $bankAccount
     * @return self
     */
    public function setBankAccount(array $bankAccount)
    {
        $this->bankAccount = $bankAccount;
        return $this;
    }


}

