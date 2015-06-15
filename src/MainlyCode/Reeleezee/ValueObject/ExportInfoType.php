<?php

namespace MainlyCode\Reeleezee\ValueObject;

/**
 * Class representing ExportInfoType
 *
 *
 * XSD Type: ExportInfoType
 */
class ExportInfoType
{

    /**
     * Naam
     *
     * @property string $name
     */
    private $name = null;

    /**
     * Bron
     *
     * @property string $source
     */
    private $source = null;

    /**
     * Bestemming
     *
     * @property string $destination
     */
    private $destination = null;

    /**
     * Kenmerk
     *
     * @property string $reference
     */
    private $reference = null;

    /**
     * Datum/tijd aanmaken
     *
     * @property \DateTime $createDateTime
     */
    private $createDateTime = null;

    /**
     * Datum/tijd vanaf
     *
     * @property \DateTime $fromDateTime
     */
    private $fromDateTime = null;

    /**
     * Datum/tijd tot
     *
     * @property \DateTime $toDateTime
     */
    private $toDateTime = null;

    /**
     * Commentaar
     *
     * @property string $comment
     */
    private $comment = null;

    /**
     * Gets as name
     *
     * Naam
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
     * Naam
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as source
     *
     * Bron
     *
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Sets a new source
     *
     * Bron
     *
     * @param string $source
     * @return self
     */
    public function setSource($source)
    {
        $this->source = $source;
        return $this;
    }

    /**
     * Gets as destination
     *
     * Bestemming
     *
     * @return string
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Sets a new destination
     *
     * Bestemming
     *
     * @param string $destination
     * @return self
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;
        return $this;
    }

    /**
     * Gets as reference
     *
     * Kenmerk
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Sets a new reference
     *
     * Kenmerk
     *
     * @param string $reference
     * @return self
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * Gets as createDateTime
     *
     * Datum/tijd aanmaken
     *
     * @return \DateTime
     */
    public function getCreateDateTime()
    {
        return $this->createDateTime;
    }

    /**
     * Sets a new createDateTime
     *
     * Datum/tijd aanmaken
     *
     * @param \DateTime $createDateTime
     * @return self
     */
    public function setCreateDateTime(\DateTime $createDateTime)
    {
        $this->createDateTime = $createDateTime;
        return $this;
    }

    /**
     * Gets as fromDateTime
     *
     * Datum/tijd vanaf
     *
     * @return \DateTime
     */
    public function getFromDateTime()
    {
        return $this->fromDateTime;
    }

    /**
     * Sets a new fromDateTime
     *
     * Datum/tijd vanaf
     *
     * @param \DateTime $fromDateTime
     * @return self
     */
    public function setFromDateTime(\DateTime $fromDateTime)
    {
        $this->fromDateTime = $fromDateTime;
        return $this;
    }

    /**
     * Gets as toDateTime
     *
     * Datum/tijd tot
     *
     * @return \DateTime
     */
    public function getToDateTime()
    {
        return $this->toDateTime;
    }

    /**
     * Sets a new toDateTime
     *
     * Datum/tijd tot
     *
     * @param \DateTime $toDateTime
     * @return self
     */
    public function setToDateTime(\DateTime $toDateTime)
    {
        $this->toDateTime = $toDateTime;
        return $this;
    }

    /**
     * Gets as comment
     *
     * Commentaar
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * Commentaar
     *
     * @param string $comment
     * @return self
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
        return $this;
    }


}

