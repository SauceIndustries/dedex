<?php

namespace DedexBundle\Entity\Ern341;

/**
 * Class representing ImageDetailsByTerritoryType
 *
 * A ddex:Composite containing details of ddex:Descriptors, Dates and other attributes of an ddex:Image which may vary according to ddex:Territory of release.
 * XSD Type: ImageDetailsByTerritory
 */
class ImageDetailsByTerritoryType
{
    /**
     * The ddex:Language and script for the ddex:Elements of the ddexC:ImageDetailsByTerritory as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A ddex:Territory to which the ddex:Image details apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory shall be present, but not both.
     *
     * @var string[] $territoryCode
     */
    private $territoryCode = [
        
    ];

    /**
     * A ddex:Territory to which the ddex:Image details do not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be present, but not both.
     *
     * @var string[] $excludedTerritoryCode
     */
    private $excludedTerritoryCode = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:Contributor to the ddex:Image.
     *
     * @var \DedexBundle\Entity\DdexC\ResourceContributorType[] $resourceContributor
     */
    private $resourceContributor = [
        
    ];

    /**
     * A ddex:Composite containing details of an indirect ddex:Contributor to the ddex:Image.
     *
     * @var \DedexBundle\Entity\DdexC\IndirectResourceContributorType[] $indirectResourceContributor
     */
    private $indirectResourceContributor = [
        
    ];

    /**
     * A ddex:Composite containing details of the ddex:CLine for the ddex:Image.
     *
     * @var \DedexBundle\Entity\DdexC\CLineType[] $cLine
     */
    private $cLine = [
        
    ];

    /**
     * A ddex:Composite containing a ddex:Description of the subject of the ddex:Image.
     *
     * @var \DedexBundle\Entity\DdexC\DescriptionType $description
     */
    private $description = null;

    /**
     * A ddex:Composite containing an ddex:Annotation which acknowledges record companies and/or other Parties giving permission for ddex:Artists or others featured on the ddex:Image.
     *
     * @var \DedexBundle\Entity\DdexC\CourtesyLineType $courtesyLine
     */
    private $courtesyLine = null;

    /**
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the ddex:Image was originally published, whether for physical or electronic/online distribution.
     *
     * @var \DedexBundle\Entity\DdexC\EventDateType $originalResourceReleaseDate
     */
    private $originalResourceReleaseDate = null;

    /**
     * A ddex:Composite containing details of a ddex:FulfillmentDate.
     *
     * @var \DedexBundle\Entity\DdexC\FulfillmentDateType $fulfillmentDate
     */
    private $fulfillmentDate = null;

    /**
     * A ddex:Composite containing details of a ddex:Description of the ddex:Image containing ddex:Keywords.
     *
     * @var \DedexBundle\Entity\DdexC\KeywordsType[] $keywords
     */
    private $keywords = [
        
    ];

    /**
     * A ddex:Composite containing details of a ddex:Synopsis of the ddex:Image.
     *
     * @var \DedexBundle\Entity\DdexC\SynopsisType $synopsis
     */
    private $synopsis = null;

    /**
     * A ddex:Composite containing details of a ddex:Genre to which the ddex:Image belongs.
     *
     * @var \DedexBundle\Entity\DdexC\GenreType[] $genre
     */
    private $genre = [
        
    ];

    /**
     * A ddex:Composite containing details of the classification of the ddex:Image according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @var \DedexBundle\Entity\DdexC\ParentalWarningTypeType[] $parentalWarningType
     */
    private $parentalWarningType = [
        
    ];

    /**
     * A ddex:Composite containing technical details of the ddex:Image.
     *
     * @var \DedexBundle\Entity\Ern341\TechnicalImageDetailsType[] $technicalImageDetails
     */
    private $technicalImageDetails = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The ddex:Language and script for the ddex:Elements of the ddexC:ImageDetailsByTerritory as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @return string
     */
    public function getLanguageAndScriptCode()
    {
        return $this->languageAndScriptCode;
    }

    /**
     * Sets a new languageAndScriptCode
     *
     * The ddex:Language and script for the ddex:Elements of the ddexC:ImageDetailsByTerritory as defined in IETF RfC 4646. The default is the same as indicated for the containing composite. ddex:Language and Script are provided as lang[-scipt][-region][-variant]. This is represented in an XML schema as an XML ddex:Attribute.
     *
     * @param string $languageAndScriptCode
     * @return self
     */
    public function setLanguageAndScriptCode($languageAndScriptCode)
    {
        $this->languageAndScriptCode = $languageAndScriptCode;
        return $this;
    }

