<?php

namespace MainlyCode\Reeleezee\ValueObject\CustomerType;

/**
 * Class representing FiscalIdentificationsAType
 */
class FiscalIdentificationsAType
{

    /**
     * Fiscaal nummer
     *
     * @property
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\FiscalIdentificationsAType\FiscalIdentificationAType[]
     * $fiscalIdentification
     */
    private $fiscalIdentification = null;

    /**
     * Aangiftenummer omzetbelasting (OB)
     *
     * @property
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\FiscalIdentificationsAType\VatReturnAType[]
     * $vatReturn
     */
    private $vatReturn = null;

    /**
     * Aangiftenummer loonheffing (LH)
     *
     * @property
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\FiscalIdentificationsAType\SalaryTaxAType[]
     * $salaryTax
     */
    private $salaryTax = null;

    /**
     * Aangiftenummer intracommunautaire leveringen (ICL)
     *
     * @property
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\FiscalIdentificationsAType\IntracommunitySuppliesAType[]
     * $intracommunitySupplies
     */
    private $intracommunitySupplies = null;

    /**
     * Aangiftenummer intracommunautaire prestaties (ICP)
     *
     * @property
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\FiscalIdentificationsAType\IntracommunityPerformanceAType[]
     * $intracommunityPerformance
     */
    private $intracommunityPerformance = null;

    /**
     * Deponeringsnummer Verkorte winstaangifte vennootschapsbelasting (vWIA VPB)
     *
     * @property
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\FiscalIdentificationsAType\ShortCorporateIncomeTaxAType[]
     * $shortCorporateIncomeTax
     */
    private $shortCorporateIncomeTax = null;

    /**
     * Deponeringsnummer vennootschapsbelasting (VPB)
     *
     * @property
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\FiscalIdentificationsAType\CorporateIncomeTaxAType[]
     * $corporateIncomeTax
     */
    private $corporateIncomeTax = null;

    /**
     * Adds as fiscalIdentification
     *
     * Fiscaal nummer
     *
     * @return self
     * @param
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\FiscalIdentificationsAType\FiscalIdentificationAType
     * $fiscalIdentification
     */
    public function addToFiscalIdentification(\MainlyCode\Reeleezee\ValueObject\CustomerType\FiscalIdentificationsAType\FiscalIdentificationAType $fiscalIdentification)
    {
        $this->fiscalIdentification[] = $fiscalIdentification;
        return $this;
    }

    /**
     * isset fiscalIdentification
     *
     * Fiscaal nummer
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFiscalIdentification($index)
    {
        return isset($this->fiscalIdentification[$index]);
    }

    /**
     * unset fiscalIdentification
     *
     * Fiscaal nummer
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFiscalIdentification($index)
    {
        unset($this->fiscalIdentification[$index]);
    }

    /**
     * Gets as fiscalIdentification
     *
     * Fiscaal nummer
     *
     * @return
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\FiscalIdentificationsAType\FiscalIdentificationAType[]
     */
    public function getFiscalIdentification()
    {
        return $this->fiscalIdentification;
    }

    /**
     * Sets a new fiscalIdentification
     *
     * Fiscaal nummer
     *
     * @param
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\FiscalIdentificationsAType\FiscalIdentificationAType[]
     * $fiscalIdentification
     * @return self
     */
    public function setFiscalIdentification(array $fiscalIdentification)
    {
        $this->fiscalIdentification = $fiscalIdentification;
        return $this;
    }

    /**
     * Adds as vatReturn
     *
     * Aangiftenummer omzetbelasting (OB)
     *
     * @return self
     * @param
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\FiscalIdentificationsAType\VatReturnAType
     * $vatReturn
     */
    public function addToVatReturn(\MainlyCode\Reeleezee\ValueObject\CustomerType\FiscalIdentificationsAType\VatReturnAType $vatReturn)
    {
        $this->vatReturn[] = $vatReturn;
        return $this;
    }

    /**
     * isset vatReturn
     *
     * Aangiftenummer omzetbelasting (OB)
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetVatReturn($index)
    {
        return isset($this->vatReturn[$index]);
    }

    /**
     * unset vatReturn
     *
     * Aangiftenummer omzetbelasting (OB)
     *
     * @param scalar $index
     * @return void
     */
    public function unsetVatReturn($index)
    {
        unset($this->vatReturn[$index]);
    }

    /**
     * Gets as vatReturn
     *
     * Aangiftenummer omzetbelasting (OB)
     *
     * @return
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\FiscalIdentificationsAType\VatReturnAType[]
     */
    public function getVatReturn()
    {
        return $this->vatReturn;
    }

