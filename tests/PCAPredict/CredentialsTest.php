<?php

namespace DividoFinancialServices\PCAPredict;

class CredentialsTest extends \PHPUnit_Framework_TestCase
{
    public function testCredentials_WithApiKey_GetsApiKey()
    {
        $credentials = new Credentials('testApiKey');
        self::assertEquals('testApiKey', $credentials->getApiKey());
    }

}