    /**
     * Adds as territoryCode
     *
     * A ddex:Territory to which the ddex:Image details apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory shall be present, but not both.
     *
     * @return self
     * @param string $territoryCode
     */
    public function addToTerritoryCode($territoryCode)
    {
        $this->territoryCode[] = $territoryCode;
        return $this;
    }

    /**
     * isset territoryCode
     *
     * A ddex:Territory to which the ddex:Image details apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory shall be present, but not both.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTerritoryCode($index)
    {
        return isset($this->territoryCode[$index]);
    }

    /**
     * unset territoryCode
     *
     * A ddex:Territory to which the ddex:Image details apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory shall be present, but not both.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTerritoryCode($index)
    {
        unset($this->territoryCode[$index]);
    }

    /**
     * Gets as territoryCode
     *
     * A ddex:Territory to which the ddex:Image details apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory shall be present, but not both.
     *
     * @return string[]
     */
    public function getTerritoryCode()
    {
        return $this->territoryCode;
    }

    /**
     * Sets a new territoryCode
     *
     * A ddex:Territory to which the ddex:Image details apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:ExcludedTerritory shall be present, but not both.
     *
     * @param string $territoryCode
     * @return self
     */
    public function setTerritoryCode(array $territoryCode = null)
    {
        $this->territoryCode = $territoryCode;
        return $this;
    }

    /**
     * Adds as excludedTerritoryCode
     *
     * A ddex:Territory to which the ddex:Image details do not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be present, but not both.
     *
     * @return self
     * @param string $excludedTerritoryCode
     */
    public function addToExcludedTerritoryCode($excludedTerritoryCode)
    {
        $this->excludedTerritoryCode[] = $excludedTerritoryCode;
        return $this;
    }

    /**
     * isset excludedTerritoryCode
     *
     * A ddex:Territory to which the ddex:Image details do not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be present, but not both.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExcludedTerritoryCode($index)
    {
        return isset($this->excludedTerritoryCode[$index]);
    }

    /**
     * unset excludedTerritoryCode
     *
     * A ddex:Territory to which the ddex:Image details do not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be present, but not both.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExcludedTerritoryCode($index)
    {
        unset($this->excludedTerritoryCode[$index]);
    }

    /**
     * Gets as excludedTerritoryCode
     *
     * A ddex:Territory to which the ddex:Image details do not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be present, but not both.
     *
     * @return string[]
     */
    public function getExcludedTerritoryCode()
    {
        return $this->excludedTerritoryCode;
    }

    /**
     * Sets a new excludedTerritoryCode
     *
     * A ddex:Territory to which the ddex:Image details do not apply (represented by an ISO 3166-1 iso3166a2:TerritoryCode). Either this ddex:Element or ddex:Territory shall be present, but not both.
     *
     * @param string $excludedTerritoryCode
     * @return self
     */
    public function setExcludedTerritoryCode(array $excludedTerritoryCode = null)
    {
        $this->excludedTerritoryCode = $excludedTerritoryCode;
        return $this;
    }

    /**
     * Adds as resourceContributor
     *
     * A ddex:Composite containing details of a ddex:Contributor to the ddex:Image.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\ResourceContributorType $resourceContributor
     */
    public function addToResourceContributor(\DedexBundle\Entity\DdexC\ResourceContributorType $resourceContributor)
    {
        $this->resourceContributor[] = $resourceContributor;
        return $this;
    }

    /**
     * isset resourceContributor
     *
     * A ddex:Composite containing details of a ddex:Contributor to the ddex:Image.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResourceContributor($index)
    {
        return isset($this->resourceContributor[$index]);
    }

    /**
     * unset resourceContributor
     *
     * A ddex:Composite containing details of a ddex:Contributor to the ddex:Image.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResourceContributor($index)
    {
        unset($this->resourceContributor[$index]);
    }

    /**
     * Gets as resourceContributor
     *
     * A ddex:Composite containing details of a ddex:Contributor to the ddex:Image.
     *
     * @return \DedexBundle\Entity\DdexC\ResourceContributorType[]
     */
    public function getResourceContributor()
    {
        return $this->resourceContributor;
    }

