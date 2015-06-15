<?php

namespace MainlyCode\Reeleezee\ValueObject;

/**
 * Class representing DossierFileType
 *
 *
 * XSD Type: DossierFileType
 */
class DossierFileType
{

    /**
     * Pad
     *
     * @property string $path
     */
    private $path = null;

    /**
     * Document naam
     *
     * @property string $fileName
     */
    private $fileName = null;

    /**
     * Bron bestand
     *
     * @property string $sourceFileLocation
     */
    private $sourceFileLocation = null;

    /**
     * Bron bestand
     *
     * @property
     * \MainlyCode\Reeleezee\ValueObject\DossierFileType\SourceFileContentAType
     * $sourceFileContent
     */
    private $sourceFileContent = null;

    /**
     * Dossier
     *
     * @property \MainlyCode\Reeleezee\ValueObject\DossierFileType\DossierAType
     * $dossier
     */
    private $dossier = null;

    /**
     * Eigenaar
     *
     * @property \MainlyCode\Reeleezee\ValueObject\DossierFileType\OwnerAType $owner
     */
    private $owner = null;

    /**
     * Delen
     *
     * @property string $sharing
     */
    private $sharing = null;

    /**
     * Externe referentie
     *
     * @property string $externalReference
     */
    private $externalReference = null;

    /**
     * Referentie
     *
     * @property string $reference
     */
    private $reference = null;

    /**
     * Datum laatst gewijzigd
     *
     * @property \DateTime $lastModifiedDate
     */
    private $lastModifiedDate = null;

    /**
     * Transactie datum
     *
     * @property \DateTime $transactionDate
     */
    private $transactionDate = null;

    /**
     * Taal
     *
     * @property string $language
     */
    private $language = null;

    /**
     * Boekjaar
     *
     * @property integer $bookYear
     */
    private $bookYear = null;

    /**
     * Boekstuknummer
     *
     * @property string $documentReference
     */
    private $documentReference = null;

    /**
     * Grootboekrekening referentie
     *
     * @property
     * \MainlyCode\Reeleezee\ValueObject\DossierFileType\AccountReferenceAType
     * $accountReference
     */
    private $accountReference = null;

    /**
     * Product referentie
     *
     * @property
     * \MainlyCode\Reeleezee\ValueObject\ManualJournalLineType\ProductReferenceAType
     * $productReference
     */
    private $productReference = null;

    /**
     * Medewerker referentie
     *
     * @property
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\AccountManagerListAType\EmployeeReferenceAType
     * $employeeReference
     */
    private $employeeReference = null;

    /**
     * Afdeling referentie
     *
     * @property
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\DepartmentReferenceAType
     * $departmentReference
     */
    private $departmentReference = null;

    /**
     * Project referentie
     *
     * @property
     * \MainlyCode\Reeleezee\ValueObject\SalesInvoiceLineType\ProjectReferenceAType
     * $projectReference
     */
    private $projectReference = null;

    /**
     * Trefwoorden
     *
     * @property string $tags
     */
    private $tags = null;

    /**
     * Commentaar
     *
     * @property string $comment
     */
    private $comment = null;

    /**
     * Auteurs
     *
     * @property string $authors
     */
    private $authors = null;

    /**
     * @property \MainlyCode\Reeleezee\ValueObject\DossierFileType\SignerListAType
     * $signerList
     */
    private $signerList = null;

    /**
     * Specifies the workflow which should be used for the new document.
     *
     * @property
     * \MainlyCode\Reeleezee\ValueObject\DossierFileType\WorkflowReferenceAType
     * $workflowReference
     */
    private $workflowReference = null;

    /**
     * Gets as path
     *
     * Pad
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Sets a new path
     *
     * Pad
     *
     * @param string $path
     * @return self
     */
    public function setPath($path)
    {
        $this->path = $path;
        return $this;
    }

    /**
     * Gets as fileName
     *
     * Document naam
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * Sets a new fileName
     *
     * Document naam
     *
     * @param string $fileName
     * @return self
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
        return $this;
    }

    /**
     * Gets as sourceFileLocation
     *
     * Bron bestand
     *
     * @return string
     */
    public function getSourceFileLocation()
    {
        return $this->sourceFileLocation;
    }

    /**
     * Sets a new sourceFileLocation
     *
     * Bron bestand
     *
     * @param string $sourceFileLocation
     * @return self
     */
    public function setSourceFileLocation($sourceFileLocation)
    {
        $this->sourceFileLocation = $sourceFileLocation;
        return $this;
    }

    /**
     * Gets as sourceFileContent
     *
     * Bron bestand
     *
     * @return \MainlyCode\Reeleezee\ValueObject\DossierFileType\SourceFileContentAType
     */
    public function getSourceFileContent()
    {
        return $this->sourceFileContent;
    }

