<?php

namespace MainlyCode\Reeleezee\ValueObject;

/**
 * Class representing CategoryListType
 *
 *
 * XSD Type: CategoryListType
 */
class CategoryListType
{

    /**
     * Categorie
     *
     * @property
     * \MainlyCode\Reeleezee\ValueObject\CategoryListType\CategoryReferenceAType
     * $categoryReference
     */
    private $categoryReference = null;

    /**
     * Gets as categoryReference
     *
     * Categorie
     *
     * @return
     * \MainlyCode\Reeleezee\ValueObject\CategoryListType\CategoryReferenceAType
     */
    public function getCategoryReference()
    {
        return $this->categoryReference;
    }

    /**
     * Sets a new categoryReference
     *
     * Categorie
     *
     * @param \MainlyCode\Reeleezee\ValueObject\CategoryListType\CategoryReferenceAType
     * $categoryReference
     * @return self
     */
    public function setCategoryReference(\MainlyCode\Reeleezee\ValueObject\CategoryListType\CategoryReferenceAType $categoryReference)
    {
        $this->categoryReference = $categoryReference;
        return $this;
    }


}

