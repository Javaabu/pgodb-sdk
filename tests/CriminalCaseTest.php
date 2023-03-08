<?php

it('retrieves an array from (GET) `/criminal-cases/`', function () {
    $db = new \Javaabu\PgoDB\PgoDB('eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiZjM1NjI3NmUwOTNiOWY5NTA1NzY0ZTlmZWE4YWZhYzU5YzRlNjFiMDNiNTUyMjA4OWViZjM5MTk5MTJmMTNlMmY3Y2Q0N2Q0YTgzZjVhY2IiLCJpYXQiOjE2NzgyNTMyNzUuNzEzNzkzLCJuYmYiOjE2NzgyNTMyNzUuNzEzNzk2LCJleHAiOjE3MDk4NzU2NzUuNjc0MzU0LCJzdWIiOiIxIiwic2NvcGVzIjpbInJlYWQiXX0.lWnlLdRxzax6BQXkPT475GU356-P-Q4y6i95hcYlBsC5gBUQWSdQKIKl4XQUNbxfGeYg_DGyfG_0UUVOgNZBmmRcun4nOKIxT4ZR4NtQ8oHbLqV0D6dIn3DcMDTSgak5gmpTCU7sJVmfso2Jr77Rhc1WMI8X4p-TjN7N433_y15cVuVgvS5U0WxhPDBmp7M8clXFSdLNcHJ8uZKVHr2WWeuLDJZ2951JwPGYduRu0YaRK58-2qEtcVXOZaITZo_B0nfeEseXt9vzWLQf1LXylV74arrHtLIsTvyGbnbZHFgJ3g-IBgGAsj4-ckomHSbcnHgxisPuYeuri03i-yQ-q0JhjSXkZU0YkTddV4LcvxU2bTKJOzxag-9hGN1UvyhNJsdsJXIvTE6GLLX7zu2MT8lD6IDHahw04leBUdlCQpytcN823JWnXXQ0HL1XZsIlVvyRAQxtXRCgupoIR-sQeNz--qN-x_OLx2ulgAbDcZFICt-8poKkWxJNIsjGY2ud5y5svkrylPW0YBTepjaO7NNguFdW0CKEQ93kNpBcu03ZJGKzF3w5uxV8gb2JrnTmGEBZZbUlIf7a1ZBWTxXrlFvJnRG_kQAfXcFSag0GDfad_lyZJIOEdhmAsHD_XR1b_NvOBSbECbP6WkY1pny5ZH6u5G9RVXQ2rsi6MxZppTo');
    $res = $db->criminalCase()->get();
    expect($res)->toBeArray();
});

it('can retrieve an existing model from the database', function () {
    $db = new \Javaabu\PgoDB\PgoDB('eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiZjM1NjI3NmUwOTNiOWY5NTA1NzY0ZTlmZWE4YWZhYzU5YzRlNjFiMDNiNTUyMjA4OWViZjM5MTk5MTJmMTNlMmY3Y2Q0N2Q0YTgzZjVhY2IiLCJpYXQiOjE2NzgyNTMyNzUuNzEzNzkzLCJuYmYiOjE2NzgyNTMyNzUuNzEzNzk2LCJleHAiOjE3MDk4NzU2NzUuNjc0MzU0LCJzdWIiOiIxIiwic2NvcGVzIjpbInJlYWQiXX0.lWnlLdRxzax6BQXkPT475GU356-P-Q4y6i95hcYlBsC5gBUQWSdQKIKl4XQUNbxfGeYg_DGyfG_0UUVOgNZBmmRcun4nOKIxT4ZR4NtQ8oHbLqV0D6dIn3DcMDTSgak5gmpTCU7sJVmfso2Jr77Rhc1WMI8X4p-TjN7N433_y15cVuVgvS5U0WxhPDBmp7M8clXFSdLNcHJ8uZKVHr2WWeuLDJZ2951JwPGYduRu0YaRK58-2qEtcVXOZaITZo_B0nfeEseXt9vzWLQf1LXylV74arrHtLIsTvyGbnbZHFgJ3g-IBgGAsj4-ckomHSbcnHgxisPuYeuri03i-yQ-q0JhjSXkZU0YkTddV4LcvxU2bTKJOzxag-9hGN1UvyhNJsdsJXIvTE6GLLX7zu2MT8lD6IDHahw04leBUdlCQpytcN823JWnXXQ0HL1XZsIlVvyRAQxtXRCgupoIR-sQeNz--qN-x_OLx2ulgAbDcZFICt-8poKkWxJNIsjGY2ud5y5svkrylPW0YBTepjaO7NNguFdW0CKEQ93kNpBcu03ZJGKzF3w5uxV8gb2JrnTmGEBZZbUlIf7a1ZBWTxXrlFvJnRG_kQAfXcFSag0GDfad_lyZJIOEdhmAsHD_XR1b_NvOBSbECbP6WkY1pny5ZH6u5G9RVXQ2rsi6MxZppTo');
    $res = $db->criminalCase()->find('37a6/3f22022a');
    expect($res)->toBeArray();
});

