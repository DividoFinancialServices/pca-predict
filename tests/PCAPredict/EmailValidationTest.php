<?php

namespace Divido\Tests\PCAPredict;

use Divido\PCAPredict\Credentials;
use Divido\PCAPredict\EmailValidator;
use Divido\PCAPredict\EmailValidatorArgs;
use Divido\PCAPredict\EmailValidatorResult;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

class EmailValidationTest extends TestCase
{
    public function testRetrieveResults_ReturnsResults()
    {
        $credentials = new Credentials('testApiKey');
        $validator = new EmailValidator($credentials);


        $args = new EmailValidatorArgs();
        $args->setEmailAddress('test@test.com');

        // Mock network Client
        $guzzleMock = $this->createMock(Client::class);

        // Mock network response
        $response = new Response(200, [], '[{"ResponseCode":"Valid_CatchAll","ResponseMessage":"Mail is routable to the domain but account could not be validated","EmailAddress":"test@test.com","UserAccount":"test","Domain":"test.com","IsDisposableOrTemporary":"False","IsComplainerOrFraudRisk":"False","Duration":"0.777"}]');

        $guzzleMock->method('send')
            ->willReturn($response);

        $validator->getNetworkClient()->setClient($guzzleMock);

        $res = $validator->validate($args);

        self::assertInstanceOf(EmailValidatorResult::class, $res);
        self::assertSame('test@test.com', $res->getEmailAddress());
        self::assertSame('test.com', $res->getDomain());
        self::assertSame('test', $res->getUserAccount());
        self::assertSame('Valid_CatchAll', $res->getResponseCode());
        self::assertSame('Mail is routable to the domain but account could not be validated', $res->getResponseMessage());
        self::assertSame(false, $res->getIsComplainerOrFraudRisk());
        self::assertSame(false, $res->getIsDisposableOrTemporary());
        self::assertSame(0.777, $res->getDuration());
    }
}