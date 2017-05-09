<?php

namespace DividoFinancialServices\PCAPredict;

/**
 * Class BankAccountValidatorArgs
 *
 * @author Neil McGibbon <neil.mcgibbon@divido.com>
 * @copyright (c) 2017, Divido
 * @package DividoFinancialServices\PCAPredict
 */
class BankAccountValidatorArgs
{
    /**
     * The account number to validate
     *
     * @var string
     */
    private $accountNumber;

    /**
     * The sort code to validate
     *
     * @var string
     */
    private $sortCode;

    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getAccountNumber(): string
    {
        return $this->accountNumber;
    }

    /**
     * @param string $accountNumber
     * @return BankAccountValidatorArgs
     */
    public function setAccountNumber(string $accountNumber): ?BankAccountValidatorArgs
    {
        $this->accountNumber = $accountNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getSortCode(): string
    {
        return $this->sortCode;
    }

    /**
     * @param string $sortCode
     * @return BankAccountValidatorArgs
     */
    public function setSortCode(string $sortCode): ?BankAccountValidatorArgs
    {
        $this->sortCode = $sortCode;
        return $this;
    }


    /**
     * @return array
     */
    public function getArgsAsArray()
    {
        return [
            'AccountNumber' => $this->getAccountNumber(),
            'SortCode' => $this->getSortCode(),
        ];
    }

}