it('can update an existing model identified by its id', function () {
    $db = new \Javaabu\PgoDB\PgoDB('eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiZjM1NjI3NmUwOTNiOWY5NTA1NzY0ZTlmZWE4YWZhYzU5YzRlNjFiMDNiNTUyMjA4OWViZjM5MTk5MTJmMTNlMmY3Y2Q0N2Q0YTgzZjVhY2IiLCJpYXQiOjE2NzgyNTMyNzUuNzEzNzkzLCJuYmYiOjE2NzgyNTMyNzUuNzEzNzk2LCJleHAiOjE3MDk4NzU2NzUuNjc0MzU0LCJzdWIiOiIxIiwic2NvcGVzIjpbInJlYWQiXX0.lWnlLdRxzax6BQXkPT475GU356-P-Q4y6i95hcYlBsC5gBUQWSdQKIKl4XQUNbxfGeYg_DGyfG_0UUVOgNZBmmRcun4nOKIxT4ZR4NtQ8oHbLqV0D6dIn3DcMDTSgak5gmpTCU7sJVmfso2Jr77Rhc1WMI8X4p-TjN7N433_y15cVuVgvS5U0WxhPDBmp7M8clXFSdLNcHJ8uZKVHr2WWeuLDJZ2951JwPGYduRu0YaRK58-2qEtcVXOZaITZo_B0nfeEseXt9vzWLQf1LXylV74arrHtLIsTvyGbnbZHFgJ3g-IBgGAsj4-ckomHSbcnHgxisPuYeuri03i-yQ-q0JhjSXkZU0YkTddV4LcvxU2bTKJOzxag-9hGN1UvyhNJsdsJXIvTE6GLLX7zu2MT8lD6IDHahw04leBUdlCQpytcN823JWnXXQ0HL1XZsIlVvyRAQxtXRCgupoIR-sQeNz--qN-x_OLx2ulgAbDcZFICt-8poKkWxJNIsjGY2ud5y5svkrylPW0YBTepjaO7NNguFdW0CKEQ93kNpBcu03ZJGKzF3w5uxV8gb2JrnTmGEBZZbUlIf7a1ZBWTxXrlFvJnRG_kQAfXcFSag0GDfad_lyZJIOEdhmAsHD_XR1b_NvOBSbECbP6WkY1pny5ZH6u5G9RVXQ2rsi6MxZppTo');
    $db->criminalCase()->whereId('37a6/3f22022a')->update([
        'institution_reg_no' => 'JAVAABU',
    ]);
    $res = $db->criminalCase()->find('37a6/3f22022a');
    $this->assertEquals('javaabu', $res['institution']['slug']);
});

