<?php

namespace DividoFinancialServices\PCAPredict;

/**
 * Class Credentials
 *
 * @author Neil McGibbon <neil.mcgibbon@divido.com>
 * @copyright (c) 2017, Divido
 * @package DividoFinancialServices\PCAPredict
 */
class Credentials
{
    /**
     * The API key used to authenticate with the PCA Predict API
     *
     * @var string
     */
    private $apiKey;

    /**
     * Credentials constructor.
     *
     * @param string $apiKey The API key used to authenticate with the PCA Predict API
     */
    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    /**
     * Get the API key set in the credentials object.
     *
     * @return string
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }


}


