<?php

namespace Divido\PCAPredict;

/**
 * Class EmailValidatorArgs
 *
 * @author Neil McGibbon <neil.mcgibbon@divido.com>
 * @copyright (c) 2017, Divido
 * @package DividoFinancialServices\PCAPredict
 */
class EmailValidatorArgs
{
    /**
     * The email address to validate
     *
     * @var string
     */
    private $emailAddress;

    /**
     * Timeout in seconds
     *
     * @var integer
     */
    private $timeout;

    public function __construct()
    {
        $this->setTimeout(5);
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
     * @return EmailValidatorArgs
     */
    public function setEmailAddress(string $emailAddress): ?EmailValidatorArgs
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }

    /**
     * @return int
     */
    public function getTimeout(): int
    {
        return $this->timeout;
    }

    /**
     * @param int $timeout
     * @return EmailValidatorArgs
     */
    public function setTimeout(int $timeout): ?EmailValidatorArgs
    {
        $this->timeout = $timeout;
        return $this;
    }

    /**
     * @return array<string, mixed>
     */
    public function getArgsAsArray(): array
    {
        return [
            'Email' => $this->getEmailAddress(),
            'Timeout' => $this->getTimeout() * 1000,
        ];
    }

}