    /**
     * Sets a new vatReturn
     *
     * Aangiftenummer omzetbelasting (OB)
     *
     * @param
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\FiscalIdentificationsAType\VatReturnAType[]
     * $vatReturn
     * @return self
     */
    public function setVatReturn(array $vatReturn)
    {
        $this->vatReturn = $vatReturn;
        return $this;
    }

    /**
     * Adds as salaryTax
     *
     * Aangiftenummer loonheffing (LH)
     *
     * @return self
     * @param
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\FiscalIdentificationsAType\SalaryTaxAType
     * $salaryTax
     */
    public function addToSalaryTax(\MainlyCode\Reeleezee\ValueObject\CustomerType\FiscalIdentificationsAType\SalaryTaxAType $salaryTax)
    {
        $this->salaryTax[] = $salaryTax;
        return $this;
    }

    /**
     * isset salaryTax
     *
     * Aangiftenummer loonheffing (LH)
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSalaryTax($index)
    {
        return isset($this->salaryTax[$index]);
    }

    /**
     * unset salaryTax
     *
     * Aangiftenummer loonheffing (LH)
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSalaryTax($index)
    {
        unset($this->salaryTax[$index]);
    }

    /**
     * Gets as salaryTax
     *
     * Aangiftenummer loonheffing (LH)
     *
     * @return
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\FiscalIdentificationsAType\SalaryTaxAType[]
     */
    public function getSalaryTax()
    {
        return $this->salaryTax;
    }

    /**
     * Sets a new salaryTax
     *
     * Aangiftenummer loonheffing (LH)
     *
     * @param
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\FiscalIdentificationsAType\SalaryTaxAType[]
     * $salaryTax
     * @return self
     */
    public function setSalaryTax(array $salaryTax)
    {
        $this->salaryTax = $salaryTax;
        return $this;
    }

    /**
     * Adds as intracommunitySupplies
     *
     * Aangiftenummer intracommunautaire leveringen (ICL)
     *
     * @return self
     * @param
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\FiscalIdentificationsAType\IntracommunitySuppliesAType
     * $intracommunitySupplies
     */
    public function addToIntracommunitySupplies(\MainlyCode\Reeleezee\ValueObject\CustomerType\FiscalIdentificationsAType\IntracommunitySuppliesAType $intracommunitySupplies)
    {
        $this->intracommunitySupplies[] = $intracommunitySupplies;
        return $this;
    }

    /**
     * isset intracommunitySupplies
     *
     * Aangiftenummer intracommunautaire leveringen (ICL)
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetIntracommunitySupplies($index)
    {
        return isset($this->intracommunitySupplies[$index]);
    }

    /**
     * unset intracommunitySupplies
     *
     * Aangiftenummer intracommunautaire leveringen (ICL)
     *
     * @param scalar $index
     * @return void
     */
    public function unsetIntracommunitySupplies($index)
    {
        unset($this->intracommunitySupplies[$index]);
    }

    /**
     * Gets as intracommunitySupplies
     *
     * Aangiftenummer intracommunautaire leveringen (ICL)
     *
     * @return
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\FiscalIdentificationsAType\IntracommunitySuppliesAType[]
     */
    public function getIntracommunitySupplies()
    {
        return $this->intracommunitySupplies;
    }

    /**
     * Sets a new intracommunitySupplies
     *
     * Aangiftenummer intracommunautaire leveringen (ICL)
     *
     * @param
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\FiscalIdentificationsAType\IntracommunitySuppliesAType[]
     * $intracommunitySupplies
     * @return self
     */
    public function setIntracommunitySupplies(array $intracommunitySupplies)
    {
        $this->intracommunitySupplies = $intracommunitySupplies;
        return $this;
    }

    /**
     * Adds as intracommunityPerformance
     *
     * Aangiftenummer intracommunautaire prestaties (ICP)
     *
     * @return self
     * @param
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\FiscalIdentificationsAType\IntracommunityPerformanceAType
     * $intracommunityPerformance
     */
    public function addToIntracommunityPerformance(\MainlyCode\Reeleezee\ValueObject\CustomerType\FiscalIdentificationsAType\IntracommunityPerformanceAType $intracommunityPerformance)
    {
        $this->intracommunityPerformance[] = $intracommunityPerformance;
        return $this;
    }

    /**
     * isset intracommunityPerformance
     *
     * Aangiftenummer intracommunautaire prestaties (ICP)
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetIntracommunityPerformance($index)
    {
        return isset($this->intracommunityPerformance[$index]);
    }

    /**
     * unset intracommunityPerformance
     *
     * Aangiftenummer intracommunautaire prestaties (ICP)
     *
     * @param scalar $index
     * @return void
     */
    public function unsetIntracommunityPerformance($index)
    {
        unset($this->intracommunityPerformance[$index]);
    }

