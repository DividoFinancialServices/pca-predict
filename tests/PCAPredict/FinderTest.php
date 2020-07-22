<?php

namespace Divido\Tests\PCAPredict;

use Divido\PCAPredict\Credentials;
use Divido\PCAPredict\Finder;
use Divido\PCAPredict\FinderArgs;
use Divido\PCAPredict\FinderResult;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

class FinderTest extends TestCase
{
    public function testFindResults_ReturnsResults(): void
    {
        $credentials = new Credentials('testApiKey');
        $finder = new Finder($credentials);

        $args = new FinderArgs();
        $args->setText('Interchange Stables Market');

        // Mock network Client
        $guzzleMock = $this->createMock(Client::class);

        // Mock network response
        $response = new Response(200, [], '{"Items":[{"Id":"GB|RM|A|54205818","Type":"Address","Text":"Interchange, The Stables Market Chalk Farm Road","Highlight":"0-11","Description":"London, NW1 8AH"}]}');

        $guzzleMock->method('send')
            ->willReturn($response);

        $finder->getNetworkClient()->setClient($guzzleMock);

        $res = $finder->find($args);
        self::assertCount(1, $res);
        self::assertInstanceOf(FinderResult::class, $res[0]);
        self::assertEquals('Interchange, The Stables Market Chalk Farm Road', $res[0]->getText());
        self::assertEquals('GB|RM|A|54205818', $res[0]->getId());
        self::assertEquals('Address', $res[0]->getType());
        self::assertEquals('0-11', $res[0]->getHighlight());
        self::assertEquals('London, NW1 8AH', $res[0]->getDescription());
    }

    public function testFindResults_ReturnsMultipleResults(): void
    {
        $credentials = new Credentials('testApiKey');
        $finder = new Finder($credentials);

        $args = new FinderArgs();
        $args->setText('Interchange Stables Market');

        // Mock network Client
        $guzzleMock = $this->createMock(Client::class);

        // Mock network response
        $response = new Response(200, [], '{"Items":[{"Id":"GB|RM|A|54205818","Type":"Address","Text":"Interchange, The Stables Market Chalk Farm Road","Highlight":"0-11","Description":"London, NW1 8AH"},{"Id":"GB|RM|A|54205818","Type":"Address","Text":"Interchange, The Stables Market Chalk Farm Road","Highlight":"0-11","Description":"London, NW1 8AH"}]}');

        $guzzleMock->method('send')
            ->willReturn($response);

        $finder->getNetworkClient()->setClient($guzzleMock);

        $res = $finder->find($args);
        self::assertCount(2, $res);
    }

    public function testFindResults_FiltersResults(): void
    {
        $credentials = new Credentials('testApiKey');
        $finder = new Finder($credentials);

        $args = new FinderArgs();
        $args->setText('Interchange Stables Market');
        $args->setTypeFilter([FinderArgs::FILTER_TYPE_ADDRESS]);

        // Mock network Client
        $guzzleMock = $this->createMock(Client::class);

        // Mock network response
        $response = new Response(200, [], '{"Items":[{"Id":"GB|RM|A|54205818","Type":"Address","Text":"Interchange, The Stables Market Chalk Farm Road","Highlight":"0-11","Description":"London, NW1 8AH"},{"Id":"GB|RM|A|54205818","Type":"Street","Text":"Interchange, The Stables Market Chalk Farm Road","Highlight":"0-11","Description":"London, NW1 8AH"}]}');

        $guzzleMock->method('send')
            ->willReturn($response);

        $finder->getNetworkClient()->setClient($guzzleMock);

        $res = $finder->find($args);
        self::assertCount(1, $res);
    }
}