    /**
     * Sets a new sourceFileContent
     *
     * Bron bestand
     *
     * @param \MainlyCode\Reeleezee\ValueObject\DossierFileType\SourceFileContentAType
     * $sourceFileContent
     * @return self
     */
    public function setSourceFileContent(\MainlyCode\Reeleezee\ValueObject\DossierFileType\SourceFileContentAType $sourceFileContent)
    {
        $this->sourceFileContent = $sourceFileContent;
        return $this;
    }

    /**
     * Gets as dossier
     *
     * Dossier
     *
     * @return \MainlyCode\Reeleezee\ValueObject\DossierFileType\DossierAType
     */
    public function getDossier()
    {
        return $this->dossier;
    }

    /**
     * Sets a new dossier
     *
     * Dossier
     *
     * @param \MainlyCode\Reeleezee\ValueObject\DossierFileType\DossierAType $dossier
     * @return self
     */
    public function setDossier(\MainlyCode\Reeleezee\ValueObject\DossierFileType\DossierAType $dossier)
    {
        $this->dossier = $dossier;
        return $this;
    }

    /**
     * Gets as owner
     *
     * Eigenaar
     *
     * @return \MainlyCode\Reeleezee\ValueObject\DossierFileType\OwnerAType
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Sets a new owner
     *
     * Eigenaar
     *
     * @param \MainlyCode\Reeleezee\ValueObject\DossierFileType\OwnerAType $owner
     * @return self
     */
    public function setOwner(\MainlyCode\Reeleezee\ValueObject\DossierFileType\OwnerAType $owner)
    {
        $this->owner = $owner;
        return $this;
    }

    /**
     * Gets as sharing
     *
     * Delen
     *
     * @return string
     */
    public function getSharing()
    {
        return $this->sharing;
    }

    /**
     * Sets a new sharing
     *
     * Delen
     *
     * @param string $sharing
     * @return self
     */
    public function setSharing($sharing)
    {
        $this->sharing = $sharing;
        return $this;
    }

    /**
     * Gets as externalReference
     *
     * Externe referentie
     *
     * @return string
     */
    public function getExternalReference()
    {
        return $this->externalReference;
    }

    /**
     * Sets a new externalReference
     *
     * Externe referentie
     *
     * @param string $externalReference
     * @return self
     */
    public function setExternalReference($externalReference)
    {
        $this->externalReference = $externalReference;
        return $this;
    }

    /**
     * Gets as reference
     *
     * Referentie
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
     * Referentie
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
     * Gets as lastModifiedDate
     *
     * Datum laatst gewijzigd
     *
     * @return \DateTime
     */
    public function getLastModifiedDate()
    {
        return $this->lastModifiedDate;
    }

    /**
     * Sets a new lastModifiedDate
     *
     * Datum laatst gewijzigd
     *
     * @param \DateTime $lastModifiedDate
     * @return self
     */
    public function setLastModifiedDate(\DateTime $lastModifiedDate)
    {
        $this->lastModifiedDate = $lastModifiedDate;
        return $this;
    }

    /**
     * Gets as transactionDate
     *
     * Transactie datum
     *
     * @return \DateTime
     */
    public function getTransactionDate()
    {
        return $this->transactionDate;
    }

    /**
     * Sets a new transactionDate
     *
     * Transactie datum
     *
     * @param \DateTime $transactionDate
     * @return self
     */
    public function setTransactionDate(\DateTime $transactionDate)
    {
        $this->transactionDate = $transactionDate;
        return $this;
    }

    /**
     * Gets as language
     *
     * Taal
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * Taal
     *
     * @param string $language
     * @return self
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Gets as bookYear
     *
     * Boekjaar
     *
     * @return integer
     */
    public function getBookYear()
    {
        return $this->bookYear;
    }

    /**
     * Sets a new bookYear
     *
     * Boekjaar
     *
     * @param integer $bookYear
     * @return self
     */
    public function setBookYear($bookYear)
    {
        $this->bookYear = $bookYear;
        return $this;
    }

    /**
     * Gets as documentReference
     *
     * Boekstuknummer
     *
     * @return string
     */
    public function getDocumentReference()
    {
        return $this->documentReference;
    }

    /**
     * Sets a new documentReference
     *
     * Boekstuknummer
     *
     * @param string $documentReference
     * @return self
     */
    public function setDocumentReference($documentReference)
    {
        $this->documentReference = $documentReference;
        return $this;
    }

    /**
     * Gets as accountReference
     *
     * Grootboekrekening referentie
     *
     * @return \MainlyCode\Reeleezee\ValueObject\DossierFileType\AccountReferenceAType
     */
    public function getAccountReference()
    {
        return $this->accountReference;
    }

    /**
     * Sets a new accountReference
     *
     * Grootboekrekening referentie
     *
     * @param \MainlyCode\Reeleezee\ValueObject\DossierFileType\AccountReferenceAType
     * $accountReference
     * @return self
     */
    public function setAccountReference(\MainlyCode\Reeleezee\ValueObject\DossierFileType\AccountReferenceAType $accountReference)
    {
        $this->accountReference = $accountReference;
        return $this;
    }