it('can create a nested complainant in an existing criminal case model', function () {
    $db = new \Javaabu\PgoDB\PgoDB('eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiZjM1NjI3NmUwOTNiOWY5NTA1NzY0ZTlmZWE4YWZhYzU5YzRlNjFiMDNiNTUyMjA4OWViZjM5MTk5MTJmMTNlMmY3Y2Q0N2Q0YTgzZjVhY2IiLCJpYXQiOjE2NzgyNTMyNzUuNzEzNzkzLCJuYmYiOjE2NzgyNTMyNzUuNzEzNzk2LCJleHAiOjE3MDk4NzU2NzUuNjc0MzU0LCJzdWIiOiIxIiwic2NvcGVzIjpbInJlYWQiXX0.lWnlLdRxzax6BQXkPT475GU356-P-Q4y6i95hcYlBsC5gBUQWSdQKIKl4XQUNbxfGeYg_DGyfG_0UUVOgNZBmmRcun4nOKIxT4ZR4NtQ8oHbLqV0D6dIn3DcMDTSgak5gmpTCU7sJVmfso2Jr77Rhc1WMI8X4p-TjN7N433_y15cVuVgvS5U0WxhPDBmp7M8clXFSdLNcHJ8uZKVHr2WWeuLDJZ2951JwPGYduRu0YaRK58-2qEtcVXOZaITZo_B0nfeEseXt9vzWLQf1LXylV74arrHtLIsTvyGbnbZHFgJ3g-IBgGAsj4-ckomHSbcnHgxisPuYeuri03i-yQ-q0JhjSXkZU0YkTddV4LcvxU2bTKJOzxag-9hGN1UvyhNJsdsJXIvTE6GLLX7zu2MT8lD6IDHahw04leBUdlCQpytcN823JWnXXQ0HL1XZsIlVvyRAQxtXRCgupoIR-sQeNz--qN-x_OLx2ulgAbDcZFICt-8poKkWxJNIsjGY2ud5y5svkrylPW0YBTepjaO7NNguFdW0CKEQ93kNpBcu03ZJGKzF3w5uxV8gb2JrnTmGEBZZbUlIf7a1ZBWTxXrlFvJnRG_kQAfXcFSag0GDfad_lyZJIOEdhmAsHD_XR1b_NvOBSbECbP6WkY1pny5ZH6u5G9RVXQ2rsi6MxZppTo');
    $db->criminalCase()->whereId('37a6/3f22022a')->complainant()->store(
        [
            'individual' => [
                'nid' => 'A161929',
                'name' => 'Dr. Larissa Stokes',
                'name_en' => 'Mr. Benedict Lockman I',
                'gender' => 'female',
                'mobile_number' => '860.660.2765',
                'nationality_code' => 'MV',
                'permanent_address_country_code' => 'MV',
                'permanent_address_city_code' => 'LD0894',
                'permanent_address' => "67353 Rebeka Road\nEast Opal, PA 94709",
                'individual_type' => 'local',
                'dob' => '1995-07-14T19:00:00.000000Z',
                'email' => 'pemmerich@example.net',
            ],
        ]
    );
    $res = $db->criminalCase()->whereId('37a6/3f22022a')->complainant()->find('A161929');
    expect($res)->toBeArray();
    $this->assertEquals('Dr. Larissa Stokes', $res['individual']['name']);
});

