<?php

namespace Divido\PCAPredict;

use Exception;

/**
 * Class NetworkResponse
 *
 * @author Neil McGibbon <neil.mcgibbon@divido.com>
 * @copyright (c) 2017, Divido
 * @package DividoFinancialServices\PCAPredict
 */
class NetworkResponse
{
    /**
     * The HTTP response states.
     */
    public const STATE_SUCCESS = "success";
    public const STATE_FAILED = "failed";
    public const STATE_ERROR = "errpr";

    /**
     * @var int
     */
    private $httpStatusCode;

    /**
     * @var array<string, mixed>
     */
    private $responseHeaders;

    /**
     * @var string
     */
    private $body;

    /**
     * The state of the response. Can be one of:
     *   - success (a valid HTTP response)
     *   - failed (a bad HTTP response, but still a response)
     *   - error (an unknown error - check the exception property)
     * @var string
     */
    private $state;

    /**
     * @var Exception
     */
    private $exception;

    /**
     * @return int
     */
    public function getHttpStatusCode(): int
    {
        return $this->httpStatusCode;
    }

    /**
     * @param int $httpStatusCode
     * @return NetworkResponse
     */
    public function setHttpStatusCode(int $httpStatusCode): ?NetworkResponse
    {
        $this->httpStatusCode = $httpStatusCode;
        return $this;
    }

    /**
     * @return array<string, mixed>
     */
    public function getResponseHeaders(): array
    {
        return $this->responseHeaders;
    }

    /**
     * @param array<string, mixed> $responseHeaders
     * @return NetworkResponse
     */
    public function setResponseHeaders(array $responseHeaders): ?NetworkResponse
    {
        $this->responseHeaders = $responseHeaders;
        return $this;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return $this->body;
    }

    /**
     * @param string $body
     * @return NetworkResponse
     */
    public function setBody(string $body): ?NetworkResponse
    {
        $this->body = $body;
        return $this;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @param string $state
     * @return NetworkResponse
     */
    public function setState(string $state): ?NetworkResponse
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return Exception
     */
    public function getException(): Exception
    {
        return $this->exception;
    }

    /**
     * @param Exception $exception
     * @return NetworkResponse
     */
    public function setException(Exception $exception): ?NetworkResponse
    {
        $this->exception = $exception;
        return $this;
    }




}