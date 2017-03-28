<?php

namespace DividoFinancialServices\PCAPredict;

/**
 * Class Finder
 *
 * Calls the PCA Predict API to find an address (fuzzy matching)
 *
 * @author Neil McGibbon <neil.mcgibbon@divido.com>
 * @copyright (c) 2017, Divido
 * @package DividoFinancialServices\PCAPredict
 */
class Finder
{

    /**
     * The base URL for Secure HTTPS requests to PCA Predict web services.
     *
     * @const string
     */
    const HTTPS_BASE_URL = 'http://services.postcodeanywhere.co.uk/Capture/Interactive/Find/v1.00/json3ex.ws';

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
     * Query PCA Predict API to look for address match.
     *
     * @param FindArgs $findArgs
     *
     * @return FinderResult[]
     *
     * @throws NetworkException
     */
    public function find(FindArgs $findArgs)
    {

        $response = $this->networkClient->request(
            self::HTTPS_BASE_URL,
            $this->credentials,
            $findArgs->getArgsAsArray(),
            'get', [], null
        );

        if ($response->getState() !== NetworkResponse::STATE_SUCCESS) {
            throw new NetworkException($response->getException());
        }
        $json = json_decode($response->getBody());

        foreach ($json->Items as $item) {
            $result = new FinderResult();
            $result->setId($item->Id)
                ->setType($item->Type)
                ->setText($item->Text)
                ->setHighlight($item->Highlight)
                ->setDescription($item->Description);

            $results[] = $result;
        }

        return $results;

    }


}


