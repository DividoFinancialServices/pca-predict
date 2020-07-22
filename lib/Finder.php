<?php

namespace Divido\PCAPredict;

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
     * @param FinderArgs $findArgs
     *
     * @return FinderResult[]
     *
     * @throws NetworkException
     */
    public function find(FinderArgs $findArgs)
    {

        $response = $this->networkClient->request(
            PcaPredictUrls::ADDRESS_FINDER,
            $this->credentials,
            $findArgs->getArgsAsArray(),
            'get', [], null
        );

        if ($response->getState() !== NetworkResponse::STATE_SUCCESS) {
            throw new NetworkException($response->getException());
        }
        $json = json_decode($response->getBody());
	
	$results = [];

        foreach ($json->Items as $item) {
            $result = new FinderResult();
            $result->setId($item->Id)
                ->setType($item->Type)
                ->setText($item->Text)
                ->setHighlight($item->Highlight)
                ->setDescription($item->Description);

            if (empty($findArgs->getTypeFilter()) || in_array($result->getType(), $findArgs->getTypeFilter())) {
                $results[] = $result;
            }

        }

        return $results;

    }


}


