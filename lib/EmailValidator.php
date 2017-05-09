<?php

namespace DividoFinancialServices\PCAPredict;

/**
 * Class EmailValidator
 *
 * Calls the PCA Predict Email Validation API to validate an email address
 *
 * @author Neil McGibbon <neil.mcgibbon@divido.com>
 * @copyright (c) 2017, Divido
 * @package DividoFinancialServices\PCAPredict
 */
class EmailValidator
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
     * Query PCA Predict API to validate email address
     *
     * @throws NetworkException
     */
    public function validate(EmailValidatorArgs $emailValidatorArgs)
    {

        $response = $this->networkClient->request(
            PcaPredictUrls::EMAIL_VALIDATION,
            $this->credentials,
            $emailValidatorArgs->getArgsAsArray(),
            'get', [], null
        );

        if ($response->getState() !== NetworkResponse::STATE_SUCCESS) {
            throw new NetworkException($response->getException());
        }
        $json = json_decode($response->getBody());
	
	    $result = new EmailValidatorResult();
	    $result->setEmailAddress($json[0]->EmailAddress)
            ->setDomain($json[0]->Domain)
            ->setDuration((float)$json[0]->Duration)
            ->setIsComplainerOrFraudRisk($json[0]->IsComplainerOrFraudRisk == "True" ? true : false)
            ->setIsDisposableOrTemporary($json[0]->IsDisposableOrTemporary == "True" ? true : false)
            ->setResponseCode($json[0]->ResponseCode)
            ->setResponseMessage($json[0]->ResponseMessage)
            ->setUserAccount($json[0]->UserAccount);

	    return $result;

    }


}


