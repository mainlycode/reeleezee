<?php

namespace MainlyCode\Reeleezee\ValueObject\CustomerType\BankAccountsAType;

use MainlyCode\Reeleezee\ValueObject\BankAccountType;

/**
 * Class representing BankAccountAType
 */
class BankAccountAType extends BankAccountType
{

    /**
     * @property
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\BankAccountsAType\BankAccountAType\DirectDebitAuthorizationAType
     * $directDebitAuthorization
     */
    private $directDebitAuthorization = null;

    /**
     * Gets as directDebitAuthorization
     *
     * @return
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\BankAccountsAType\BankAccountAType\DirectDebitAuthorizationAType
     */
    public function getDirectDebitAuthorization()
    {
        return $this->directDebitAuthorization;
    }

    /**
     * Sets a new directDebitAuthorization
     *
     * @param
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\BankAccountsAType\BankAccountAType\DirectDebitAuthorizationAType
     * $directDebitAuthorization
     * @return self
     */
    public function setDirectDebitAuthorization(\MainlyCode\Reeleezee\ValueObject\CustomerType\BankAccountsAType\BankAccountAType\DirectDebitAuthorizationAType $directDebitAuthorization)
    {
        $this->directDebitAuthorization = $directDebitAuthorization;
        return $this;
    }


}

