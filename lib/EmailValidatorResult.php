<?php

namespace DividoFinancialServices\PCAPredict;

/**
 * Class EmailValidatorResult
 *
 * @author Neil McGibbon <neil.mcgibbon@divido.com>
 * @copyright (c) 2017, Divido
 * @package DividoFinancialServices\PCAPredict
 */
class EmailValidatorResult
{

    /**
     * @var string
     */
    private $responseCode;

    /**
     * @var string
     */
    private $responseMessage;

    /**
     * @var string
     */
    private $emailAddress;

    /**
     * @var string
     */
    private $userAccount;

    /**
     * @var string
     */
    private $domain;

    /**
     * @var bool
     */
    private $isDisposableOrTemporary;

    /**
     * @var bool
     */
    private $isComplainerOrFraudRisk;

    /**
     * @var float
     */
    private $duration;

    /**
     * EmailValidatorResult constructor.
     */
    function __construct()
    {
        ;
    }

    /**
     * @return string
     */
    public function getResponseCode(): string
    {
        return $this->responseCode;
    }

    /**
     * @param string $responseCode
     * @return EmailValidatorResult
     */
    public function setResponseCode(string $responseCode): ?EmailValidatorResult
    {
        $this->responseCode = $responseCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getResponseMessage(): string
    {
        return $this->responseMessage;
    }

    /**
     * @param string $resonseMessage
     * @return EmailValidatorResult
     */
    public function setResponseMessage(string $responseMessage): ?EmailValidatorResult
    {
        $this->responseMessage = $responseMessage;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmailAddress(): string
    {
        return $this->emailAddress;
    }

    /**
     * @param string $emailAddress
     * @return EmailValidatorResult
     */
    public function setEmailAddress(string $emailAddress): ?EmailValidatorResult
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }

    /**
     * @return string
     */
    public function getUserAccount(): string
    {
        return $this->userAccount;
    }

    /**
     * @param string $userAccount
     * @return EmailValidatorResult
     */
    public function setUserAccount(string $userAccount): ?EmailValidatorResult
    {
        $this->userAccount = $userAccount;
        return $this;
    }

    /**
     * @return string
     */
    public function getDomain(): string
    {
        return $this->domain;
    }

    /**
     * @param string $domain
     * @return EmailValidatorResult
     */
    public function setDomain(string $domain): ?EmailValidatorResult
    {
        $this->domain = $domain;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsDisposableOrTemporary(): bool
    {
        return $this->isDisposableOrTemporary;
    }

    /**
     * @param bool $isDisposableOrTemporary
     * @return EmailValidatorResult
     */
    public function setIsDisposableOrTemporary(bool $isDisposableOrTemporary): ?EmailValidatorResult
    {
        $this->isDisposableOrTemporary = $isDisposableOrTemporary;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsComplainerOrFraudRisk(): bool
    {
        return $this->isComplainerOrFraudRisk;
    }

    /**
     * @param bool $isComplainerOrFraudRisk
     * @return EmailValidatorResult
     */
    public function setIsComplainerOrFraudRisk(bool $isComplainerOrFraudRisk): ?EmailValidatorResult
    {
        $this->isComplainerOrFraudRisk = $isComplainerOrFraudRisk;
        return $this;
    }

    /**
     * @return float
     */
    public function getDuration(): float
    {
        return $this->duration;
    }

    /**
     * @param float $duration
     * @return EmailValidatorResult
     */
    public function setDuration(float $duration): ?EmailValidatorResult
    {
        $this->duration = $duration;
        return $this;
    }




}