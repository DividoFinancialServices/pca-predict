<?php

namespace Divido\PCAPredict;

/**
 * Class BankAccountValidatorResult
 *
 * @author Neil McGibbon <neil.mcgibbon@divido.com>
 * @copyright (c) 2017, Divido
 * @package DividoFinancialServices\PCAPredict
 */
class BankAccountValidatorResult
{

    /**
     * @var bool
     */
    private $isCorrect;

    /**
     * @var bool
     */
    private $isDirectDebitCapable;

    /**
     * @var string
     */
    private $statusInformation;

    /**
     * @var string
     */
    private $correctedSortCode;

    /**
     * @var string
     */
    private $correctedAccountNumber;

    /**
     * @var string
     */
    private $iban;

    /**
     * @var string
     */
    private $bank;

    /**
     * @var string
     */
    private $bankBic;

    /**
     * @var string
     */
    private $branch;

    /**
     * @var string
     */
    private $branchBic;

    /**
     * @var string
     */
    private $contactAddressLine1;

    /**
     * @var string
     */
    private $contactAddressLine2;

    /**
     * @var string
     */
    private $contactPostTown;

    /**
     * @var string
     */
    private $contactPostcode;

    /**
     * @var string
     */
    private $contactPhone;

    /**
     * @var string
     */
    private $contactFax;

    /**
     * @var bool
     */
    private $fasterPaymentsSupported;

    /**
     * @var bool
     */
    private $chapsSupported;

    /**
     * BankAccountValidatorResult constructor.
     */
    public function __construct()
    {
        ;
    }

    /**
     * @return bool
     */
    public function getIsCorrect(): bool
    {
        return $this->isCorrect;
    }

    /**
     * @param bool $isCorrect
     * @return BankAccountValidatorResult
     */
    public function setIsCorrect(bool $isCorrect): ?BankAccountValidatorResult
    {
        $this->isCorrect = $isCorrect;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsDirectDebitCapable(): bool
    {
        return $this->isDirectDebitCapable;
    }

    /**
     * @param bool $isDirectDebitCapable
     * @return BankAccountValidatorResult
     */
    public function setIsDirectDebitCapable(bool $isDirectDebitCapable): ?BankAccountValidatorResult
    {
        $this->isDirectDebitCapable = $isDirectDebitCapable;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatusInformation(): string
    {
        return $this->statusInformation;
    }

    /**
     * @param string $statusInformation
     * @return BankAccountValidatorResult
     */
    public function setStatusInformation(string $statusInformation): ?BankAccountValidatorResult
    {
        $this->statusInformation = $statusInformation;
        return $this;
    }

    /**
     * @return string
     */
    public function getCorrectedSortCode(): string
    {
        return $this->correctedSortCode;
    }

    /**
     * @param string $correctedSortCode
     * @return BankAccountValidatorResult
     */
    public function setCorrectedSortCode(string $correctedSortCode): ?BankAccountValidatorResult
    {
        $this->correctedSortCode = $correctedSortCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCorrectedAccountNumber(): string
    {
        return $this->correctedAccountNumber;
    }

    /**
     * @param string $correctedAccountNumber
     * @return BankAccountValidatorResult
     */
    public function setCorrectedAccountNumber(string $correctedAccountNumber): ?BankAccountValidatorResult
    {
        $this->correctedAccountNumber = $correctedAccountNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getIban(): string
    {
        return $this->iban;
    }

    /**
     * @param string $iban
     * @return BankAccountValidatorResult
     */
    public function setIban(string $iban): ?BankAccountValidatorResult
    {
        $this->iban = $iban;
        return $this;
    }

    /**
     * @return string
     */
    public function getBank(): string
    {
        return $this->bank;
    }

    /**
     * @param string $bank
     * @return BankAccountValidatorResult
     */
    public function setBank(string $bank): ?BankAccountValidatorResult
    {
        $this->bank = $bank;
        return $this;
    }

    /**
     * @return string
     */
    public function getBankBic(): string
    {
        return $this->bankBic;
    }

    /**
     * @param string $bankBic
     * @return BankAccountValidatorResult
     */
    public function setBankBic(string $bankBic): ?BankAccountValidatorResult
    {
        $this->bankBic = $bankBic;
        return $this;
    }

    /**
     * @return string
     */
    public function getBranch(): string
    {
        return $this->branch;
    }

    /**
     * @param string $branch
     * @return BankAccountValidatorResult
     */
    public function setBranch(string $branch): ?BankAccountValidatorResult
    {
        $this->branch = $branch;
        return $this;
    }

    /**
     * @return string
     */
    public function getBranchBic(): string
    {
        return $this->branchBic;
    }

    /**
     * @param string $branchBic
     * @return BankAccountValidatorResult
     */
    public function setBranchBic(string $branchBic): ?BankAccountValidatorResult
    {
        $this->branchBic = $branchBic;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactAddressLine1(): string
    {
        return $this->contactAddressLine1;
    }

    /**
     * @param string $contactAddressLine1
     * @return BankAccountValidatorResult
     */
    public function setContactAddressLine1(string $contactAddressLine1): ?BankAccountValidatorResult
    {
        $this->contactAddressLine1 = $contactAddressLine1;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactAddressLine2(): string
    {
        return $this->contactAddressLine2;
    }

    /**
     * @param string $contactAddressLine2
     * @return BankAccountValidatorResult
     */
    public function setContactAddressLine2(string $contactAddressLine2): ?BankAccountValidatorResult
    {
        $this->contactAddressLine2 = $contactAddressLine2;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactPostTown(): string
    {
        return $this->contactPostTown;
    }

    /**
     * @param string $contactPostTown
     * @return BankAccountValidatorResult
     */
    public function setContactPostTown(string $contactPostTown): ?BankAccountValidatorResult
    {
        $this->contactPostTown = $contactPostTown;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactPostcode(): string
    {
        return $this->contactPostcode;
    }

    /**
     * @param string $contactPostcode
     * @return BankAccountValidatorResult
     */
    public function setContactPostcode(string $contactPostcode): ?BankAccountValidatorResult
    {
        $this->contactPostcode = $contactPostcode;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactPhone(): string
    {
        return $this->contactPhone;
    }

    /**
     * @param string $contactPhone
     * @return BankAccountValidatorResult
     */
    public function setContactPhone(string $contactPhone): ?BankAccountValidatorResult
    {
        $this->contactPhone = $contactPhone;
        return $this;
    }

    /**
     * @return string
     */
    public function getContactFax(): string
    {
        return $this->contactFax;
    }

    /**
     * @param string $contactFax
     * @return BankAccountValidatorResult
     */
    public function setContactFax(string $contactFax): ?BankAccountValidatorResult
    {
        $this->contactFax = $contactFax;
        return $this;
    }

    /**
     * @return bool
     */
    public function getFasterPaymentsSupported(): bool
    {
        return $this->fasterPaymentsSupported;
    }

    /**
     * @param bool $fasterPaymentsSupported
     * @return BankAccountValidatorResult
     */
    public function setFasterPaymentsSupported(bool $fasterPaymentsSupported): ?BankAccountValidatorResult
    {
        $this->fasterPaymentsSupported = $fasterPaymentsSupported;
        return $this;
    }

    /**
     * @return bool
     */
    public function getChapsSupported(): bool
    {
        return $this->chapsSupported;
    }

    /**
     * @param bool $chapsSupported
     * @return BankAccountValidatorResult
     */
    public function setChapsSupported(bool $chapsSupported): ?BankAccountValidatorResult
    {
        $this->chapsSupported = $chapsSupported;
        return $this;
    }






}