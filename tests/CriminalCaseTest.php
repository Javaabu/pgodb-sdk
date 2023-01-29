<?php

it('retrieves an array from (GET) `/criminal-cases/`', function () {
    $db = new \Javaabu\CriminalJusticeSectorDataShare\CriminalJusticeSectorDataShareClass($base_uri, $token);
    $resArray = $db->criminalCase()->index();
    expect($resArray)->toBeArray();
});

it('retrieves the correct page from a paginated response from (GET) `/criminal-case/`', function() {
    $db = new \Javaabu\CriminalJusticeSectorDataShare\CriminalJusticeSectorDataShareClass($base_uri, $token);
    $resArray = $db->criminalCase()->index();
    expect($resArray)->toBeArray();
    $page1Array = $db->criminalCase()->indexPage('1');
    $page2Array = $db->criminalCase()->indexPage('2');
    $this->assertEquals($resArray, $page1Array);
    $this->assertNotEquals($resArray, $page2Array);
});

it('retrieves the model once an identifier is provided from (GET) `/criminal-case/', function () {
    $db = new \Javaabu\CriminalJusticeSectorDataShare\CriminalJusticeSectorDataShareClass($base_uri, $token);
    $resArray = $db->criminalCase()->selectById('AAAA60485211');
    expect(sizeof($resArray["data"]))->toEqual(1);
});
