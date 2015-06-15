<?php

namespace MainlyCode\Reeleezee\ValueObject\DossierFileType;

/**
 * Class representing WorkflowReferenceAType
 */
class WorkflowReferenceAType
{

    /**
     * Workflow name
     *
     * @property string $name
     */
    private $name = null;

    /**
     * Gets as name
     *
     * Workflow name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Workflow name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }


}