    /**
     * Gets as productReference
     *
     * Product referentie
     *
     * @return
     * \MainlyCode\Reeleezee\ValueObject\ManualJournalLineType\ProductReferenceAType
     */
    public function getProductReference()
    {
        return $this->productReference;
    }

    /**
     * Sets a new productReference
     *
     * Product referentie
     *
     * @param
     * \MainlyCode\Reeleezee\ValueObject\ManualJournalLineType\ProductReferenceAType
     * $productReference
     * @return self
     */
    public function setProductReference(\MainlyCode\Reeleezee\ValueObject\ManualJournalLineType\ProductReferenceAType $productReference)
    {
        $this->productReference = $productReference;
        return $this;
    }

    /**
     * Gets as employeeReference
     *
     * Medewerker referentie
     *
     * @return
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\AccountManagerListAType\EmployeeReferenceAType
     */
    public function getEmployeeReference()
    {
        return $this->employeeReference;
    }

    /**
     * Sets a new employeeReference
     *
     * Medewerker referentie
     *
     * @param
     * \MainlyCode\Reeleezee\ValueObject\CustomerType\AccountManagerListAType\EmployeeReferenceAType
     * $employeeReference
     * @return self
     */
    public function setEmployeeReference(\MainlyCode\Reeleezee\ValueObject\CustomerType\AccountManagerListAType\EmployeeReferenceAType $employeeReference)
    {
        $this->employeeReference = $employeeReference;
        return $this;
    }

    /**
     * Gets as departmentReference
     *
     * Afdeling referentie
     *
     * @return \MainlyCode\Reeleezee\ValueObject\CustomerType\DepartmentReferenceAType
     */
    public function getDepartmentReference()
    {
        return $this->departmentReference;
    }

    /**
     * Sets a new departmentReference
     *
     * Afdeling referentie
     *
     * @param \MainlyCode\Reeleezee\ValueObject\CustomerType\DepartmentReferenceAType
     * $departmentReference
     * @return self
     */
    public function setDepartmentReference(\MainlyCode\Reeleezee\ValueObject\CustomerType\DepartmentReferenceAType $departmentReference)
    {
        $this->departmentReference = $departmentReference;
        return $this;
    }

    /**
     * Gets as projectReference
     *
     * Project referentie
     *
     * @return
     * \MainlyCode\Reeleezee\ValueObject\SalesInvoiceLineType\ProjectReferenceAType
     */
    public function getProjectReference()
    {
        return $this->projectReference;
    }

    /**
     * Sets a new projectReference
     *
     * Project referentie
     *
     * @param
     * \MainlyCode\Reeleezee\ValueObject\SalesInvoiceLineType\ProjectReferenceAType
     * $projectReference
     * @return self
     */
    public function setProjectReference(\MainlyCode\Reeleezee\ValueObject\SalesInvoiceLineType\ProjectReferenceAType $projectReference)
    {
        $this->projectReference = $projectReference;
        return $this;
    }

    /**
     * Gets as tags
     *
     * Trefwoorden
     *
     * @return string
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Sets a new tags
     *
     * Trefwoorden
     *
     * @param string $tags
     * @return self
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
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

    /**
     * Gets as authors
     *
     * Auteurs
     *
     * @return string
     */
    public function getAuthors()
    {
        return $this->authors;
    }

    /**
     * Sets a new authors
     *
     * Auteurs
     *
     * @param string $authors
     * @return self
     */
    public function setAuthors($authors)
    {
        $this->authors = $authors;
        return $this;
    }

    /**
     * Gets as signerList
     *
     * @return \MainlyCode\Reeleezee\ValueObject\DossierFileType\SignerListAType
     */
    public function getSignerList()
    {
        return $this->signerList;
    }

    /**
     * Sets a new signerList
     *
     * @param \MainlyCode\Reeleezee\ValueObject\DossierFileType\SignerListAType
     * $signerList
     * @return self
     */
    public function setSignerList(\MainlyCode\Reeleezee\ValueObject\DossierFileType\SignerListAType $signerList)
    {
        $this->signerList = $signerList;
        return $this;
    }

    /**
     * Gets as workflowReference
     *
     * Specifies the workflow which should be used for the new document.
     *
     * @return \MainlyCode\Reeleezee\ValueObject\DossierFileType\WorkflowReferenceAType
     */
    public function getWorkflowReference()
    {
        return $this->workflowReference;
    }

    /**
     * Sets a new workflowReference
     *
     * Specifies the workflow which should be used for the new document.
     *
     * @param \MainlyCode\Reeleezee\ValueObject\DossierFileType\WorkflowReferenceAType
     * $workflowReference
     * @return self
     */
    public function setWorkflowReference(\MainlyCode\Reeleezee\ValueObject\DossierFileType\WorkflowReferenceAType $workflowReference)
    {
        $this->workflowReference = $workflowReference;
        return $this;
    }


}