    /**
     * Gets as intracommunityPerformance
     *
     * Aangiftenummer intracommunautaire prestaties (ICP)
     *
     * @return
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\FiscalIdentificationsAType\IntracommunityPerformanceAType[]
     */
    public function getIntracommunityPerformance()
    {
        return $this->intracommunityPerformance;
    }

    /**
     * Sets a new intracommunityPerformance
     *
     * Aangiftenummer intracommunautaire prestaties (ICP)
     *
     * @param
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\FiscalIdentificationsAType\IntracommunityPerformanceAType[]
     * $intracommunityPerformance
     * @return self
     */
    public function setIntracommunityPerformance(array $intracommunityPerformance)
    {
        $this->intracommunityPerformance = $intracommunityPerformance;
        return $this;
    }

    /**
     * Adds as shortCorporateIncomeTax
     *
     * Deponeringsnummer Verkorte winstaangifte vennootschapsbelasting (vWIA VPB)
     *
     * @return self
     * @param
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\FiscalIdentificationsAType\ShortCorporateIncomeTaxAType
     * $shortCorporateIncomeTax
     */
    public function addToShortCorporateIncomeTax(\MainlyCode\Reeleezee\ValueObject\CustomerType\FiscalIdentificationsAType\ShortCorporateIncomeTaxAType $shortCorporateIncomeTax)
    {
        $this->shortCorporateIncomeTax[] = $shortCorporateIncomeTax;
        return $this;
    }

    /**
     * isset shortCorporateIncomeTax
     *
     * Deponeringsnummer Verkorte winstaangifte vennootschapsbelasting (vWIA VPB)
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetShortCorporateIncomeTax($index)
    {
        return isset($this->shortCorporateIncomeTax[$index]);
    }

    /**
     * unset shortCorporateIncomeTax
     *
     * Deponeringsnummer Verkorte winstaangifte vennootschapsbelasting (vWIA VPB)
     *
     * @param scalar $index
     * @return void
     */
    public function unsetShortCorporateIncomeTax($index)
    {
        unset($this->shortCorporateIncomeTax[$index]);
    }

    /**
     * Gets as shortCorporateIncomeTax
     *
     * Deponeringsnummer Verkorte winstaangifte vennootschapsbelasting (vWIA VPB)
     *
     * @return
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\FiscalIdentificationsAType\ShortCorporateIncomeTaxAType[]
     */
    public function getShortCorporateIncomeTax()
    {
        return $this->shortCorporateIncomeTax;
    }

    /**
     * Sets a new shortCorporateIncomeTax
     *
     * Deponeringsnummer Verkorte winstaangifte vennootschapsbelasting (vWIA VPB)
     *
     * @param
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\FiscalIdentificationsAType\ShortCorporateIncomeTaxAType[]
     * $shortCorporateIncomeTax
     * @return self
     */
    public function setShortCorporateIncomeTax(array $shortCorporateIncomeTax)
    {
        $this->shortCorporateIncomeTax = $shortCorporateIncomeTax;
        return $this;
    }

    /**
     * Adds as corporateIncomeTax
     *
     * Deponeringsnummer vennootschapsbelasting (VPB)
     *
     * @return self
     * @param
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\FiscalIdentificationsAType\CorporateIncomeTaxAType
     * $corporateIncomeTax
     */
    public function addToCorporateIncomeTax(\MainlyCode\Reeleezee\ValueObject\CustomerType\FiscalIdentificationsAType\CorporateIncomeTaxAType $corporateIncomeTax)
    {
        $this->corporateIncomeTax[] = $corporateIncomeTax;
        return $this;
    }

    /**
     * isset corporateIncomeTax
     *
     * Deponeringsnummer vennootschapsbelasting (VPB)
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCorporateIncomeTax($index)
    {
        return isset($this->corporateIncomeTax[$index]);
    }

    /**
     * unset corporateIncomeTax
     *
     * Deponeringsnummer vennootschapsbelasting (VPB)
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCorporateIncomeTax($index)
    {
        unset($this->corporateIncomeTax[$index]);
    }

    /**
     * Gets as corporateIncomeTax
     *
     * Deponeringsnummer vennootschapsbelasting (VPB)
     *
     * @return
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\FiscalIdentificationsAType\CorporateIncomeTaxAType[]
     */
    public function getCorporateIncomeTax()
    {
        return $this->corporateIncomeTax;
    }

    /**
     * Sets a new corporateIncomeTax
     *
     * Deponeringsnummer vennootschapsbelasting (VPB)
     *
     * @param
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\FiscalIdentificationsAType\CorporateIncomeTaxAType[]
     * $corporateIncomeTax
     * @return self
     */
    public function setCorporateIncomeTax(array $corporateIncomeTax)
    {
        $this->corporateIncomeTax = $corporateIncomeTax;
        return $this;
    }


}

