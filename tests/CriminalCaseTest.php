<?php

it('retrieves an array from (GET) `/criminal-cases/`', function () {
    $db = new \Javaabu\PgoDB\PgoDB('eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMTdiN2Y5N2E0ODFjY2E2NDkwODAyZmZkNTUzYTJmNTEyZjA4OTU1ZWQwMjA3ODMxNmE1NDJiNDYwMDcwNDA3ZDM2MWM3YWI2OTg5NmVlODQiLCJpYXQiOjE2Nzc5OTY3OTAuMzg1NjMxLCJuYmYiOjE2Nzc5OTY3OTAuMzg1NjM2LCJleHAiOjE3MDk2MTkxOTAuMzIzNDc1LCJzdWIiOiIxIiwic2NvcGVzIjpbIioiXX0.Q6-7eF8Xq11QZjcAjLsLSlzNvnUy8HwEelz3BNtPyccPBkrwt-Z3oF7ICKK6XzXYVH35Wc-2v8_Y2UaIyf-U9V3NsIwl0hkKLWGwd-3nLdQ4XRbZJ_4oZp-SF2lIwT9sV-jawZMKLR5uT7OcR5SXbJitmIDUVSv5C_Dma7DrBY5WifmmjcCMNVXkUKWMxEObhFFfnHrmX3CdwskXdNZNrm2edPEby6AwT3TyyJ-xrAZyg2XJM1LD-gTohhtz7_yM-8VlrGdXEJSc78neCqEVVr79kKHBQ6LjLwra51ix8VLH_IPHoeH7mJtgpTOJpjLv77OJf9qu5SLt51cvHnX9k329w9-OJkobdowRJRMkRnAPr7SIvuvvFGBZSARwvyWOLbreseBLUlrbtOPXU21EFBpHt9jmI92xTFJgmvtZt-r_yIgUq3O2pmR_slny1ylmeMo1j0YX-_elzxDvD8X5E4Z-X86IHPgFlmiXz6gOOfKBLrSWAlCrSEZhys7xFrHWup_F9J3rRcXgVnTvF8RJRp2gDcYCnFwng0mfgcxouNnX_M2Bv00MmOrLPk7GMGUPXe-bqaRWhcArGED9VjPpqjKQVpAZyiB7uIE3-fCxBv3g9iwLJSrXVAZ_e0BJBLDt0VyUuZYpMRb9dR63ofLZf-_Y5bhXriGsILrXiLG8lIA');
    $res = $db->criminalCase()->get();
    expect($res)->toBeArray();
});

it('can retrieve an existing model from the database', function () {
    $db = new \Javaabu\PgoDB\PgoDB('eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMTdiN2Y5N2E0ODFjY2E2NDkwODAyZmZkNTUzYTJmNTEyZjA4OTU1ZWQwMjA3ODMxNmE1NDJiNDYwMDcwNDA3ZDM2MWM3YWI2OTg5NmVlODQiLCJpYXQiOjE2Nzc5OTY3OTAuMzg1NjMxLCJuYmYiOjE2Nzc5OTY3OTAuMzg1NjM2LCJleHAiOjE3MDk2MTkxOTAuMzIzNDc1LCJzdWIiOiIxIiwic2NvcGVzIjpbIioiXX0.Q6-7eF8Xq11QZjcAjLsLSlzNvnUy8HwEelz3BNtPyccPBkrwt-Z3oF7ICKK6XzXYVH35Wc-2v8_Y2UaIyf-U9V3NsIwl0hkKLWGwd-3nLdQ4XRbZJ_4oZp-SF2lIwT9sV-jawZMKLR5uT7OcR5SXbJitmIDUVSv5C_Dma7DrBY5WifmmjcCMNVXkUKWMxEObhFFfnHrmX3CdwskXdNZNrm2edPEby6AwT3TyyJ-xrAZyg2XJM1LD-gTohhtz7_yM-8VlrGdXEJSc78neCqEVVr79kKHBQ6LjLwra51ix8VLH_IPHoeH7mJtgpTOJpjLv77OJf9qu5SLt51cvHnX9k329w9-OJkobdowRJRMkRnAPr7SIvuvvFGBZSARwvyWOLbreseBLUlrbtOPXU21EFBpHt9jmI92xTFJgmvtZt-r_yIgUq3O2pmR_slny1ylmeMo1j0YX-_elzxDvD8X5E4Z-X86IHPgFlmiXz6gOOfKBLrSWAlCrSEZhys7xFrHWup_F9J3rRcXgVnTvF8RJRp2gDcYCnFwng0mfgcxouNnX_M2Bv00MmOrLPk7GMGUPXe-bqaRWhcArGED9VjPpqjKQVpAZyiB7uIE3-fCxBv3g9iwLJSrXVAZ_e0BJBLDt0VyUuZYpMRb9dR63ofLZf-_Y5bhXriGsILrXiLG8lIA');
    $res = $db->criminalCase()->find('37a6/3f22022a');
    expect($res)->toBeArray();
});

