<?php

namespace DividoFinancialServices\PCAPredict;

/**
 * Class BankAccountValidator
 *
 * Calls the PCA Predict Bank Account Validation API to validate a bank account number and sort code
 *
 * @author Neil McGibbon <neil.mcgibbon@divido.com>
 * @copyright (c) 2017, Divido
 * @package DividoFinancialServices\PCAPredict
 */
class BankAccountValidator
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
     * Query PCA Predict API to validate bank account number and sort code
     *
     * @throws NetworkException
     */
    public function validate(BankAccountValidatorArgs $bankAccountValidatorArgs)
    {

        $response = $this->networkClient->request(
            PcaPredictUrls::BANK_ACCOUNT_VALIDATION,
            $this->credentials,
            $bankAccountValidatorArgs->getArgsAsArray(),
            'get', [], null
        );

        if ($response->getState() !== NetworkResponse::STATE_SUCCESS) {
            throw new NetworkException($response->getException());
        }

        $json = json_decode($response->getBody());

        $result = new BankAccountValidatorResult();
	    $result->setIban($json[0]->IBAN)
            ->setBank($json[0]->Bank)
            ->setBankBic($json[0]->BankBIC)
            ->setBranch($json[0]->Branch)
            ->setBranchBic($json[0]->BranchBIC)
            ->setChapsSupported($json[0]->CHAPSSupported == "True" ? true : false)
            ->setContactAddressLine1($json[0]->ContactAddressLine1)
            ->setContactAddressLine2($json[0]->ContactAddressLine2)
            ->setContactFax($json[0]->ContactFax)
            ->setContactPhone($json[0]->ContactPhone)
            ->setContactPostTown($json[0]->ContactPostTown)
            ->setContactPostcode($json[0]->ContactPostcode)
            ->setCorrectedAccountNumber($json[0]->CorrectedAccountNumber)
            ->setCorrectedSortCode($json[0]->CorrectedSortCode)
            ->setFasterPaymentsSupported($json[0]->FasterPaymentsSupported == "True" ? true : false)
            ->setIsCorrect($json[0]->IsCorrect == "True" ? true : false)
            ->setIsDirectDebitCapable($json[0]->IsDirectDebitCapable == "True" ? true : false)
            ->setStatusInformation($json[0]->StatusInformation);

	    return $result;

    }


}