it('can delete an existing model', function () {
    $db = new \Javaabu\PgoDB\PgoDB('eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiZjM1NjI3NmUwOTNiOWY5NTA1NzY0ZTlmZWE4YWZhYzU5YzRlNjFiMDNiNTUyMjA4OWViZjM5MTk5MTJmMTNlMmY3Y2Q0N2Q0YTgzZjVhY2IiLCJpYXQiOjE2NzgyNTMyNzUuNzEzNzkzLCJuYmYiOjE2NzgyNTMyNzUuNzEzNzk2LCJleHAiOjE3MDk4NzU2NzUuNjc0MzU0LCJzdWIiOiIxIiwic2NvcGVzIjpbInJlYWQiXX0.lWnlLdRxzax6BQXkPT475GU356-P-Q4y6i95hcYlBsC5gBUQWSdQKIKl4XQUNbxfGeYg_DGyfG_0UUVOgNZBmmRcun4nOKIxT4ZR4NtQ8oHbLqV0D6dIn3DcMDTSgak5gmpTCU7sJVmfso2Jr77Rhc1WMI8X4p-TjN7N433_y15cVuVgvS5U0WxhPDBmp7M8clXFSdLNcHJ8uZKVHr2WWeuLDJZ2951JwPGYduRu0YaRK58-2qEtcVXOZaITZo_B0nfeEseXt9vzWLQf1LXylV74arrHtLIsTvyGbnbZHFgJ3g-IBgGAsj4-ckomHSbcnHgxisPuYeuri03i-yQ-q0JhjSXkZU0YkTddV4LcvxU2bTKJOzxag-9hGN1UvyhNJsdsJXIvTE6GLLX7zu2MT8lD6IDHahw04leBUdlCQpytcN823JWnXXQ0HL1XZsIlVvyRAQxtXRCgupoIR-sQeNz--qN-x_OLx2ulgAbDcZFICt-8poKkWxJNIsjGY2ud5y5svkrylPW0YBTepjaO7NNguFdW0CKEQ93kNpBcu03ZJGKzF3w5uxV8gb2JrnTmGEBZZbUlIf7a1ZBWTxXrlFvJnRG_kQAfXcFSag0GDfad_lyZJIOEdhmAsHD_XR1b_NvOBSbECbP6WkY1pny5ZH6u5G9RVXQ2rsi6MxZppTo');
    $db->criminalCase()->delete('9114252aaqa0112238');
    $res1 = $db->criminalCase()->find('9114252aaqa0112238');
    expect(empty($res1))->toBeTrue();
});

it('can create a new model', function () {
    $db = new \Javaabu\PgoDB\PgoDB('eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiZjM1NjI3NmUwOTNiOWY5NTA1NzY0ZTlmZWE4YWZhYzU5YzRlNjFiMDNiNTUyMjA4OWViZjM5MTk5MTJmMTNlMmY3Y2Q0N2Q0YTgzZjVhY2IiLCJpYXQiOjE2NzgyNTMyNzUuNzEzNzkzLCJuYmYiOjE2NzgyNTMyNzUuNzEzNzk2LCJleHAiOjE3MDk4NzU2NzUuNjc0MzU0LCJzdWIiOiIxIiwic2NvcGVzIjpbInJlYWQiXX0.lWnlLdRxzax6BQXkPT475GU356-P-Q4y6i95hcYlBsC5gBUQWSdQKIKl4XQUNbxfGeYg_DGyfG_0UUVOgNZBmmRcun4nOKIxT4ZR4NtQ8oHbLqV0D6dIn3DcMDTSgak5gmpTCU7sJVmfso2Jr77Rhc1WMI8X4p-TjN7N433_y15cVuVgvS5U0WxhPDBmp7M8clXFSdLNcHJ8uZKVHr2WWeuLDJZ2951JwPGYduRu0YaRK58-2qEtcVXOZaITZo_B0nfeEseXt9vzWLQf1LXylV74arrHtLIsTvyGbnbZHFgJ3g-IBgGAsj4-ckomHSbcnHgxisPuYeuri03i-yQ-q0JhjSXkZU0YkTddV4LcvxU2bTKJOzxag-9hGN1UvyhNJsdsJXIvTE6GLLX7zu2MT8lD6IDHahw04leBUdlCQpytcN823JWnXXQ0HL1XZsIlVvyRAQxtXRCgupoIR-sQeNz--qN-x_OLx2ulgAbDcZFICt-8poKkWxJNIsjGY2ud5y5svkrylPW0YBTepjaO7NNguFdW0CKEQ93kNpBcu03ZJGKzF3w5uxV8gb2JrnTmGEBZZbUlIf7a1ZBWTxXrlFvJnRG_kQAfXcFSag0GDfad_lyZJIOEdhmAsHD_XR1b_NvOBSbECbP6WkY1pny5ZH6u5G9RVXQ2rsi6MxZppTo');
    $res1 = $db->criminalCase()->find('9114252aaqa0112238');
    expect(empty($res1))->toBeTrue();

    $sample_model = [
        'incident_reference_number' => '9114252aaqa0112238',
        'institution_reg_no' => 'JAVAABU',
        'incident_at' => '1996-12-30T09:11:26.000000Z',
        'lodged_at' => '1998-03-13T19:00:00.000000Z',
    ];
    $stored_result = $db->criminalCase()->store($sample_model);
    $this->assertEquals('9114252aaqa0112238', $stored_result['incident_reference_number']);
//
    $res2 = $db->criminalCase()->find('9114252aaqa0112238');
    expect(empty($res2))->toBeFalse();
    $this->assertEquals('9114252aaqa0112238', $res2['formatted_name']);
});

