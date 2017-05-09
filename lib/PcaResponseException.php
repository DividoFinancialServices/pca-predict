<?php

namespace DividoFinancialServices\PCAPredict;

/**
 * Class PcaResponseException
 *
 * Calls the PCA Predict API's may result in an error - this class encapsulates all of these possible errors.
 *
 * @author Neil McGibbon <neil.mcgibbon@divido.com>
 * @copyright (c) 2017, Divido
 * @package DividoFinancialServices\PCAPredict
 */
class PcaResponseException extends \Exception
{
    public function __construct($code, $message)
    {
        parent::__construct($message, $code);
    }

}


