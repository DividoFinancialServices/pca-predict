# PCA Predict

A library for interfacing with the PCA Predict API (Find & Retrieve):

 - Find: http://www.pcapredict.com/support/webservice/capture/interactive/find/1/
 - Retrieve: http://www.pcapredict.com/support/webservice/capture/interactive/retrieve/1/
 
 
### Usage:

#### Credentials

Wrap your API key into Credentials class which can then be used in multiple PCA Predict API's.  

The `Credentials` class takes on parameter, which is your API Key.

```php
use \DividoFinancialServices\PCAPredict\Credentials;

$credentials = new Credentials('YOUR-API-KEY');
```


#### Finder

The `Finder` API takes a fuzzy text string and matches it to one or more geographic types. 

To use the `Finder` API, first set up some `FinderArgs`.

##### Finder Arguments.

The `FinderArgs` class encapsulates the parameters used for searching the Finder API.

```php
use \DividoFinancialServices\PCAPredict\FinderArgs();
$finderArgs = new FinderArgs();
```
 - Text (search query)
        
    - Sets the string to search for.
    - **Required**

    ```php
    $finderArgs->setText("Interchange, Stables Market));
    ```
 
 - Limit results
 
    - Sets the amount of results to return. 
    - Default is 8.
    - *Optional*

    ```php
    $finderArgs->setLimit(2));
    ```

 - Country filtering
  
    - Limits the results to certain countries. 
    - Can be empty (to allow any country in results)
    - Can be an array of 2-Letter country codes (e.g. GB)
    - *Optional*
        
    ```php
    $finderArgs->setCountries([
        'GB',
    ]);
    ```

- Result type filtering
  
    - Limits the results to certain result types
    - Can be empty (to allow all result types)
    - Can be an array of result types:
        - Address
        - Locality
        - BuildingName
        - Street
    - **NB** Only `Address` results types can be fed into the `Retriever` API for more detailed information.
    - *Optional*
        
    ```php
    $finderArgs->setTypeFilter([
        FinderArgs::FILTER_TYPE_ADDRESS,
        FinderArgs::FILTER_TYPE_LOCALITY,
    ]);
    
    // or indivudually

    $finderArgs->addTypeFilter(FinderArgs::FILTER_TYPE_ADDRESS);
    $finderArgs->addTypeFilter(FinderArgs::FILTER_TYPE_LOCALITY);
    ```

Using the Finder API with the Finder Arguments object:

```php
// Create a credentials object (for use with both API's)
$credentials = new Credentials('Your-API-Key-Here');

// Create a Finder
$finder = new Finder($credentials);

// Create finder argumennts (search/query)
$args = new FinderArgs();
$args->setText('Interchange, Stables Market')
  ->setLimit(1)
  ->setCountries(['GB',])
  ->setTypeFilter([FinderArgs::FILTER_TYPE_ADDRESS,])

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

The `Retriever` API takes a PCA Predict Address ID (as returned from a `Finder` call) and returns much more detailed information about the address.

```php
<?php

// Create a credentials object (for use with both API's)
$credentials = new Credentials('Your-API-Key-Here');

// Create a Retriever
$retriever = new Retriever($credentials);

// Search for address
$results = $retriever->retrieve('GB|RM|A|54205818'); // This ID MUST be of type 'Address'. Other types will not work.

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

