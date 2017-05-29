<?php

namespace Dhl\DataTypes;

/**
 * Class representing ConsigneeType
 *
 * 
 * XSD Type: Consignee
 */
class ConsigneeType
{

    /**
     * @property string $companyName
     */
    private $companyName = null;

    /**
     * @property string[] $addressLine
     */
    private $addressLine = array(
        
    );

    /**
     * @property string $city
     */
    private $city = null;

    /**
     * @property string $division
     */
    private $division = null;

    /**
     * @property string $divisionCode
     */
    private $divisionCode = null;

    /**
     * @property string $postalCode
     */
    private $postalCode = null;

    /**
     * @property string $countryCode
     */
    private $countryCode = null;

    /**
     * @property string $countryName
     */
    private $countryName = null;

    /**
     * @property string $federalTaxId
     */
    private $federalTaxId = null;

    /**
     * @property string $stateTaxId
     */
    private $stateTaxId = null;

    /**
     * @property \Dhl\DataTypes\ContactType $contact
     */
    private $contact = null;

    /**
     * Gets as companyName
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Sets a new companyName
     *
     * @param string $companyName
     * @return self
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * Adds as addressLine
     *
     * @return self
     * @param string $addressLine
     */
    public function addToAddressLine($addressLine)
    {
        $this->addressLine[] = $addressLine;
        return $this;
    }

    /**
     * isset addressLine
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAddressLine($index)
    {
        return isset($this->addressLine[$index]);
    }

    /**
     * unset addressLine
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAddressLine($index)
    {
        unset($this->addressLine[$index]);
    }

    /**
     * Gets as addressLine
     *
     * @return string[]
     */
    public function getAddressLine()
    {
        return $this->addressLine;
    }

    /**
     * Sets a new addressLine
     *
     * @param string $addressLine
     * @return self
     */
    public function setAddressLine(array $addressLine)
    {
        $this->addressLine = $addressLine;
        return $this;
    }

    /**
     * Gets as city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Sets a new city
     *
     * @param string $city
     * @return self
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * Gets as division
     *
     * @return string
     */
    public function getDivision()
    {
        return $this->division;
    }

    /**
     * Sets a new division
     *
     * @param string $division
     * @return self
     */
    public function setDivision($division)
    {
        $this->division = $division;
        return $this;
    }

    /**
     * Gets as divisionCode
     *
     * @return string
     */
    public function getDivisionCode()
    {
        return $this->divisionCode;
    }

    /**
     * Sets a new divisionCode
     *
     * @param string $divisionCode
     * @return self
     */
    public function setDivisionCode($divisionCode)
    {
        $this->divisionCode = $divisionCode;
        return $this;
    }

    /**
     * Gets as postalCode
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Sets a new postalCode
     *
     * @param string $postalCode
     * @return self
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    /**
     * Gets as countryCode
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Sets a new countryCode
     *
     * @param string $countryCode
     * @return self
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * Gets as countryName
     *
     * @return string
     */
    public function getCountryName()
    {
        return $this->countryName;
    }

    /**
     * Sets a new countryName
     *
     * @param string $countryName
     * @return self
     */
    public function setCountryName($countryName)
    {
        $this->countryName = $countryName;
        return $this;
    }

    /**
     * Gets as federalTaxId
     *
     * @return string
     */
    public function getFederalTaxId()
    {
        return $this->federalTaxId;
    }

    /**
     * Sets a new federalTaxId
     *
     * @param string $federalTaxId
     * @return self
     */
    public function setFederalTaxId($federalTaxId)
    {
        $this->federalTaxId = $federalTaxId;
        return $this;
    }

    /**
     * Gets as stateTaxId
     *
     * @return string
     */
    public function getStateTaxId()
    {
        return $this->stateTaxId;
    }

    /**
     * Sets a new stateTaxId
     *
     * @param string $stateTaxId
     * @return self
     */
    public function setStateTaxId($stateTaxId)
    {
        $this->stateTaxId = $stateTaxId;
        return $this;
    }

    /**
     * Gets as contact
     *
     * @return \Dhl\DataTypes\ContactType
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * @param \Dhl\DataTypes\ContactType $contact
     * @return self
     */
    public function setContact(\Dhl\DataTypes\ContactType $contact)
    {
        $this->contact = $contact;
        return $this;
    }


}