    /**
     * Sets a new resourceContributor
     *
     * A ddex:Composite containing details of a ddex:Contributor to the ddex:Image.
     *
     * @param \DedexBundle\Entity\DdexC\ResourceContributorType[] $resourceContributor
     * @return self
     */
    public function setResourceContributor(array $resourceContributor = null)
    {
        $this->resourceContributor = $resourceContributor;
        return $this;
    }

    /**
     * Adds as indirectResourceContributor
     *
     * A ddex:Composite containing details of an indirect ddex:Contributor to the ddex:Image.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\IndirectResourceContributorType $indirectResourceContributor
     */
    public function addToIndirectResourceContributor(\DedexBundle\Entity\DdexC\IndirectResourceContributorType $indirectResourceContributor)
    {
        $this->indirectResourceContributor[] = $indirectResourceContributor;
        return $this;
    }

    /**
     * isset indirectResourceContributor
     *
     * A ddex:Composite containing details of an indirect ddex:Contributor to the ddex:Image.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIndirectResourceContributor($index)
    {
        return isset($this->indirectResourceContributor[$index]);
    }

    /**
     * unset indirectResourceContributor
     *
     * A ddex:Composite containing details of an indirect ddex:Contributor to the ddex:Image.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIndirectResourceContributor($index)
    {
        unset($this->indirectResourceContributor[$index]);
    }

    /**
     * Gets as indirectResourceContributor
     *
     * A ddex:Composite containing details of an indirect ddex:Contributor to the ddex:Image.
     *
     * @return \DedexBundle\Entity\DdexC\IndirectResourceContributorType[]
     */
    public function getIndirectResourceContributor()
    {
        return $this->indirectResourceContributor;
    }

    /**
     * Sets a new indirectResourceContributor
     *
     * A ddex:Composite containing details of an indirect ddex:Contributor to the ddex:Image.
     *
     * @param \DedexBundle\Entity\DdexC\IndirectResourceContributorType[] $indirectResourceContributor
     * @return self
     */
    public function setIndirectResourceContributor(array $indirectResourceContributor = null)
    {
        $this->indirectResourceContributor = $indirectResourceContributor;
        return $this;
    }

    /**
     * Adds as cLine
     *
     * A ddex:Composite containing details of the ddex:CLine for the ddex:Image.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\CLineType $cLine
     */
    public function addToCLine(\DedexBundle\Entity\DdexC\CLineType $cLine)
    {
        $this->cLine[] = $cLine;
        return $this;
    }

    /**
     * isset cLine
     *
     * A ddex:Composite containing details of the ddex:CLine for the ddex:Image.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCLine($index)
    {
        return isset($this->cLine[$index]);
    }

    /**
     * unset cLine
     *
     * A ddex:Composite containing details of the ddex:CLine for the ddex:Image.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCLine($index)
    {
        unset($this->cLine[$index]);
    }

    /**
     * Gets as cLine
     *
     * A ddex:Composite containing details of the ddex:CLine for the ddex:Image.
     *
     * @return \DedexBundle\Entity\DdexC\CLineType[]
     */
    public function getCLine()
    {
        return $this->cLine;
    }

    /**
     * Sets a new cLine
     *
     * A ddex:Composite containing details of the ddex:CLine for the ddex:Image.
     *
     * @param \DedexBundle\Entity\DdexC\CLineType[] $cLine
     * @return self
     */
    public function setCLine(array $cLine = null)
    {
        $this->cLine = $cLine;
        return $this;
    }

