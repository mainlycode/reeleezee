<?php

namespace MainlyCode\Reeleezee\ValueObject\ProductType;

/**
 * Class representing ProductGroupReferenceListAType
 */
class ProductGroupReferenceListAType
{

    /**
     * Productgroep referentie
     *
     * @property \MainlyCode\Reeleezee\ValueObject\ProductGroupReferenceType[]
     * $productGroupReference
     */
    private $productGroupReference = null;

    /**
     * Adds as productGroupReference
     *
     * Productgroep referentie
     *
     * @return self
     * @param \MainlyCode\Reeleezee\ValueObject\ProductGroupReferenceType
     * $productGroupReference
     */
    public function addToProductGroupReference(\MainlyCode\Reeleezee\ValueObject\ProductGroupReferenceType $productGroupReference)
    {
        $this->productGroupReference[] = $productGroupReference;
        return $this;
    }

    /**
     * isset productGroupReference
     *
     * Productgroep referentie
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProductGroupReference($index)
    {
        return isset($this->productGroupReference[$index]);
    }

    /**
     * unset productGroupReference
     *
     * Productgroep referentie
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProductGroupReference($index)
    {
        unset($this->productGroupReference[$index]);
    }

    /**
     * Gets as productGroupReference
     *
     * Productgroep referentie
     *
     * @return \MainlyCode\Reeleezee\ValueObject\ProductGroupReferenceType[]
     */
    public function getProductGroupReference()
    {
        return $this->productGroupReference;
    }

    /**
     * Sets a new productGroupReference
     *
     * Productgroep referentie
     *
     * @param \MainlyCode\Reeleezee\ValueObject\ProductGroupReferenceType[]
     * $productGroupReference
     * @return self
     */
    public function setProductGroupReference(array $productGroupReference)
    {
        $this->productGroupReference = $productGroupReference;
        return $this;
    }


}

