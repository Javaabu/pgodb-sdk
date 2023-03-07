# The Criminal Justice Sector DataShare SDK

[![Tests](https://img.shields.io/github/actions/workflow/status/javaabu-pvt-ltd/criminal-justice-sector-db-sdk/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/javaabu-pvt-ltd/criminal-justice-sector-db-sdk/actions/workflows/run-tests.yml)

The Criminal Justice Sector DataShare SDKis a wrapper package that allows developers to integrate their existing data
infrastructure with the data-sharing platform developed by the Prosecutor General's Office.

## Installation
Coming soon.
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
```php
$pgoDb->criminalCase()->find($idString);
```
This is a wrapper for the `filter` functionality built into this package. An alternate way of doing this is as follows:
```php
$pgoDb->criminalCase()->addFilter("search", $idString)->get();
```

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

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Ibrahim Hussain Shareef](https://github.com/ihshareef)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
