<?php

namespace MainlyCode\Reeleezee\ValueObject;

/**
 * Class representing ProjectReferenceType
 *
 *
 * XSD Type: ProjectReferenceType
 */
class ProjectReferenceType
{

    /**
     * Projectnaam
     *
     * @property string $name
     */
    private $name = null;

    /**
     * Gets as name
     *
     * Projectnaam
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
     * Projectnaam
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

