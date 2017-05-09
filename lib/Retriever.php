<?php

namespace DividoFinancialServices\PCAPredict;

/**
 * Class Retriever
 *
 * @author Neil McGibbon <neil.mcgibbon@divido.com>
 * @copyright (c) 2017, Divido
 * @package DividoFinancialServices\PCAPredict
 */
class Retriever
{

    /**
     * PCA Predict API credential(s)
     *
     * @var Credentials
     */
    private $credentials;

    /**
     * @var NetworkClient
     */
    private $networkClient;


    /**
     * Retriever constructor.
     *
     * @param Credentials $credentials The credential(s) used to authenticate with the PCA Predict API
     */
    public function __construct(Credentials $credentials)
    {
        $this->credentials = $credentials;
        $this->networkClient = new NetworkClient();
    }

    /**
     * @return NetworkClient
     */
    public function getNetworkClient()
    {
        return $this->networkClient;
    }

    /**
     * Query PCA Predict API to look for address details
     *
     * @param string $id
     * @return RetrieveResult
     * @throws NetworkException
     */
    public function retrieve(string $id)
    {

        $response = $this->networkClient->request(
            PcaPredictUrls::ADDRESS_RETRIEVER,
            $this->credentials,
            ['Id' => $id, ],
            'get', [], null
        );

        if ($response->getState() !== NetworkResponse::STATE_SUCCESS) {
            throw new NetworkException($response->getException());
        }

        $json = json_decode($response->getBody());

        $result = new RetrieveResult();
        $result->setId($json->Items[0]->Id)
            ->setDomesticId($json->Items[0]->DomesticId)
            ->setLanguage($json->Items[0]->Language)
            ->setLanguageAlternatives($json->Items[0]->LanguageAlternatives)
            ->setDepartment($json->Items[0]->Department)
            ->setCompany($json->Items[0]->Company)
            ->setSubBuilding($json->Items[0]->SubBuilding)
            ->setBuildingNumber($json->Items[0]->BuildingNumber)
            ->setBuildingName($json->Items[0]->BuildingName)
            ->setSecondaryStreet($json->Items[0]->SecondaryStreet)
            ->setStreet($json->Items[0]->Street)
            ->setBlock($json->Items[0]->Block)
            ->setNeighbourhood($json->Items[0]->Neighbourhood)
            ->setDistrict($json->Items[0]->District)
            ->setCity($json->Items[0]->City)
            ->setLine1($json->Items[0]->Line1)
            ->setLine2($json->Items[0]->Line2)
            ->setLine3($json->Items[0]->Line3)
            ->setLine4($json->Items[0]->Line4)
            ->setLine5($json->Items[0]->Line5)
            ->setAdminAreaName($json->Items[0]->AdminAreaName)
            ->setAdminAreaCode($json->Items[0]->AdminAreaCode)
            ->setProvince($json->Items[0]->Province)
            ->setProvinceName($json->Items[0]->ProvinceName)
            ->setProvinceCode($json->Items[0]->ProvinceCode)
            ->setPostalCode($json->Items[0]->PostalCode)
            ->setCountryName($json->Items[0]->CountryName)
            ->setCountryIso2($json->Items[0]->CountryIso2)
            ->setCountryIso3($json->Items[0]->CountryIso3)
            ->setCountryIsoNumber($json->Items[0]->CountryIsoNumber)
            ->setSortingNumber1($json->Items[0]->SortingNumber1)
            ->setSortingNumber2($json->Items[0]->SortingNumber2)
            ->setBarcode($json->Items[0]->Barcode)
            ->setPoBoxNumber($json->Items[0]->POBoxNumber)
            ->setLabel($json->Items[0]->Label)
            ->setType($json->Items[0]->Type)
            ->setDataLevel($json->Items[0]->DataLevel);

        return $result;

    }


}


