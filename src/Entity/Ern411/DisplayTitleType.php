<?php

namespace DedexBundle\Entity\Ern411;

/**
 * Class representing DisplayTitleType
 *
 * A Composite containing details of a Title as the MessageSender suggests it should be shown to the Consumer.
 * XSD Type: DisplayTitle
 */
class DisplayTitleType
{

    /**
     * The Language and script for the Elements of the Title as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
     *
     * @var string $languageAndScriptCode
     */
    private $languageAndScriptCode = null;

    /**
     * A Territory to which the Title applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @var string $applicableTerritoryCode
     */
    private $applicableTerritoryCode = null;

    /**
     * The Flag indicating whether this Composite provides default values (=true). This Flag should not be set if this is not the case. This is represented in an XML schema as an XML Attribute.
     *
     * @var bool $isDefault
     */
    private $isDefault = null;

    /**
     * The text of the Title.
     *
     * @var string $titleText
     */
    private $titleText = null;

    /**
     * A Composite containing details of a SubTitle of the Title, including Titles of Versions used to differentiate different versions of the same Title, as required by the GRid and ISRC ReferenceDescriptiveMetadataSets.
     *
     * @var \DedexBundle\Entity\Ern411\DisplaySubTitleType[] $subTitle
     */
    private $subTitle = [
        
    ];

    /**
     * Gets as languageAndScriptCode
     *
     * The Language and script for the Elements of the Title as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * The Language and script for the Elements of the Title as defined in IETF RfC 5646. The default is the same as indicated for the containing composite. Language and Script are provided as lang[-script][-region][-variant]. This is represented in an XML schema as an XML Attribute.
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
     * Gets as applicableTerritoryCode
     *
     * A Territory to which the Title applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @return string
     */
    public function getApplicableTerritoryCode()
    {
        return $this->applicableTerritoryCode;
    }

    /**
     * Sets a new applicableTerritoryCode
     *
     * A Territory to which the Title applies. The use of ISO TerritoryCodes (or the term 'Worldwide') is strongly encouraged; TIS TerritoryCodes should only be used if both MessageSender and MessageRecipient are familiar with this standard.
     *
     * @param string $applicableTerritoryCode
     * @return self
     */
    public function setApplicableTerritoryCode($applicableTerritoryCode)
    {
        $this->applicableTerritoryCode = $applicableTerritoryCode;
        return $this;
    }

    /**
     * Gets as isDefault
     *
     * The Flag indicating whether this Composite provides default values (=true). This Flag should not be set if this is not the case. This is represented in an XML schema as an XML Attribute.
     *
     * @return bool
     */
    public function getIsDefault()
    {
        return $this->isDefault;
    }

    /**
     * Sets a new isDefault
     *
     * The Flag indicating whether this Composite provides default values (=true). This Flag should not be set if this is not the case. This is represented in an XML schema as an XML Attribute.
     *
     * @param bool $isDefault
     * @return self
     */
    public function setIsDefault($isDefault)
    {
        $this->isDefault = $isDefault;
        return $this;
    }

    /**
     * Gets as titleText
     *
     * The text of the Title.
     *
     * @return string
     */
    public function getTitleText()
    {
        return $this->titleText;
    }

    /**
     * Sets a new titleText
     *
     * The text of the Title.
     *
     * @param string $titleText
     * @return self
     */
    public function setTitleText($titleText)
    {
        $this->titleText = $titleText;
        return $this;
    }

    /**
     * Adds as subTitle
     *
     * A Composite containing details of a SubTitle of the Title, including Titles of Versions used to differentiate different versions of the same Title, as required by the GRid and ISRC ReferenceDescriptiveMetadataSets.
     *
     * @return self
     * @param \DedexBundle\Entity\Ern411\DisplaySubTitleType $subTitle
     */
    public function addToSubTitle(\DedexBundle\Entity\Ern411\DisplaySubTitleType $subTitle)
    {
        $this->subTitle[] = $subTitle;
        return $this;
    }

    /**
     * isset subTitle
     *
     * A Composite containing details of a SubTitle of the Title, including Titles of Versions used to differentiate different versions of the same Title, as required by the GRid and ISRC ReferenceDescriptiveMetadataSets.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubTitle($index)
    {
        return isset($this->subTitle[$index]);
    }

    /**
     * unset subTitle
     *
     * A Composite containing details of a SubTitle of the Title, including Titles of Versions used to differentiate different versions of the same Title, as required by the GRid and ISRC ReferenceDescriptiveMetadataSets.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubTitle($index)
    {
        unset($this->subTitle[$index]);
    }

    /**
     * Gets as subTitle
     *
     * A Composite containing details of a SubTitle of the Title, including Titles of Versions used to differentiate different versions of the same Title, as required by the GRid and ISRC ReferenceDescriptiveMetadataSets.
     *
     * @return \DedexBundle\Entity\Ern411\DisplaySubTitleType[]
     */
    public function getSubTitle()
    {
        return $this->subTitle;
    }

    /**
     * Sets a new subTitle
     *
     * A Composite containing details of a SubTitle of the Title, including Titles of Versions used to differentiate different versions of the same Title, as required by the GRid and ISRC ReferenceDescriptiveMetadataSets.
     *
     * @param \DedexBundle\Entity\Ern411\DisplaySubTitleType[] $subTitle
     * @return self
     */
    public function setSubTitle(array $subTitle)
    {
        $this->subTitle = $subTitle;
        return $this;
    }


}

