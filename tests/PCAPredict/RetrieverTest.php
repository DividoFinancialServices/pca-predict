<?php

namespace DividoFinancialServices\PCAPredict;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;

class RetrieverTest extends \PHPUnit_Framework_TestCase
{
    public function testRetrieveResults_ReturnsResults()
    {
        $credentials = new Credentials('testApiKey');
        $retriever = new Retriever($credentials);

        // Mock network Client
        $guzzleMock = $this->createMock(Client::class);

        // Mock network response
        $response = new Response(200, [], '{"Items":[{"Id":"GB|RM|A|54205818","DomesticId":"54205818","Language":"ENG","LanguageAlternatives":"ENG","Department":"","Company":"Interchange","SubBuilding":"","BuildingNumber":"","BuildingName":"","SecondaryStreet":"The Stables Market","Street":"Chalk Farm Road","Block":"","Neighbourhood":"","District":"","City":"London","Line1":"The Stables Market","Line2":"Chalk Farm Road","Line3":"","Line4":"","Line5":"","AdminAreaName":"Camden","AdminAreaCode":"","Province":"","ProvinceName":"","ProvinceCode":"","PostalCode":"NW1 8AH","CountryName":"United Kingdom","CountryIso2":"GB","CountryIso3":"GBR","CountryIsoNumber":826,"SortingNumber1":"77214","SortingNumber2":"","Barcode":"(NW18AH5PW)","POBoxNumber":"","Label":"Interchange\nThe Stables Market\nChalk Farm Road\nLONDON\nNW1 8AH\nUNITED KINGDOM","Type":"Commercial","DataLevel":"Premise","Field1":"","Field2":"","Field3":"","Field4":"","Field5":"","Field6":"","Field7":"","Field8":"","Field9":"","Field10":"","Field11":"","Field12":"","Field13":"","Field14":"","Field15":"","Field16":"","Field17":"","Field18":"","Field19":"","Field20":""}]}');

        $guzzleMock->method('send')
            ->willReturn($response);

        $retriever->getNetworkClient()->setClient($guzzleMock);

        $res = $retriever->retrieve('GB|RM|A|54205818');
        self::assertInstanceOf(RetrieveResult::class, $res);
        self::assertEquals('54205818', $res->getDomesticId());
        self::assertEquals('GB|RM|A|54205818', $res->getId());
        self::assertEquals('ENG', $res->getLanguage());
        self::assertEquals('ENG', $res->getLanguageAlternatives());
        self::assertEquals('', $res->getDepartment());
        self::assertEquals('Interchange', $res->getCompany());
        self::assertEquals('', $res->getSubBuilding());
        self::assertEquals('', $res->getBuildingNumber());
        self::assertEquals('', $res->getBuildingName());
        self::assertEquals('The Stables Market', $res->getSecondaryStreet());
        self::assertEquals('Chalk Farm Road', $res->getStreet());
        self::assertEquals('', $res->getBlock());
        self::assertEquals('', $res->getNeighbourhood());
        self::assertEquals('', $res->getDistrict());
        self::assertEquals('London', $res->getCity());
        self::assertEquals('The Stables Market', $res->getLine1());
        self::assertEquals('Chalk Farm Road', $res->getLine2());
        self::assertEquals('', $res->getLine3());
        self::assertEquals('', $res->getLine4());
        self::assertEquals('', $res->getLine5());
        self::assertEquals('Camden', $res->getAdminAreaName());
        self::assertEquals('', $res->getAdminAreaCode());
        self::assertEquals('', $res->getProvince());
        self::assertEquals('', $res->getProvinceName());
        self::assertEquals('', $res->getProvinceCode());
        self::assertEquals('NW1 8AH', $res->getPostalCode());
        self::assertEquals('United Kingdom', $res->getCountryName());
        self::assertEquals('GB', $res->getCountryIso2());
        self::assertEquals('GBR', $res->getCountryIso3());
        self::assertEquals('826', $res->getCountryIsoNumber());
        self::assertEquals('77214', $res->getSortingNumber1());
        self::assertEquals('', $res->getSortingNumber2());
        self::assertEquals('(NW18AH5PW)', $res->getBarcode());
        self::assertEquals('', $res->getPoBoxNumber());
        self::assertEquals('Interchange
The Stables Market
Chalk Farm Road
LONDON
NW1 8AH
UNITED KINGDOM', $res->getLabel());
        self::assertEquals('Commercial', $res->getType());
        self::assertEquals('Premise', $res->getDataLevel());



    }


    
}