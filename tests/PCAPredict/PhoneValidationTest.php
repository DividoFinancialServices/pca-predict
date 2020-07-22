<?php

namespace Divido\Tests\PCAPredict;

use Divido\PCAPredict\Credentials;
use Divido\PCAPredict\PhoneValidator;
use Divido\PCAPredict\PhoneValidatorArgs;
use Divido\PCAPredict\PhoneValidatorResult;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

class PhoneValidationTest extends TestCase
{
    public function testRetrieveResults_ReturnsResults()
    {
        $credentials = new Credentials('testApiKey');
        $validator = new PhoneValidator($credentials);

        $args = new PhoneValidatorArgs();
        $args->setPhoneNumber('07751123456');
        $args->setCountryCode('GB');

        // Mock network Client
        $guzzleMock = $this->createMock(Client::class);

        // Mock network response
        $response = new Response(200, [], '[{"PhoneNumber":"+447751123456","ValidationSucceeded":"True","IsValid":"Yes","NetworkCode":"10","NetworkName":"Telefonica UK","NetworkCountry":"GB","NationalFormat":"07751 123456","CountryPrefix":"44","NumberType":"Mobile"}]');

        $guzzleMock->method('send')
            ->willReturn($response);

        $validator->getNetworkClient()->setClient($guzzleMock);

        $res = $validator->validate($args);

        self::assertInstanceOf(PhoneValidatorResult::class, $res);
        self::assertSame('+447751123456', $res->getPhoneNumber());
        self::assertSame(true, $res->getValidationSucceeded());
        self::assertSame('Yes', $res->getIsValid());
        self::assertSame('10', $res->getNetworkCode());
        self::assertSame('Telefonica UK', $res->getNetworkName());
        self::assertSame('GB', $res->getNetworkCountry());
        self::assertSame('07751 123456', $res->getNationalFormat());
        self::assertSame(44, $res->getCountryPrefix());
        self::assertSame('Mobile', $res->getNumberType());




    }


    
}