it('can update an existing model identified by its id', function () {
    $db = new \Javaabu\PgoDB\PgoDB('eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMTdiN2Y5N2E0ODFjY2E2NDkwODAyZmZkNTUzYTJmNTEyZjA4OTU1ZWQwMjA3ODMxNmE1NDJiNDYwMDcwNDA3ZDM2MWM3YWI2OTg5NmVlODQiLCJpYXQiOjE2Nzc5OTY3OTAuMzg1NjMxLCJuYmYiOjE2Nzc5OTY3OTAuMzg1NjM2LCJleHAiOjE3MDk2MTkxOTAuMzIzNDc1LCJzdWIiOiIxIiwic2NvcGVzIjpbIioiXX0.Q6-7eF8Xq11QZjcAjLsLSlzNvnUy8HwEelz3BNtPyccPBkrwt-Z3oF7ICKK6XzXYVH35Wc-2v8_Y2UaIyf-U9V3NsIwl0hkKLWGwd-3nLdQ4XRbZJ_4oZp-SF2lIwT9sV-jawZMKLR5uT7OcR5SXbJitmIDUVSv5C_Dma7DrBY5WifmmjcCMNVXkUKWMxEObhFFfnHrmX3CdwskXdNZNrm2edPEby6AwT3TyyJ-xrAZyg2XJM1LD-gTohhtz7_yM-8VlrGdXEJSc78neCqEVVr79kKHBQ6LjLwra51ix8VLH_IPHoeH7mJtgpTOJpjLv77OJf9qu5SLt51cvHnX9k329w9-OJkobdowRJRMkRnAPr7SIvuvvFGBZSARwvyWOLbreseBLUlrbtOPXU21EFBpHt9jmI92xTFJgmvtZt-r_yIgUq3O2pmR_slny1ylmeMo1j0YX-_elzxDvD8X5E4Z-X86IHPgFlmiXz6gOOfKBLrSWAlCrSEZhys7xFrHWup_F9J3rRcXgVnTvF8RJRp2gDcYCnFwng0mfgcxouNnX_M2Bv00MmOrLPk7GMGUPXe-bqaRWhcArGED9VjPpqjKQVpAZyiB7uIE3-fCxBv3g9iwLJSrXVAZ_e0BJBLDt0VyUuZYpMRb9dR63ofLZf-_Y5bhXriGsILrXiLG8lIA');
    $db->criminalCase()->whereId('37a6/3f22022a')->update([
        'institution_reg_no' => 'JAVAABU',
    ]);
    $res = $db->criminalCase()->find('37a6/3f22022a');
    $this->assertEquals('javaabu', $res['institution']['slug']);
});

