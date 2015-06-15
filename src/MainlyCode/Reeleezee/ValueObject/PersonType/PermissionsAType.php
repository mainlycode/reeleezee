<?php

namespace MainlyCode\Reeleezee\ValueObject\PersonType;

/**
 * Class representing PermissionsAType
 */
class PermissionsAType
{

    /**
     * Aangifte loonheffing (LH)
     *
     * @property \MainlyCode\Reeleezee\ValueObject\PermissionsCustomerType[]
     * $declarationSalaryTax
     */
    private $declarationSalaryTax = null;

    /**
     * Aangifte omzetbelasting (OB)
     *
     * @property \MainlyCode\Reeleezee\ValueObject\PermissionsCustomerType[]
     * $declarationVatReturn
     */
    private $declarationVatReturn = null;

    /**
     * Opgaaf intracommunautaire leveringen/prestaties (ICL/ICP)
     *
     * @property \MainlyCode\Reeleezee\ValueObject\PermissionsCustomerType[]
     * $declarationIntracommunitySupplies
     */
    private $declarationIntracommunitySupplies = null;

    /**
     * Aangifte inkomstenbelasting (IB)
     *
     * @property \MainlyCode\Reeleezee\ValueObject\PermissionsCustomerType[]
     * $declarationIncomeTax
     */
    private $declarationIncomeTax = null;

    /**
     * Aangifte vennootschapsbelasting (VpB)
     *
     * @property \MainlyCode\Reeleezee\ValueObject\PermissionsCustomerType[]
     * $declarationCorporateIncomeTax
     */
    private $declarationCorporateIncomeTax = null;

    /**
     * Verkorte winstaangifte vennootschapsbelasting (vWIA VPB)
     *
     * @property \MainlyCode\Reeleezee\ValueObject\PermissionsCustomerType[]
     * $declarationShortCorporateIncomeTax
     */
    private $declarationShortCorporateIncomeTax = null;

    /**
     * Kredietrapportage
     *
     * @property \MainlyCode\Reeleezee\ValueObject\PermissionsCustomerType[]
     * $declarationCreditReport
     */
    private $declarationCreditReport = null;

    /**
     * Adds as declarationSalaryTax
     *
     * Aangifte loonheffing (LH)
     *
     * @return self
     * @param \MainlyCode\Reeleezee\ValueObject\PermissionsCustomerType
     * $declarationSalaryTax
     */
    public function addToDeclarationSalaryTax(\MainlyCode\Reeleezee\ValueObject\PermissionsCustomerType $declarationSalaryTax)
    {
        $this->declarationSalaryTax[] = $declarationSalaryTax;
        return $this;
    }

    /**
     * isset declarationSalaryTax
     *
     * Aangifte loonheffing (LH)
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDeclarationSalaryTax($index)
    {
        return isset($this->declarationSalaryTax[$index]);
    }

    /**
     * unset declarationSalaryTax
     *
     * Aangifte loonheffing (LH)
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDeclarationSalaryTax($index)
    {
        unset($this->declarationSalaryTax[$index]);
    }

    /**
     * Gets as declarationSalaryTax
     *
     * Aangifte loonheffing (LH)
     *
     * @return \MainlyCode\Reeleezee\ValueObject\PermissionsCustomerType[]
     */
    public function getDeclarationSalaryTax()
    {
        return $this->declarationSalaryTax;
    }

    /**
     * Sets a new declarationSalaryTax
     *
     * Aangifte loonheffing (LH)
     *
     * @param \MainlyCode\Reeleezee\ValueObject\PermissionsCustomerType[]
     * $declarationSalaryTax
     * @return self
     */
    public function setDeclarationSalaryTax(array $declarationSalaryTax)
    {
        $this->declarationSalaryTax = $declarationSalaryTax;
        return $this;
    }

    /**
     * Adds as declarationVatReturn
     *
     * Aangifte omzetbelasting (OB)
     *
     * @return self
     * @param \MainlyCode\Reeleezee\ValueObject\PermissionsCustomerType
     * $declarationVatReturn
     */
    public function addToDeclarationVatReturn(\MainlyCode\Reeleezee\ValueObject\PermissionsCustomerType $declarationVatReturn)
    {
        $this->declarationVatReturn[] = $declarationVatReturn;
        return $this;
    }

    /**
     * isset declarationVatReturn
     *
     * Aangifte omzetbelasting (OB)
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDeclarationVatReturn($index)
    {
        return isset($this->declarationVatReturn[$index]);
    }

    /**
     * unset declarationVatReturn
     *
     * Aangifte omzetbelasting (OB)
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDeclarationVatReturn($index)
    {
        unset($this->declarationVatReturn[$index]);
    }

    /**
     * Gets as declarationVatReturn
     *
     * Aangifte omzetbelasting (OB)
     *
     * @return \MainlyCode\Reeleezee\ValueObject\PermissionsCustomerType[]
     */
    public function getDeclarationVatReturn()
    {
        return $this->declarationVatReturn;
    }

