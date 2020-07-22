<?php

namespace Divido\PCAPredict;

/**
 * Class PhoneValidatorResult
 *
 * @author Neil McGibbon <neil.mcgibbon@divido.com>
 * @copyright (c) 2017, Divido
 * @package DividoFinancialServices\PCAPredict
 */
class PhoneValidatorResult
{

    /**
     * @var string
     */
    private $phoneNumber;

    /**
     * @var bool
     */
    private $validationSucceeded;

    /**
     * @var string
     */
    private $isValid;

    /**
     * @var string
     */
    private $networkCode;

    /**
     * @var string
     */
    private $networkName;

    /**
     * @var string
     */
    private $networkCountry;

    /**
     * @var string
     */
    private $nationalFormat;

    /**
     * @var int
     */
    private $countryPrefix;

    /**
     * @var string
     */
    private $numberType;

    public function __construct()
    {
        ;
    }

    /**
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     * @return PhoneValidatorResult
     */
    public function setPhoneNumber(string $phoneNumber): ?PhoneValidatorResult
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @return bool
     */
    public function getValidationSucceeded(): bool
    {
        return $this->validationSucceeded;
    }

    /**
     * @param bool $validationSucceeded
     * @return PhoneValidatorResult
     */
    public function setValidationSucceeded(bool $validationSucceeded): ?PhoneValidatorResult
    {
        $this->validationSucceeded = $validationSucceeded;
        return $this;
    }

    /**
     * @return string
     */
    public function getIsValid(): string
    {
        return $this->isValid;
    }

    /**
     * @param string $isValid
     * @return PhoneValidatorResult
     */
    public function setIsValid(string $isValid): ?PhoneValidatorResult
    {
        $this->isValid = $isValid;
        return $this;
    }

    /**
     * @return string
     */
    public function getNetworkCode(): string
    {
        return $this->networkCode;
    }

    /**
     * @param string $networkCode
     * @return PhoneValidatorResult
     */
    public function setNetworkCode(string $networkCode): ?PhoneValidatorResult
    {
        $this->networkCode = $networkCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getNetworkName(): string
    {
        return $this->networkName;
    }

    /**
     * @param string $networkName
     * @return PhoneValidatorResult
     */
    public function setNetworkName(string $networkName): ?PhoneValidatorResult
    {
        $this->networkName = $networkName;
        return $this;
    }

    /**
     * @return string
     */
    public function getNetworkCountry(): string
    {
        return $this->networkCountry;
    }

    /**
     * @param string $networkCountry
     * @return PhoneValidatorResult
     */
    public function setNetworkCountry(string $networkCountry): ?PhoneValidatorResult
    {
        $this->networkCountry = $networkCountry;
        return $this;
    }

    /**
     * @return string
     */
    public function getNationalFormat(): string
    {
        return $this->nationalFormat;
    }

    /**
     * @param string $nationalFormat
     * @return PhoneValidatorResult
     */
    public function setNationalFormat(string $nationalFormat): ?PhoneValidatorResult
    {
        $this->nationalFormat = $nationalFormat;
        return $this;
    }

    /**
     * @return int
     */
    public function getCountryPrefix(): int
    {
        return $this->countryPrefix;
    }

    /**
     * @param int $countryPrefix
     * @return PhoneValidatorResult
     */
    public function setCountryPrefix(int $countryPrefix): ?PhoneValidatorResult
    {
        $this->countryPrefix = $countryPrefix;
        return $this;
    }

    /**
     * @return string
     */
    public function getNumberType(): string
    {
        return $this->numberType;
    }

    /**
     * @param string $numberType
     * @return PhoneValidatorResult
     */
    public function setNumberType(string $numberType): ?PhoneValidatorResult
    {
        $this->numberType = $numberType;
        return $this;
    }




}