    /**
     * Gets as description
     *
     * A ddex:Composite containing a ddex:Description of the subject of the ddex:Image.
     *
     * @return \DedexBundle\Entity\DdexC\DescriptionType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A ddex:Composite containing a ddex:Description of the subject of the ddex:Image.
     *
     * @param \DedexBundle\Entity\DdexC\DescriptionType $description
     * @return self
     */
    public function setDescription(?\DedexBundle\Entity\DdexC\DescriptionType $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as courtesyLine
     *
     * A ddex:Composite containing an ddex:Annotation which acknowledges record companies and/or other Parties giving permission for ddex:Artists or others featured on the ddex:Image.
     *
     * @return \DedexBundle\Entity\DdexC\CourtesyLineType
     */
    public function getCourtesyLine()
    {
        return $this->courtesyLine;
    }

    /**
     * Sets a new courtesyLine
     *
     * A ddex:Composite containing an ddex:Annotation which acknowledges record companies and/or other Parties giving permission for ddex:Artists or others featured on the ddex:Image.
     *
     * @param \DedexBundle\Entity\DdexC\CourtesyLineType $courtesyLine
     * @return self
     */
    public function setCourtesyLine(?\DedexBundle\Entity\DdexC\CourtesyLineType $courtesyLine = null)
    {
        $this->courtesyLine = $courtesyLine;
        return $this;
    }

    /**
     * Gets as originalResourceReleaseDate
     *
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the ddex:Image was originally published, whether for physical or electronic/online distribution.
     *
     * @return \DedexBundle\Entity\DdexC\EventDateType
     */
    public function getOriginalResourceReleaseDate()
    {
        return $this->originalResourceReleaseDate;
    }

    /**
     * Sets a new originalResourceReleaseDate
     *
     * A ddex:Composite containing details of the Date and ddex:Place of the ddex:Event in which the ddex:Image was originally published, whether for physical or electronic/online distribution.
     *
     * @param \DedexBundle\Entity\DdexC\EventDateType $originalResourceReleaseDate
     * @return self
     */
    public function setOriginalResourceReleaseDate(?\DedexBundle\Entity\DdexC\EventDateType $originalResourceReleaseDate = null)
    {
        $this->originalResourceReleaseDate = $originalResourceReleaseDate;
        return $this;
    }

    /**
     * Gets as fulfillmentDate
     *
     * A ddex:Composite containing details of a ddex:FulfillmentDate.
     *
     * @return \DedexBundle\Entity\DdexC\FulfillmentDateType
     */
    public function getFulfillmentDate()
    {
        return $this->fulfillmentDate;
    }

    /**
     * Sets a new fulfillmentDate
     *
     * A ddex:Composite containing details of a ddex:FulfillmentDate.
     *
     * @param \DedexBundle\Entity\DdexC\FulfillmentDateType $fulfillmentDate
     * @return self
     */
    public function setFulfillmentDate(?\DedexBundle\Entity\DdexC\FulfillmentDateType $fulfillmentDate = null)
    {
        $this->fulfillmentDate = $fulfillmentDate;
        return $this;
    }

    /**
     * Adds as keywords
     *
     * A ddex:Composite containing details of a ddex:Description of the ddex:Image containing ddex:Keywords.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\KeywordsType $keywords
     */
    public function addToKeywords(\DedexBundle\Entity\DdexC\KeywordsType $keywords)
    {
        $this->keywords[] = $keywords;
        return $this;
    }

    /**
     * isset keywords
     *
     * A ddex:Composite containing details of a ddex:Description of the ddex:Image containing ddex:Keywords.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetKeywords($index)
    {
        return isset($this->keywords[$index]);
    }

    /**
     * unset keywords
     *
     * A ddex:Composite containing details of a ddex:Description of the ddex:Image containing ddex:Keywords.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetKeywords($index)
    {
        unset($this->keywords[$index]);
    }

    /**
     * Gets as keywords
     *
     * A ddex:Composite containing details of a ddex:Description of the ddex:Image containing ddex:Keywords.
     *
     * @return \DedexBundle\Entity\DdexC\KeywordsType[]
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Sets a new keywords
     *
     * A ddex:Composite containing details of a ddex:Description of the ddex:Image containing ddex:Keywords.
     *
     * @param \DedexBundle\Entity\DdexC\KeywordsType[] $keywords
     * @return self
     */
    public function setKeywords(array $keywords = null)
    {
        $this->keywords = $keywords;
        return $this;
    }

    /**
     * Gets as synopsis
     *
     * A ddex:Composite containing details of a ddex:Synopsis of the ddex:Image.
     *
     * @return \DedexBundle\Entity\DdexC\SynopsisType
     */
    public function getSynopsis()
    {
        return $this->synopsis;
    }

    /**
     * Sets a new synopsis
     *
     * A ddex:Composite containing details of a ddex:Synopsis of the ddex:Image.
     *
     * @param \DedexBundle\Entity\DdexC\SynopsisType $synopsis
     * @return self
     */
    public function setSynopsis(?\DedexBundle\Entity\DdexC\SynopsisType $synopsis = null)
    {
        $this->synopsis = $synopsis;
        return $this;
    }

    /**
     * Adds as genre
     *
     * A ddex:Composite containing details of a ddex:Genre to which the ddex:Image belongs.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\GenreType $genre
     */
    public function addToGenre(\DedexBundle\Entity\DdexC\GenreType $genre)
    {
        $this->genre[] = $genre;
        return $this;
    }

    /**
     * isset genre
     *
     * A ddex:Composite containing details of a ddex:Genre to which the ddex:Image belongs.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGenre($index)
    {
        return isset($this->genre[$index]);
    }

    /**
     * unset genre
     *
     * A ddex:Composite containing details of a ddex:Genre to which the ddex:Image belongs.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGenre($index)
    {
        unset($this->genre[$index]);
    }

    /**
     * Gets as genre
     *
     * A ddex:Composite containing details of a ddex:Genre to which the ddex:Image belongs.
     *
     * @return \DedexBundle\Entity\DdexC\GenreType[]
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Sets a new genre
     *
     * A ddex:Composite containing details of a ddex:Genre to which the ddex:Image belongs.
     *
     * @param \DedexBundle\Entity\DdexC\GenreType[] $genre
     * @return self
     */
    public function setGenre(array $genre = null)
    {
        $this->genre = $genre;
        return $this;
    }

    /**
     * Adds as parentalWarningType
     *
     * A ddex:Composite containing details of the classification of the ddex:Image according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @return self
     * @param \DedexBundle\Entity\DdexC\ParentalWarningTypeType $parentalWarningType
     */
    public function addToParentalWarningType(\DedexBundle\Entity\DdexC\ParentalWarningTypeType $parentalWarningType)
    {
        $this->parentalWarningType[] = $parentalWarningType;
        return $this;
    }

    /**
     * isset parentalWarningType
     *
     * A ddex:Composite containing details of the classification of the ddex:Image according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetParentalWarningType($index)
    {
        return isset($this->parentalWarningType[$index]);
    }

    /**
     * unset parentalWarningType
     *
     * A ddex:Composite containing details of the classification of the ddex:Image according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetParentalWarningType($index)
    {
        unset($this->parentalWarningType[$index]);
    }

    /**
     * Gets as parentalWarningType
     *
     * A ddex:Composite containing details of the classification of the ddex:Image according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @return \DedexBundle\Entity\DdexC\ParentalWarningTypeType[]
     */
    public function getParentalWarningType()
    {
        return $this->parentalWarningType;
    }

    /**
     * Sets a new parentalWarningType
     *
     * A ddex:Composite containing details of the classification of the ddex:Image according to advice which it carries about the level of explicitness or offensiveness of its content.
     *
     * @param \DedexBundle\Entity\DdexC\ParentalWarningTypeType[] $parentalWarningType
     * @return self
     */
    public function setParentalWarningType(array $parentalWarningType = null)
    {
        $this->parentalWarningType = $parentalWarningType;
        return $this;
    }

    /**
     * Adds as technicalImageDetails
     *
     * A ddex:Composite containing technical details of the ddex:Image.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern341\TechnicalImageDetailsType $technicalImageDetails
     */
    public function addToTechnicalImageDetails(\DedexBundle\Entity\Ern341\TechnicalImageDetailsType $technicalImageDetails)
    {
        $this->technicalImageDetails[] = $technicalImageDetails;
        return $this;
    }

    /**
     * isset technicalImageDetails
     *
     * A ddex:Composite containing technical details of the ddex:Image.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTechnicalImageDetails($index)
    {
        return isset($this->technicalImageDetails[$index]);
    }

    /**
     * unset technicalImageDetails
     *
     * A ddex:Composite containing technical details of the ddex:Image.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTechnicalImageDetails($index)
    {
        unset($this->technicalImageDetails[$index]);
    }

    /**
     * Gets as technicalImageDetails
     *
     * A ddex:Composite containing technical details of the ddex:Image.
     *
     * @return \DedexBundle\Entity\Ern341\TechnicalImageDetailsType[]
     */
    public function getTechnicalImageDetails()
    {
        return $this->technicalImageDetails;
    }

    /**
     * Sets a new technicalImageDetails
     *
     * A ddex:Composite containing technical details of the ddex:Image.
     *
     * @param \DedexBundle\Entity\Ern341\TechnicalImageDetailsType[] $technicalImageDetails
     * @return self
     */
    public function setTechnicalImageDetails(array $technicalImageDetails = null)
    {
        $this->technicalImageDetails = $technicalImageDetails;
        return $this;
    }
}

