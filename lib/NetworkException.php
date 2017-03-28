<?php

namespace DividoFinancialServices\PCAPredict;

use Exception;

/**
 * Class NetworkException
 *
 * @author Neil McGibbon <neil.mcgibbon@divido.com>
 * @copyright (c) 2017, Divido
 * @package DividoFinancialServices\PCAPredict
 */
class NetworkException extends \Exception
{
    public function __construct(Exception $previous)
    {
        parent::__construct('PCA Predict network exception.', '1000', $previous);
    }
}