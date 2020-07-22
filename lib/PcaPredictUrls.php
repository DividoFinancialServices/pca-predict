<?php

namespace Divido\PCAPredict;

/**
 * Class PcaPredictUrls
 *
 * @author Neil McGibbon <neil.mcgibbon@divido.com>
 * @copyright (c) 2017, Divido
 * @package DividoFinancialServices\PCAPredict
 */
class PcaPredictUrls
{
    const EMAIL_VALIDATION = 'http://services.postcodeanywhere.co.uk/EmailValidation/Interactive/Validate/v2.00/json.ws';
    const ADDRESS_FINDER = 'http://services.postcodeanywhere.co.uk/Capture/Interactive/Find/v1.00/json3ex.ws';
    const ADDRESS_RETRIEVER = 'https://services.postcodeanywhere.co.uk/Capture/Interactive/Retrieve/v1.00/json3ex.ws';
    const PHONE_VALIDATION = 'http://services.postcodeanywhere.co.uk/PhoneNumberValidation/Interactive/Validate/v2.10/json.ws';
    const BANK_ACCOUNT_VALIDATION = 'http://services.postcodeanywhere.co.uk/BankAccountValidation/Interactive/Validate/v2.00/json.ws';
}