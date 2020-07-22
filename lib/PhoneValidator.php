<?php

namespace Divido\PCAPredict;

/**
 * Class PhoneValidator
 *
 * Calls the PCA Predict Phone Validation API to validate a phone number
 *
 * @author Neil McGibbon <neil.mcgibbon@divido.com>
 * @copyright (c) 2017, Divido
 * @package DividoFinancialServices\PCAPredict
 */
class PhoneValidator
{

    /**
     * PCA Predict API credential(s)
     *
     * @var Credentials
     */
    private $credentials;

    /**
     * @var NetworkClient
     */
    private $networkClient;


    /**
     * Finder constructor.
     *
     * @param Credentials $credentials The credential(s) used to authenticate with the PCA Predict API
     */
    public function __construct(Credentials $credentials)
    {
        $this->credentials = $credentials;
        $this->networkClient = new NetworkClient();
    }

    /**
     * @return NetworkClient
     */
    public function getNetworkClient()
    {
        return $this->networkClient;
    }

    /**
     * Query PCA Predict API to validate phone number
     *
     * @throws NetworkException
     */
    public function validate(PhoneValidatorArgs $phoneValidatorArgs)
    {

        $response = $this->networkClient->request(
            PcaPredictUrls::PHONE_VALIDATION,
            $this->credentials,
            $phoneValidatorArgs->getArgsAsArray(),
            'get', [], null
        );

        if ($response->getState() !== NetworkResponse::STATE_SUCCESS) {
            throw new NetworkException($response->getException());
        }

        $json = json_decode($response->getBody());

        if (property_exists($json[0], 'Error')) {
            throw new PcaResponseException($json[0]->Error, $json[0]->Description);
        }

        $result = new PhoneValidatorResult();
	    $result->setPhoneNumber($json[0]->PhoneNumber)
            ->setCountryPrefix((int)$json[0]->CountryPrefix)
            ->setIsValid($json[0]->IsValid)
            ->setNationalFormat($json[0]->NationalFormat)
            ->setNetworkCode($json[0]->NetworkCode)
            ->setNetworkCountry($json[0]->NetworkCountry)
            ->setNetworkName($json[0]->NetworkName)
            ->setNumberType($json[0]->NumberType)
            ->setValidationSucceeded($json[0]->ValidationSucceeded == "True" ? true : false);

        return $result;

    }


}