    /**
     * Sets a new declarationVatReturn
     *
     * Aangifte omzetbelasting (OB)
     *
     * @param \MainlyCode\Reeleezee\ValueObject\PermissionsCustomerType[]
     * $declarationVatReturn
     * @return self
     */
    public function setDeclarationVatReturn(array $declarationVatReturn)
    {
        $this->declarationVatReturn = $declarationVatReturn;
        return $this;
    }

    /**
     * Adds as declarationIntracommunitySupplies
     *
     * Opgaaf intracommunautaire leveringen/prestaties (ICL/ICP)
     *
     * @return self
     * @param \MainlyCode\Reeleezee\ValueObject\PermissionsCustomerType
     * $declarationIntracommunitySupplies
     */
    public function addToDeclarationIntracommunitySupplies(\MainlyCode\Reeleezee\ValueObject\PermissionsCustomerType $declarationIntracommunitySupplies)
    {
        $this->declarationIntracommunitySupplies[] = $declarationIntracommunitySupplies;
        return $this;
    }

    /**
     * isset declarationIntracommunitySupplies
     *
     * Opgaaf intracommunautaire leveringen/prestaties (ICL/ICP)
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDeclarationIntracommunitySupplies($index)
    {
        return isset($this->declarationIntracommunitySupplies[$index]);
    }

    /**
     * unset declarationIntracommunitySupplies
     *
     * Opgaaf intracommunautaire leveringen/prestaties (ICL/ICP)
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDeclarationIntracommunitySupplies($index)
    {
        unset($this->declarationIntracommunitySupplies[$index]);
    }

    /**
     * Gets as declarationIntracommunitySupplies
     *
     * Opgaaf intracommunautaire leveringen/prestaties (ICL/ICP)
     *
     * @return \MainlyCode\Reeleezee\ValueObject\PermissionsCustomerType[]
     */
    public function getDeclarationIntracommunitySupplies()
    {
        return $this->declarationIntracommunitySupplies;
    }

    /**
     * Sets a new declarationIntracommunitySupplies
     *
     * Opgaaf intracommunautaire leveringen/prestaties (ICL/ICP)
     *
     * @param \MainlyCode\Reeleezee\ValueObject\PermissionsCustomerType[]
     * $declarationIntracommunitySupplies
     * @return self
     */
    public function setDeclarationIntracommunitySupplies(array $declarationIntracommunitySupplies)
    {
        $this->declarationIntracommunitySupplies = $declarationIntracommunitySupplies;
        return $this;
    }

    /**
     * Adds as declarationIncomeTax
     *
     * Aangifte inkomstenbelasting (IB)
     *
     * @return self
     * @param \MainlyCode\Reeleezee\ValueObject\PermissionsCustomerType
     * $declarationIncomeTax
     */
    public function addToDeclarationIncomeTax(\MainlyCode\Reeleezee\ValueObject\PermissionsCustomerType $declarationIncomeTax)
    {
        $this->declarationIncomeTax[] = $declarationIncomeTax;
        return $this;
    }

    /**
     * isset declarationIncomeTax
     *
     * Aangifte inkomstenbelasting (IB)
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDeclarationIncomeTax($index)
    {
        return isset($this->declarationIncomeTax[$index]);
    }

    /**
     * unset declarationIncomeTax
     *
     * Aangifte inkomstenbelasting (IB)
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDeclarationIncomeTax($index)
    {
        unset($this->declarationIncomeTax[$index]);
    }

    /**
     * Gets as declarationIncomeTax
     *
     * Aangifte inkomstenbelasting (IB)
     *
     * @return \MainlyCode\Reeleezee\ValueObject\PermissionsCustomerType[]
     */
    public function getDeclarationIncomeTax()
    {
        return $this->declarationIncomeTax;
    }

    /**
     * Sets a new declarationIncomeTax
     *
     * Aangifte inkomstenbelasting (IB)
     *
     * @param \MainlyCode\Reeleezee\ValueObject\PermissionsCustomerType[]
     * $declarationIncomeTax
     * @return self
     */
    public function setDeclarationIncomeTax(array $declarationIncomeTax)
    {
        $this->declarationIncomeTax = $declarationIncomeTax;
        return $this;
    }

    /**
     * Adds as declarationCorporateIncomeTax
     *
     * Aangifte vennootschapsbelasting (VpB)
     *
     * @return self
     * @param \MainlyCode\Reeleezee\ValueObject\PermissionsCustomerType
     * $declarationCorporateIncomeTax
     */
    public function addToDeclarationCorporateIncomeTax(\MainlyCode\Reeleezee\ValueObject\PermissionsCustomerType $declarationCorporateIncomeTax)
    {
        $this->declarationCorporateIncomeTax[] = $declarationCorporateIncomeTax;
        return $this;
    }

