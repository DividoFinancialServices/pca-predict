<?php

namespace Divido\Tests\PCAPredict;

use Divido\PCAPredict\BankAccountValidator;
use Divido\PCAPredict\BankAccountValidatorArgs;
use Divido\PCAPredict\BankAccountValidatorResult;
use Divido\PCAPredict\Credentials;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

class BankAccountValidationTest extends TestCase
{
    public function testRetrieveResults_ReturnsResults(): void
    {
        $credentials = new Credentials('testApiKey');
        $validator = new BankAccountValidator($credentials);

        $args = new BankAccountValidatorArgs();
        $args->setAccountNumber('12345678');
        $args->setSortCode('00-00-99');

        // Mock network Client
        $guzzleMock = $this->createMock(Client::class);

        // Mock network response
        $response = new Response(200, [], '[{"IsCorrect":"True","IsDirectDebitCapable":"True","StatusInformation":"CautiousOK","CorrectedSortCode":"000099","CorrectedAccountNumber":"12345678","IBAN":"GB27NWBK00009912345678","Bank":"TEST BANK PLC PLC","BankBIC":"NWBKGB21","Branch":"Worcester","BranchBIC":"18R","ContactAddressLine1":"2 High Street","ContactAddressLine2":"Smallville","ContactPostTown":"Worcester","ContactPostcode":"WR2 6NJ","ContactPhone":"01234 456789","ContactFax":"","FasterPaymentsSupported":"False","CHAPSSupported":"True"}]');

        $guzzleMock->method('send')
            ->willReturn($response);

        $validator->getNetworkClient()->setClient($guzzleMock);

        $res = $validator->validate($args);

        self::assertInstanceOf(BankAccountValidatorResult::class, $res);
        self::assertSame('GB27NWBK00009912345678', $res->getIban());
        self::assertSame('TEST BANK PLC PLC', $res->getBank());
        self::assertSame('NWBKGB21', $res->getBankBic());
        self::assertSame('Worcester', $res->getBranch());
        self::assertSame('18R', $res->getBranchBic());
        self::assertSame(true, $res->getChapsSupported());
        self::assertSame('2 High Street', $res->getContactAddressLine1());
        self::assertSame('Smallville', $res->getContactAddressLine2());
        self::assertSame('', $res->getContactFax());
        self::assertSame('01234 456789', $res->getContactPhone());
        self::assertSame('Worcester', $res->getContactPostTown());
        self::assertSame('WR2 6NJ', $res->getContactPostcode());
        self::assertSame('12345678', $res->getCorrectedAccountNumber());
        self::assertSame('000099', $res->getCorrectedSortCode());
        self::assertSame(false, $res->getFasterPaymentsSupported());
        self::assertSame(true, $res->getIsCorrect());
        self::assertSame(true, $res->getIsDirectDebitCapable());
        self::assertSame('CautiousOK', $res->getStatusInformation());
    }
}
