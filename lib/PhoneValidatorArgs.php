<?php

namespace DividoFinancialServices\PCAPredict;

/**
 * Class PhoneValidatorArgs
 *
 * @author Neil McGibbon <neil.mcgibbon@divido.com>
 * @copyright (c) 2017, Divido
 * @package DividoFinancialServices\PCAPredict
 */
class PhoneValidatorArgs
{
    /**
     * The phone number to validate
     *
     * @var string
     */
    private $phoneNumber;

    /**
     * Country code of phone number
     *
     * @var string
     */
    private $countryCode;

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
     * @return PhoneValidatorArgs
     */
    public function setPhoneNumber(string $phoneNumber): ?PhoneValidatorArgs
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    /**
     * @param string $countryCode
     * @return PhoneValidatorArgs
     */
    public function setCountryCode(string $countryCode): ?PhoneValidatorArgs
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * @return array
     */
    public function getArgsAsArray()
    {
        $args = [
            'Phone' => $this->getPhoneNumber(),
        ];

        if ($this->getCountryCode()) {
            $args['Country'] = $this->getCountryCode();
        }

        return $args;
    }

}