    /**
     * isset declarationCorporateIncomeTax
     *
     * Aangifte vennootschapsbelasting (VpB)
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDeclarationCorporateIncomeTax($index)
    {
        return isset($this->declarationCorporateIncomeTax[$index]);
    }

    /**
     * unset declarationCorporateIncomeTax
     *
     * Aangifte vennootschapsbelasting (VpB)
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDeclarationCorporateIncomeTax($index)
    {
        unset($this->declarationCorporateIncomeTax[$index]);
    }

    /**
     * Gets as declarationCorporateIncomeTax
     *
     * Aangifte vennootschapsbelasting (VpB)
     *
     * @return \MainlyCode\Reeleezee\ValueObject\PermissionsCustomerType[]
     */
    public function getDeclarationCorporateIncomeTax()
    {
        return $this->declarationCorporateIncomeTax;
    }

    /**
     * Sets a new declarationCorporateIncomeTax
     *
     * Aangifte vennootschapsbelasting (VpB)
     *
     * @param \MainlyCode\Reeleezee\ValueObject\PermissionsCustomerType[]
     * $declarationCorporateIncomeTax
     * @return self
     */
    public function setDeclarationCorporateIncomeTax(array $declarationCorporateIncomeTax)
    {
        $this->declarationCorporateIncomeTax = $declarationCorporateIncomeTax;
        return $this;
    }

    /**
     * Adds as declarationShortCorporateIncomeTax
     *
     * Verkorte winstaangifte vennootschapsbelasting (vWIA VPB)
     *
     * @return self
     * @param \MainlyCode\Reeleezee\ValueObject\PermissionsCustomerType
     * $declarationShortCorporateIncomeTax
     */
    public function addToDeclarationShortCorporateIncomeTax(\MainlyCode\Reeleezee\ValueObject\PermissionsCustomerType $declarationShortCorporateIncomeTax)
    {
        $this->declarationShortCorporateIncomeTax[] = $declarationShortCorporateIncomeTax;
        return $this;
    }

    /**
     * isset declarationShortCorporateIncomeTax
     *
     * Verkorte winstaangifte vennootschapsbelasting (vWIA VPB)
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDeclarationShortCorporateIncomeTax($index)
    {
        return isset($this->declarationShortCorporateIncomeTax[$index]);
    }

    /**
     * unset declarationShortCorporateIncomeTax
     *
     * Verkorte winstaangifte vennootschapsbelasting (vWIA VPB)
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDeclarationShortCorporateIncomeTax($index)
    {
        unset($this->declarationShortCorporateIncomeTax[$index]);
    }

    /**
     * Gets as declarationShortCorporateIncomeTax
     *
     * Verkorte winstaangifte vennootschapsbelasting (vWIA VPB)
     *
     * @return \MainlyCode\Reeleezee\ValueObject\PermissionsCustomerType[]
     */
    public function getDeclarationShortCorporateIncomeTax()
    {
        return $this->declarationShortCorporateIncomeTax;
    }

    /**
     * Sets a new declarationShortCorporateIncomeTax
     *
     * Verkorte winstaangifte vennootschapsbelasting (vWIA VPB)
     *
     * @param \MainlyCode\Reeleezee\ValueObject\PermissionsCustomerType[]
     * $declarationShortCorporateIncomeTax
     * @return self
     */
    public function setDeclarationShortCorporateIncomeTax(array $declarationShortCorporateIncomeTax)
    {
        $this->declarationShortCorporateIncomeTax = $declarationShortCorporateIncomeTax;
        return $this;
    }

    /**
     * Adds as declarationCreditReport
     *
     * Kredietrapportage
     *
     * @return self
     * @param \MainlyCode\Reeleezee\ValueObject\PermissionsCustomerType
     * $declarationCreditReport
     */
    public function addToDeclarationCreditReport(\MainlyCode\Reeleezee\ValueObject\PermissionsCustomerType $declarationCreditReport)
    {
        $this->declarationCreditReport[] = $declarationCreditReport;
        return $this;
    }

    /**
     * isset declarationCreditReport
     *
     * Kredietrapportage
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDeclarationCreditReport($index)
    {
        return isset($this->declarationCreditReport[$index]);
    }

    /**
     * unset declarationCreditReport
     *
     * Kredietrapportage
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDeclarationCreditReport($index)
    {
        unset($this->declarationCreditReport[$index]);
    }

    /**
     * Gets as declarationCreditReport
     *
     * Kredietrapportage
     *
     * @return \MainlyCode\Reeleezee\ValueObject\PermissionsCustomerType[]
     */
    public function getDeclarationCreditReport()
    {
        return $this->declarationCreditReport;
    }

    /**
     * Sets a new declarationCreditReport
     *
     * Kredietrapportage
     *
     * @param \MainlyCode\Reeleezee\ValueObject\PermissionsCustomerType[]
     * $declarationCreditReport
     * @return self
     */
    public function setDeclarationCreditReport(array $declarationCreditReport)
    {
        $this->declarationCreditReport = $declarationCreditReport;
        return $this;
    }


}

