<?php

namespace MainlyCode\Reeleezee\ValueObject\CustomerType;

/**
 * Class representing BankAccountsAType
 */
class BankAccountsAType
{

    /**
     * @property
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\BankAccountsAType\BankAccountAType[]
     * $bankAccount
     */
    private $bankAccount = null;

    /**
     * Adds as bankAccount
     *
     * @return self
     * @param
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\BankAccountsAType\BankAccountAType
     * $bankAccount
     */
    public function addToBankAccount(\MainlyCode\Reeleezee\ValueObject\CustomerType\BankAccountsAType\BankAccountAType $bankAccount)
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
     * @return
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\BankAccountsAType\BankAccountAType[]
     */
    public function getBankAccount()
    {
        return $this->bankAccount;
    }

    /**
     * Sets a new bankAccount
     *
     * @param
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\BankAccountsAType\BankAccountAType[]
     * $bankAccount
     * @return self
     */
    public function setBankAccount(array $bankAccount)
    {
        $this->bankAccount = $bankAccount;
        return $this;
    }


}

