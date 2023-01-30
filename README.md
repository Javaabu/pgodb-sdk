# The Criminal Justice Sector DataShare SDK 


[![Tests](https://img.shields.io/github/actions/workflow/status/javaabu-pvt-ltd/criminal-justice-sector-db-sdk/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/javaabu-pvt-ltd/criminal-justice-sector-db-sdk/actions/workflows/run-tests.yml)

The Criminal Justice Sector DataShare SDKis a wrapper package that allows developers to integrate their existing data infrastructure with the data-sharing platform developed by the Prosecutor General's Office.

## Basic Usage

### Instantiation
````
$base_uri = config('pgodb.base_uri'); 
$token = config('personal_access_token'); 

$db = new CriminalJusticeSectorDataShareClass($base_uri, $token);
````
### Store 
````
$sample_model = [
  "incident_reference_number" => "5154252024",
  "institution_reg_no" => "pgo",
  "incident_at" => "1996-12-30T09:11:26.000000Z",
   "lodged_at" => "1998-03-13T19:00:00.000000Z"
];

$db->criminalCase()->store($sample_model);
````

### Update 
````
$update_model = [
    "institution_reg_no" => "javaabu"
];

$identifier = "43829043";

$db->criminalCase()->updateById($identifier, $update_model);
````
### Delete 
````
$identifier = "43829043";
$db->criminalCase()->deleteById($identifier);
````

### Retrieving All Models
````
$db->criminalCase()->index();
````
### Sorting
````
$query = $db->criminalCase()->queryBuilder();

$query->addSortByAscending("incident_at");
$query->addSortByDescending("lodged_at");

$db->criminalCase()->index($query);
````
### Retrieve Model by Identifier
This method is a wrapper function for logic that makes use of the simple query builder.
````
$identifier = "43829043";
$db->criminalCase()->selectById($identifier);
````
### Retrieve Specific Page from Paginated View
This method is a wrapper function for logic that makes use of the simple query builder. 
````
$page_index = 2;
$db->criminalCase()->indexPage($page_index);
````

### Filter or Search by Custom Key
`````
$query = $db->criminalCase()->queryBuilder();

$query->addFilter("pg_reference_number","823490");
$db->criminalCase()->index($query);
`````

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
