<?php

it('retrieves an array from (GET) `/criminal-cases/`', function () {
    $db = new \Javaabu\PgoDB\PgoDB();
    $res = $db->criminalCase()->index();
    expect($res)->toBeArray();
});

it('can retrieve an existing model from the database', function () {
    $db = new \Javaabu\PgoDB\PgoDB();
    $res = $db->criminalCase()->selectId("91142520112023");
    expect(sizeof($res["data"]))->toEqual(1);
});
//
//
it('can update an existing model identified by its id', function () {
    $db = new \Javaabu\PgoDB\PgoDB();
    $db->criminalCase()->whereId("91142520112026")->update([
        "institution_reg_no" => "JAVAAABU"
    ]);
    $res = $db->criminalCase()->selectId("91142520112026");
    expect(sizeof($res["data"]))->toEqual(1);
    $this->assertEquals("javaabu", $res["data"][0]["institution"]["slug"]);
});

it('can create a nested complainant in an existing criminal case model', function () {
    $db = new \Javaabu\PgoDB\PgoDB();
    $db->criminalCase()->whereId("91142520112026")->complainant()->store(
        [
            "individual" => [
                "nid" => "A169999",
                "name" => "Dr. Larissa Stokes",
                "name_en" => "Mr. Benedict Lockman I",
                "gender" => "female",
                "mobile_number" => "860.660.2765",
                "nationality_code" => "MV",
                "permanent_address_country_code" => "MV",
                "permanent_address_city_code" => "LD0894",
                "permanent_address" => "67353 Rebeka Road\nEast Opal, PA 94709",
                "individual_type" => "local",
                "dob" => "1995-07-14T19:00:00.000000Z",
                "email" => "pemmerich@example.net"
            ]
        ]
    );
    $res = $db->criminalCase()->whereId("91142520112026")->complainant()->selectId("A169999");
    expect($res)->toBeArray();
    $this->assertEquals("Dr. Larissa Stokes",$res["data"][0]["individual"]["name"]);
});


it('can create a new model', function () {
    $db = new \Javaabu\PgoDB\PgoDB();
    $res1 = $db->criminalCase()->selectId("91142520112037");
    expect(sizeof($res1["data"]))->toEqual(0);

    $sample_model = [
        "incident_reference_number" => "91142520112037",
        "institution_reg_no" => "PGO",
        "incident_at" => "1996-12-30T09:11:26.000000Z",
        "lodged_at" => "1998-03-13T19:00:00.000000Z"
    ];
    $stored_result = $db->criminalCase()->store($sample_model);
    $this->assertEquals("91142520112037", $stored_result["incident_reference_number"]);

    $res2 = $db->criminalCase()->selectId("91142520112037");
    expect(sizeof($res2["data"]))->toEqual(1);

});
