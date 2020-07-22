<?php

namespace Divido\Tests\PCAPredict;

use Divido\PCAPredict\Credentials;
use PHPUnit\Framework\TestCase;

class CredentialsTest extends TestCase
{
    public function testCredentials_WithApiKey_GetsApiKey(): void
    {
        $credentials = new Credentials('testApiKey');
        self::assertEquals('testApiKey', $credentials->getApiKey());
    }
}