it('can filter and sort records', function () {
    $db = new \Javaabu\PgoDB\PgoDB('eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiZjM1NjI3NmUwOTNiOWY5NTA1NzY0ZTlmZWE4YWZhYzU5YzRlNjFiMDNiNTUyMjA4OWViZjM5MTk5MTJmMTNlMmY3Y2Q0N2Q0YTgzZjVhY2IiLCJpYXQiOjE2NzgyNTMyNzUuNzEzNzkzLCJuYmYiOjE2NzgyNTMyNzUuNzEzNzk2LCJleHAiOjE3MDk4NzU2NzUuNjc0MzU0LCJzdWIiOiIxIiwic2NvcGVzIjpbInJlYWQiXX0.lWnlLdRxzax6BQXkPT475GU356-P-Q4y6i95hcYlBsC5gBUQWSdQKIKl4XQUNbxfGeYg_DGyfG_0UUVOgNZBmmRcun4nOKIxT4ZR4NtQ8oHbLqV0D6dIn3DcMDTSgak5gmpTCU7sJVmfso2Jr77Rhc1WMI8X4p-TjN7N433_y15cVuVgvS5U0WxhPDBmp7M8clXFSdLNcHJ8uZKVHr2WWeuLDJZ2951JwPGYduRu0YaRK58-2qEtcVXOZaITZo_B0nfeEseXt9vzWLQf1LXylV74arrHtLIsTvyGbnbZHFgJ3g-IBgGAsj4-ckomHSbcnHgxisPuYeuri03i-yQ-q0JhjSXkZU0YkTddV4LcvxU2bTKJOzxag-9hGN1UvyhNJsdsJXIvTE6GLLX7zu2MT8lD6IDHahw04leBUdlCQpytcN823JWnXXQ0HL1XZsIlVvyRAQxtXRCgupoIR-sQeNz--qN-x_OLx2ulgAbDcZFICt-8poKkWxJNIsjGY2ud5y5svkrylPW0YBTepjaO7NNguFdW0CKEQ93kNpBcu03ZJGKzF3w5uxV8gb2JrnTmGEBZZbUlIf7a1ZBWTxXrlFvJnRG_kQAfXcFSag0GDfad_lyZJIOEdhmAsHD_XR1b_NvOBSbECbP6WkY1pny5ZH6u5G9RVXQ2rsi6MxZppTo');

    $item1 = [
        'incident_reference_number' => '113',
        'institution_reg_no' => 'JAVAABU',
        'incident_at' => '1988-12-30T09:11:26.000000Z',
        'lodged_at' => '1998-03-13T19:00:00.000000Z',
    ];

    $item2 = [
        'incident_reference_number' => '223',
        'institution_reg_no' => 'PGO',
        'incident_at' => '1994-12-30T09:11:26.000000Z',
        'lodged_at' => '1998-03-13T19:00:00.000000Z',
    ];
//
    $db->criminalCase()->store($item1);
    $db->criminalCase()->store($item2);

    // sort records
    $defaultArray = $db->criminalCase()->addSort('incident_at')->addFilter('search', 'ABC', 'A079092')->get();
});
