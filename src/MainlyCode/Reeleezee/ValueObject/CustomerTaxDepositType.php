<?php

namespace MainlyCode\Reeleezee\ValueObject;

/**
 * Class representing CustomerTaxDepositType
 *
 *
 * XSD Type: CustomerTaxDepositType
 */
class CustomerTaxDepositType
{

    /**
     * Debiteur
     *
     * @property
     * \MainlyCode\Reeleezee\ValueObject\PermissionsCustomerType\CustomerReferenceAType
     * $customerReference
     */
    private $customerReference = null;

    /**
     * Contactpersoon
     *
     * @property
     * \MainlyCode\Reeleezee\ValueObject\ContactPersonListType\ContactPersonReferenceAType
     * $contactPersonReference
     */
    private $contactPersonReference = null;

    /**
     * Type
     *
     * @property string $type
     */
    private $type = null;

    /**
     * Nummer
     *
     * @property string $number
     */
    private $number = null;

    /**
     * Jaar
     *
     * @property integer $year
     */
    private $year = null;

    /**
     * Periode
     *
     * @property integer $period
     */
    private $period = null;

    /**
     * Verloop datum
     *
     * @property \DateTime $expireDate
     */
    private $expireDate = null;

    /**
     * Status
     *
     * @property string $status
     */
    private $status = null;

    /**
     * Gets as customerReference
     *
     * Debiteur
     *
     * @return
     * \MainlyCode\Reeleezee\ValueObject\PermissionsCustomerType\CustomerReferenceAType
     */
    public function getCustomerReference()
    {
        return $this->customerReference;
    }

    /**
     * Sets a new customerReference
     *
     * Debiteur
     *
     * @param
     * \MainlyCode\Reeleezee\ValueObject\PermissionsCustomerType\CustomerReferenceAType
     * $customerReference
     * @return self
     */
    public function setCustomerReference(\MainlyCode\Reeleezee\ValueObject\PermissionsCustomerType\CustomerReferenceAType $customerReference)
    {
        $this->customerReference = $customerReference;
        return $this;
    }

    /**
     * Gets as contactPersonReference
     *
     * Contactpersoon
     *
     * @return
     * \MainlyCode\Reeleezee\ValueObject\ContactPersonListType\ContactPersonReferenceAType
     */
    public function getContactPersonReference()
    {
        return $this->contactPersonReference;
    }

    /**
     * Sets a new contactPersonReference
     *
     * Contactpersoon
     *
     * @param
     * \MainlyCode\Reeleezee\ValueObject\ContactPersonListType\ContactPersonReferenceAType
     * $contactPersonReference
     * @return self
     */
    public function setContactPersonReference(\MainlyCode\Reeleezee\ValueObject\ContactPersonListType\ContactPersonReferenceAType $contactPersonReference)
    {
        $this->contactPersonReference = $contactPersonReference;
        return $this;
    }

    /**
     * Gets as type
     *
     * Type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as number
     *
     * Nummer
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * Nummer
     *
     * @param string $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * Gets as year
     *
     * Jaar
     *
     * @return integer
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Sets a new year
     *
     * Jaar
     *
     * @param integer $year
     * @return self
     */
    public function setYear($year)
    {
        $this->year = $year;
        return $this;
    }

    /**
     * Gets as period
     *
     * Periode
     *
     * @return integer
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * Periode
     *
     * @param integer $period
     * @return self
     */
    public function setPeriod($period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Gets as expireDate
     *
     * Verloop datum
     *
     * @return \DateTime
     */
    public function getExpireDate()
    {
        return $this->expireDate;
    }

    /**
     * Sets a new expireDate
     *
     * Verloop datum
     *
     * @param \DateTime $expireDate
     * @return self
     */
    public function setExpireDate(\DateTime $expireDate)
    {
        $this->expireDate = $expireDate;
        return $this;
    }

    /**
     * Gets as status
     *
     * Status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Status
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }


}

