<?php

namespace DividoFinancialServices\PCAPredict;

/**
 * Class RetrieveResult
 *
 * @author Neil McGibbon <neil.mcgibbon@divido.com>
 * @copyright (c) 2017, Divido
 * @package DividoFinancialServices\PCAPredict
 */
class RetrieveResult
{

    /**
     *
     * @var string
     */
    private $id;

    /**
     *
     * @var string
     */
    private $domesticId;

    /**
     *
     * @var string
     */
    private $language;

    /**
     *
     * @var string
     */
    private $languageAlternatives;

    /**
     *
     * @var string
     */
    private $department;

    /**
     *
     * @var string
     */
    private $company;

    /**
     *
     * @var string
     */
    private $subBuilding;

    /**
     *
     * @var string
     */
    private $buildingNumber;

    /**
     *
     * @var string
     */
    private $buildingName;

    /**
     *
     * @var string
     */
    private $secondaryStreet;

    /**
     *
     * @var string
     */
    private $street;

    /**
     *
     * @var string
     */
    private $block;

    /**
     *
     * @var string
     */
    private $neighbourhood;

    /**
     *
     * @var string
     */
    private $district;

    /**
     *
     * @var string
     */
    private $city;

    /**
     *
     * @var string
     */
    private $line1;

    /**
     *
     * @var string
     */
    private $line2;

    /**
     *
     * @var string
     */
    private $line3;

    /**
     *
     * @var string
     */
    private $line4;

    /**
     *
     * @var string
     */
    private $line5;

    /**
     *
     * @var string
     */
    private $adminAreaName;

    /**
     *
     * @var string
     */
    private $adminAreaCode;

    /**
     *
     * @var string
     */
    private $province;

    /**
     *
     * @var string
     */
    private $provinceName;

    /**
     *
     * @var string
     */
    private $provinceCode;

    /**
     *
     * @var string
     */
    private $postalCode;

    /**
     *
     * @var string
     */
    private $countryName;

    /**
     *
     * @var string
     */
    private $countryIso2;

    /**
     *
     * @var string
     */
    private $countryIso3;

    /**
     *
     * @var string
     */
    private $countryIsoNumber;

    /**
     *
     * @var string
     */
    private $sortingNumber1;

    /**
     *
     * @var string
     */
    private $sortingNumber2;

    /**
     *
     * @var string
     */
    private $barcode;

    /**
     *
     * @var string
     */
    private $poBoxNumber;

    /**
     *
     * @var string
     */
    private $label;

    /**
     *
     * @var string
     */
    private $type;

    /**
     *
     * @var string
     */
    private $dataLevel;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return RetrieveResult
     */
    public function setId(string $id): ?RetrieveResult
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getDomesticId(): string
    {
        return $this->domesticId;
    }

    /**
     * @param string $domesticId
     * @return RetrieveResult
     */
    public function setDomesticId(string $domesticId): ?RetrieveResult
    {
        $this->domesticId = $domesticId;
        return $this;
    }

    /**
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }

    /**
     * @param string $language
     * @return RetrieveResult
     */
    public function setLanguage(string $language): ?RetrieveResult
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return string
     */
    public function getLanguageAlternatives(): string
    {
        return $this->languageAlternatives;
    }

    /**
     * @param string $languageAlternatives
     * @return RetrieveResult
     */
    public function setLanguageAlternatives(string $languageAlternatives): ?RetrieveResult
    {
        $this->languageAlternatives = $languageAlternatives;
        return $this;
    }

    /**
     * @return string
     */
    public function getDepartment(): string
    {
        return $this->department;
    }

