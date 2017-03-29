# PCA Predict

A library for interfacing with the PCA Predict API (Find & Retrieve):

 - Find: http://www.pcapredict.com/support/webservice/capture/interactive/find/1/
 - Retrieve: http://www.pcapredict.com/support/webservice/capture/interactive/retrieve/1/
 
 
### Usage:

#### Finder

The `Finder` API takes a fuzzy text string and matches it to one or more addresses.  By default the application will return up to eight matches, but this can be changed by using the FindArgs::setLimit() method.


```php
<?php

require_once('vendor/autoload.php');

// Uses...
use \DividoFinancialServices\PCAPredict\Credentials,
    \DividoFinancialServices\PCAPredict\Finder,
    \DividoFinancialServices\PCAPredict\FinderArgs;

// Create a credentials object (for use with both API's)
$credentials = new Credentials('Your-API-Key-Here');

// Create a Finder
$finder = new Finder($credentials);

// Create finder argumennts (search/query)
$args = new FinderArgs();
$args->setText('Interchange, Stables Market');

// Optionally filter for addresses only (exluding Locality or other result types)
$args->addTypeFilter(FindArgs::FILTER_TYPE_ADDRESS);

// Filtering can take multiple filters at once
// $args->setTypeFilter([
//  FindArgs::FILTER_TYPE_ADDRESS,
//  FindArgs::FILTER_TYPE_LOCALITY,
// ]);

// Search for address
$results = $finder->find($args);

// Dump result
print_r($results);
```

```bash
# output 
Array
(
    [0] => DividoFinancialServices\PCAPredict\FinderResult Object
        (
            [id:protected] => GB|RM|A|54205818
            [type:protected] => Address
            [text:protected] => Interchange, The Stables Market Chalk Farm Road
            [highlight:protected] => 0-11
            [description:protected] => London, NW1 8AH
        )

)

```

#### Retriever

The `Retriever` API takes a PCA Predict address ID (as returned from a `Finder` call) and returns much more detailed information about the address.


```php
<?php

require_once('vendor/autoload.php');

// Uses...
use \DividoFinancialServices\PCAPredict\Credentials,
    \DividoFinancialServices\PCAPredict\Retriever;

// Create a credentials object (for use with both API's)
$credentials = new Credentials('Your-API-Key-Here');

// Create a Retriever
$retriever = new Retriever($credentials);

// Search for address
$results = $retriever->retrieve('GB|RM|A|54205818');

// Dump result
print_r($results);
```

```bash
# output 
DividoFinancialServices\PCAPredict\RetrieveResult Object
(
    [id:protected] => GB|RM|A|54205818
    [domesticId:protected] => 54205818
    [language:protected] => ENG
    [languageAlternatives:protected] => ENG
    [department:protected] =>
    [company:protected] => Interchange
    [subBuilding:protected] =>
    [buildingNumber:protected] =>
    [buildingName:protected] =>
    [secondaryStreet:protected] => The Stables Market
    [street:protected] => Chalk Farm Road
    [block:protected] =>
    [neighbourhood:protected] =>
    [district:protected] =>
    [city:protected] => London
    [line1:protected] => The Stables Market
    [line2:protected] => Chalk Farm Road
    [line3:protected] =>
    [line4:protected] =>
    [line5:protected] =>
    [adminAreaName:protected] => Camden
    [adminAreaCode:protected] =>
    [province:protected] =>
    [provinceName:protected] =>
    [provinceCode:protected] =>
    [postalCode:protected] => NW1 8AH
    [countryName:protected] => United Kingdom
    [countryIso2:protected] => GB
    [countryIso3:protected] => GBR
    [countryIsoNumber:protected] => 826
    [sortingNumber1:protected] => 77214
    [sortingNumber2:protected] =>
    [barcode:protected] => (NW18AH5PW)
    [poBoxNumber:protected] =>
    [label:protected] => Interchange
The Stables Market
Chalk Farm Road
LONDON
NW1 8AH
UNITED KINGDOM
    [type:protected] => Commercial
    [dataLevel:protected] => Premise
)
```

### Tests

```bash

# Example 

$ vendor/bin/phpunit

PHPUnit 5.7.17 by Sebastian Bergmann and contributors.

....                                                                4 / 4 (100%)

Time: 86 ms, Memory: 4.00MB

OK (4 tests, 47 assertions)
```

