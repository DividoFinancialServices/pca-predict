<?php

namespace DividoFinancialServices\PCAPredict;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Psr7\Request;

/**
 * Class NetworkClient
 *
 * @author Neil McGibbon <neil.mcgibbon@divido.com>
 * @copyright (c) 2017, Divido
 * @package DividoFinancialServices\PCAPredict
 */
class NetworkClient
{

    /**
     * @var Client|mixed
     */
    private $client;

    public function __construct()
    {
        ;
    }

    /**
     * @param $client
     */
    public function setClient($client)
    {
        $this->client = $client;
    }

    /**
     * @return Client|mixed
     */
    private function getClient()
    {
        if (!$this->client)
        {
            $this->client = new Client();
        }

        return $this->client;
    }

    /**
     * @param string $url
     * @param Credentials $credentials
     * @param array $query
     * @param string $method
     * @param array $headers
     * @param null $payload
     * @return NetworkResponse
     * @internal param string $apiKey
     */
    public function request(string $url, Credentials $credentials, array $query, string $method, array $headers, $payload = null)
    {
        $client = $this->getClient();

        $request = new Request(
            $method,
            $url . '?' . http_build_query(
                array_merge(
                    $query,
                    [
                        'Key' => $credentials->getApiKey(),
                    ]
                ),null, "&", PHP_QUERY_RFC3986
            ),
            $headers
        );

        if ($payload !== null) {
            $request = $request->withBody($payload);
        }

        $networkResponse = new NetworkResponse();

        try {
            $response = $client->send($request);
            $networkResponse->setHttpStatusCode($response->getStatusCode())
                ->setBody($response->getBody()->getContents())
                ->setResponseHeaders($response->getHeaders())
                ->setState(NetworkResponse::STATE_SUCCESS);

            // A bad API key will result in a 200 OK. Catch this here.
            $networkResponse = $this->catchApiErrorFromResponse($networkResponse);

        } catch (BadResponseException $e) {
            $networkResponse->setHttpStatusCode($e->getResponse()->getStatusCode())
                ->setBody($e->getResponse()->getBody()->getContents())
                ->setException($e)
                ->setState(NetworkResponse::STATE_FAILED)
                ->setResponseHeaders($e->getResponse()->getHeaders());
        } catch (\Exception $e) {
            $networkResponse->setException($e)
                ->setState(NetworkResponse::STATE_ERROR);
        }

        return $networkResponse;

    }

    private function catchApiErrorFromResponse(NetworkResponse $networkResponse)
    {
       $json = @json_decode($networkResponse->getBody());

       if (json_last_error() !== JSON_ERROR_NONE
            && is_object($json)
            && property_exists($json, 'Items')
            && count($json->Items) === 1
            && property_exists($json->Items[0], "Error"))
       {
           $exception = new \Exception(json_encode($json->Items[0]));
           $networkResponse->setState(NetworkResponse::STATE_FAILED)
               ->setException($exception);
       }

       return $networkResponse;

    }
}