    /**
     * @param string $department
     * @return RetrieveResult
     */
    public function setDepartment(string $department): ?RetrieveResult
    {
        $this->department = $department;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompany(): string
    {
        return $this->company;
    }

    /**
     * @param string $company
     * @return RetrieveResult
     */
    public function setCompany(string $company): ?RetrieveResult
    {
        $this->company = $company;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubBuilding(): string
    {
        return $this->subBuilding;
    }

    /**
     * @param string $subBuilding
     * @return RetrieveResult
     */
    public function setSubBuilding(string $subBuilding): ?RetrieveResult
    {
        $this->subBuilding = $subBuilding;
        return $this;
    }

    /**
     * @return string
     */
    public function getBuildingNumber(): string
    {
        return $this->buildingNumber;
    }

    /**
     * @param string $buildingNumber
     * @return RetrieveResult
     */
    public function setBuildingNumber(string $buildingNumber): ?RetrieveResult
    {
        $this->buildingNumber = $buildingNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getBuildingName(): string
    {
        return $this->buildingName;
    }

    /**
     * @param string $buildingName
     * @return RetrieveResult
     */
    public function setBuildingName(string $buildingName): ?RetrieveResult
    {
        $this->buildingName = $buildingName;
        return $this;
    }

    /**
     * @return string
     */
    public function getSecondaryStreet(): string
    {
        return $this->secondaryStreet;
    }

    /**
     * @param string $secondaryStreet
     * @return RetrieveResult
     */
    public function setSecondaryStreet(string $secondaryStreet): ?RetrieveResult
    {
        $this->secondaryStreet = $secondaryStreet;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * @param string $street
     * @return RetrieveResult
     */
    public function setStreet(string $street): ?RetrieveResult
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @return string
     */
    public function getBlock(): string
    {
        return $this->block;
    }

    /**
     * @param string $block
     * @return RetrieveResult
     */
    public function setBlock(string $block): ?RetrieveResult
    {
        $this->block = $block;
        return $this;
    }

    /**
     * @return string
     */
    public function getNeighbourhood(): string
    {
        return $this->neighbourhood;
    }

    /**
     * @param string $neighbourhood
     * @return RetrieveResult
     */
    public function setNeighbourhood(string $neighbourhood): ?RetrieveResult
    {
        $this->neighbourhood = $neighbourhood;
        return $this;
    }

    /**
     * @return string
     */
    public function getDistrict(): string
    {
        return $this->district;
    }

    /**
     * @param string $district
     * @return RetrieveResult
     */
    public function setDistrict(string $district): ?RetrieveResult
    {
        $this->district = $district;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return RetrieveResult
     */
    public function setCity(string $city): ?RetrieveResult
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getLine1(): string
    {
        return $this->line1;
    }

    /**
     * @param string $line1
     * @return RetrieveResult
     */
    public function setLine1(string $line1): ?RetrieveResult
    {
        $this->line1 = $line1;
        return $this;
    }

    /**
     * @return string
     */
    public function getLine2(): string
    {
        return $this->line2;
    }

    /**
     * @param string $line2
     * @return RetrieveResult
     */
    public function setLine2(string $line2): ?RetrieveResult
    {
        $this->line2 = $line2;
        return $this;
    }

    /**
     * @return string
     */
    public function getLine3(): string
    {
        return $this->line3;
    }

    /**
     * @param string $line3
     * @return RetrieveResult
     */
    public function setLine3(string $line3): ?RetrieveResult
    {
        $this->line3 = $line3;
        return $this;
    }

    /**
     * @return string
     */
    public function getLine4(): string
    {
        return $this->line4;
    }

    /**
     * @param string $line4
     * @return RetrieveResult
     */
    public function setLine4(string $line4): ?RetrieveResult
    {
        $this->line4 = $line4;
        return $this;
    }

    /**
     * @return string
     */
    public function getLine5(): string
    {
        return $this->line5;
    }

    /**
     * @param string $line5
     * @return RetrieveResult
     */
    public function setLine5(string $line5): ?RetrieveResult
    {
        $this->line5 = $line5;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdminAreaName(): string
    {
        return $this->adminAreaName;
    }

    /**
     * @param string $adminAreaName
     * @return RetrieveResult
     */
    public function setAdminAreaName(string $adminAreaName): ?RetrieveResult
    {
        $this->adminAreaName = $adminAreaName;
        return $this;
    }

    /**
     * @return string
     */
    public function getAdminAreaCode(): string
    {
        return $this->adminAreaCode;
    }

    /**
     * @param string $adminAreaCode
     * @return RetrieveResult
     */
    public function setAdminAreaCode(string $adminAreaCode): ?RetrieveResult
    {
        $this->adminAreaCode = $adminAreaCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getProvince(): string
    {
        return $this->province;
    }

    /**
     * @param string $province
     * @return RetrieveResult
     */
    public function setProvince(string $province): ?RetrieveResult
    {
        $this->province = $province;
        return $this;
    }

    /**
     * @return string
     */
    public function getProvinceName(): string
    {
        return $this->provinceName;
    }

    /**
     * @param string $provinceName
     * @return RetrieveResult
     */
    public function setProvinceName(string $provinceName): ?RetrieveResult
    {
        $this->provinceName = $provinceName;
        return $this;
    }

    /**
     * @return string
     */
    public function getProvinceCode(): string
    {
        return $this->provinceCode;
    }

    /**
     * @param string $provinceCode
     * @return RetrieveResult
     */
    public function setProvinceCode(string $provinceCode): ?RetrieveResult
    {
        $this->provinceCode = $provinceCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode(): string
    {
        return $this->postalCode;
    }

    /**
     * @param string $postalCode
     * @return RetrieveResult
     */
    public function setPostalCode(string $postalCode): ?RetrieveResult
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountryName(): string
    {
        return $this->countryName;
    }

    /**
     * @param string $countryName
     * @return RetrieveResult
     */
    public function setCountryName(string $countryName): ?RetrieveResult
    {
        $this->countryName = $countryName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountryIso2(): string
    {
        return $this->countryIso2;
    }

    /**
     * @param string $countryIso2
     * @return RetrieveResult
     */
    public function setCountryIso2(string $countryIso2): ?RetrieveResult
    {
        $this->countryIso2 = $countryIso2;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountryIso3(): string
    {
        return $this->countryIso3;
    }

    /**
     * @param string $countryIso3
     * @return RetrieveResult
     */
    public function setCountryIso3(string $countryIso3): ?RetrieveResult
    {
        $this->countryIso3 = $countryIso3;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountryIsoNumber(): string
    {
        return $this->countryIsoNumber;
    }

    /**
     * @param string $countryIsoNumber
     * @return RetrieveResult
     */
    public function setCountryIsoNumber(string $countryIsoNumber): ?RetrieveResult
    {
        $this->countryIsoNumber = $countryIsoNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getSortingNumber1(): string
    {
        return $this->sortingNumber1;
    }

    /**
     * @param string $sortingNumber1
     * @return RetrieveResult
     */
    public function setSortingNumber1(string $sortingNumber1): ?RetrieveResult
    {
        $this->sortingNumber1 = $sortingNumber1;
        return $this;
    }

    /**
     * @return string
     */
    public function getSortingNumber2(): string
    {
        return $this->sortingNumber2;
    }

    /**
     * @param string $sortingNumber2
     * @return RetrieveResult
     */
    public function setSortingNumber2(string $sortingNumber2): ?RetrieveResult
    {
        $this->sortingNumber2 = $sortingNumber2;
        return $this;
    }

    /**
     * @return string
     */
    public function getBarcode(): string
    {
        return $this->barcode;
    }

    /**
     * @param string $barcode
     * @return RetrieveResult
     */
    public function setBarcode(string $barcode): ?RetrieveResult
    {
        $this->barcode = $barcode;
        return $this;
    }

    /**
     * @return string
     */
    public function getPoBoxNumber(): string
    {
        return $this->poBoxNumber;
    }

    /**
     * @param string $poBoxNumber
     * @return RetrieveResult
     */
    public function setPoBoxNumber(string $poBoxNumber): ?RetrieveResult
    {
        $this->poBoxNumber = $poBoxNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param string $label
     * @return RetrieveResult
     */
    public function setLabel(string $label): ?RetrieveResult
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }/**
     * @param string $type
     * @return RetrieveResult
     */
    public function setType(string $type): ?RetrieveResult
    {
        $this->type = $type;
        return $this;
    }/**
     * @return string
     */
    public function getDataLevel(): string
    {
        return $this->dataLevel;
    }/**
     * @param string $dataLevel
     * @return RetrieveResult
     */
    public function setDataLevel(string $dataLevel): ?RetrieveResult
    {
        $this->dataLevel = $dataLevel;
        return $this;
    }


}