it('can create a nested complainant in an existing criminal case model', function () {
    $db = new \Javaabu\PgoDB\PgoDB('eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMTdiN2Y5N2E0ODFjY2E2NDkwODAyZmZkNTUzYTJmNTEyZjA4OTU1ZWQwMjA3ODMxNmE1NDJiNDYwMDcwNDA3ZDM2MWM3YWI2OTg5NmVlODQiLCJpYXQiOjE2Nzc5OTY3OTAuMzg1NjMxLCJuYmYiOjE2Nzc5OTY3OTAuMzg1NjM2LCJleHAiOjE3MDk2MTkxOTAuMzIzNDc1LCJzdWIiOiIxIiwic2NvcGVzIjpbIioiXX0.Q6-7eF8Xq11QZjcAjLsLSlzNvnUy8HwEelz3BNtPyccPBkrwt-Z3oF7ICKK6XzXYVH35Wc-2v8_Y2UaIyf-U9V3NsIwl0hkKLWGwd-3nLdQ4XRbZJ_4oZp-SF2lIwT9sV-jawZMKLR5uT7OcR5SXbJitmIDUVSv5C_Dma7DrBY5WifmmjcCMNVXkUKWMxEObhFFfnHrmX3CdwskXdNZNrm2edPEby6AwT3TyyJ-xrAZyg2XJM1LD-gTohhtz7_yM-8VlrGdXEJSc78neCqEVVr79kKHBQ6LjLwra51ix8VLH_IPHoeH7mJtgpTOJpjLv77OJf9qu5SLt51cvHnX9k329w9-OJkobdowRJRMkRnAPr7SIvuvvFGBZSARwvyWOLbreseBLUlrbtOPXU21EFBpHt9jmI92xTFJgmvtZt-r_yIgUq3O2pmR_slny1ylmeMo1j0YX-_elzxDvD8X5E4Z-X86IHPgFlmiXz6gOOfKBLrSWAlCrSEZhys7xFrHWup_F9J3rRcXgVnTvF8RJRp2gDcYCnFwng0mfgcxouNnX_M2Bv00MmOrLPk7GMGUPXe-bqaRWhcArGED9VjPpqjKQVpAZyiB7uIE3-fCxBv3g9iwLJSrXVAZ_e0BJBLDt0VyUuZYpMRb9dR63ofLZf-_Y5bhXriGsILrXiLG8lIA');
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

it('can create a new model', function () {
    $db = new \Javaabu\PgoDB\PgoDB('eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMTdiN2Y5N2E0ODFjY2E2NDkwODAyZmZkNTUzYTJmNTEyZjA4OTU1ZWQwMjA3ODMxNmE1NDJiNDYwMDcwNDA3ZDM2MWM3YWI2OTg5NmVlODQiLCJpYXQiOjE2Nzc5OTY3OTAuMzg1NjMxLCJuYmYiOjE2Nzc5OTY3OTAuMzg1NjM2LCJleHAiOjE3MDk2MTkxOTAuMzIzNDc1LCJzdWIiOiIxIiwic2NvcGVzIjpbIioiXX0.Q6-7eF8Xq11QZjcAjLsLSlzNvnUy8HwEelz3BNtPyccPBkrwt-Z3oF7ICKK6XzXYVH35Wc-2v8_Y2UaIyf-U9V3NsIwl0hkKLWGwd-3nLdQ4XRbZJ_4oZp-SF2lIwT9sV-jawZMKLR5uT7OcR5SXbJitmIDUVSv5C_Dma7DrBY5WifmmjcCMNVXkUKWMxEObhFFfnHrmX3CdwskXdNZNrm2edPEby6AwT3TyyJ-xrAZyg2XJM1LD-gTohhtz7_yM-8VlrGdXEJSc78neCqEVVr79kKHBQ6LjLwra51ix8VLH_IPHoeH7mJtgpTOJpjLv77OJf9qu5SLt51cvHnX9k329w9-OJkobdowRJRMkRnAPr7SIvuvvFGBZSARwvyWOLbreseBLUlrbtOPXU21EFBpHt9jmI92xTFJgmvtZt-r_yIgUq3O2pmR_slny1ylmeMo1j0YX-_elzxDvD8X5E4Z-X86IHPgFlmiXz6gOOfKBLrSWAlCrSEZhys7xFrHWup_F9J3rRcXgVnTvF8RJRp2gDcYCnFwng0mfgcxouNnX_M2Bv00MmOrLPk7GMGUPXe-bqaRWhcArGED9VjPpqjKQVpAZyiB7uIE3-fCxBv3g9iwLJSrXVAZ_e0BJBLDt0VyUuZYpMRb9dR63ofLZf-_Y5bhXriGsILrXiLG8lIA');
    $res1 = $db->criminalCase()->find('9114252aaqa0112238');
    expect(empty($res1))->toBeTrue();

    $sample_model = [
        'incident_reference_number' => '9114252aaqa0112238',
        'institution_reg_no' => 'PGO',
        'incident_at' => '1996-12-30T09:11:26.000000Z',
        'lodged_at' => '1998-03-13T19:00:00.000000Z',
    ];
    $stored_result = $db->criminalCase()->store($sample_model);
    $this->assertEquals('9114252aaqa0112238', $stored_result['incident_reference_number']);

    $res2 = $db->criminalCase()->find('9114252aaqa0112238');
    expect(empty($res2))->toBeFalse();
    $this->assertEquals('9114252aaqa0112238', $res2['formatted_name']);
});
