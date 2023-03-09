# The Criminal Justice Sector DataShare SDK

[![Latest Version on Packagist](https://img.shields.io/packagist/v/javaabu/pgodb-sdk.svg?style=flat-square)](https://packagist.org/packages/javaabu/pgodb-sdk)

General PHP SDK to interact with the API of the Prosecutor General's Office's criminal justice sector database.

## Installation
Use Composer to install the package
```bigquery
composer require javaabu/pgodb-sdk
```

### Pre-Requisites
- PHP 7.4 
## Basic Usage
### Initialisation

The API key is taken as a single, mandatory parameter.  

```php
$apiKey = "iK4YfZe2i1RAe22tKP4xejGKDZP ....";
$baseUri = "http://pgodb.test/api/v1/"
$pgoDb = new PgoDB($apiKey, $baseUri);
```

*Note*
- Check the SOP to understand how to get an API token (you may use either a personal access token or a password token). Use this as the `API_TOKEN`. 
- Use the `host` parameter, defined in the API documentation, as the `BASE_URI`.

### Retrieve all Models
```php
$pgoDb->criminalCase()->get();
```
### Retrieve by Id
We do not use database ids, but rather administrative identification strings such as an individual's
national identity card number, passport number, registration number (for judges and lawyers), incident reference numbers, gaziyyah numbers and the like.

```php
$pgoDb->criminalCase()->find($idString);
```
This is a wrapper for the `filter` functionality built into this package. 
An alternate way of doing this is as follows:
```php
$pgoDb->criminalCase()->addFilter("search", $idString)->get();
```
The search term would change depending on the model being retrieved. The `find` function
abstracts this complexity away for the user.

### Store Non-Nested Model

```php
// Sample data  
$data = [
    "incident_reference_number": "2123756022",
    "institution_reg_no": "pgo",
    "incident_at": "1996-12-30T09:11:26.000000Z",
    "lodged_at": "1998-03-13T19:00:00.000000Z"
];

$pgoDb->criminalCase()->store($data);
```

### Store Nested Model

```php
// Sample data  
$data = [
    "individual": [
        "nid": "A169993",
        "name": "Dr. Larissa Stokes",
        "name_en": "Mr. Benedict Lockman I",
        "gender": "female",
        "mobile_number": "860.660.2765",
        "nationality_code": "MV",
        "permanent_address_country_code": "MV",
        "permanent_address_city_code": "LD0894",
        "permanent_address": "67353 Rebeka Road\nEast Opal, PA 94709",
        "individual_type": "local",
        "dob": "1995-07-14T19:00:00.000000Z",
        "email": "pemmerich@example.net"
    ]
];

$pgoDb->criminalCase()
      ->whereId("7/2022")
      ->complainant()
      ->store($data);
```

### Update Non-Nested Model

```php
// Sample data  
$data = [
    "institution_reg_no": "javaabu",
];

$pgoDb->criminalCase()
      ->whereId("2123756022")
      ->update($data);
```

### Update Nested Model

```php
// Sample data  
$data = [
    "individual": [
        "permanent_address_country_code": "MV",
    ]
];

$pgoDb->criminalCase()
      ->whereId("7/2022")
      ->complainant()
      ->whereId("A169993")
      ->update($data);
```

### Sorting 
```php
$pgoDb->criminalCase()
      ->addSort("created_at")
      ->addSortByDesc("updated_at")
      ->get()
````

## Ending Functions
The ending functions of each of these chained functions are defined as follows. 
The actual API request will be sent once these ending functions are called at the end of the chain.

-   `get()` Should return a list of items, 
-   `find($id)` Should return a single item,
-   `delete($id)` Sends a delete request and returns true or false,
-   `store($data)` Returns the newly stored record,
-   `update($data)` Returns the updated record.


## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Security Vulnerabilities

If you discover any security related issues, please email [info@javaabu.com](mailto:info@javaabu.com) instead of using the issue tracker.
## Credits

- [Ibrahim Hussain Shareef](https://github.com/ihshareef)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
