<?php

it('retrieves an array from (GET) `/criminal-cases/`', function () {
    $base_uri = "http://pgodb.test/api/v1/";
    $token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiODBiNWJlNzM2NDljYmNiYzc4MGM4N2VkNWUxMmJhYzE4MjFlNWIzYmRkYjRmZTI5OGNiYjZkZmJjODc3NWVkZGMyMTJhMTExMDcyOTRhZTciLCJpYXQiOjE2NzQ0Nzc4NzMuMjMzMzc0LCJuYmYiOjE2NzQ0Nzc4NzMuMjMzMzc3LCJleHAiOjE3MDYwMTM4NzMuMTU5NjQzLCJzdWIiOiIxIiwic2NvcGVzIjpbIndyaXRlIiwicmVhZCJdfQ.XAOwwztXb96WmLnszl7CnYOqeTEDniQ8Dj7TLGZogLbwIaQAYT30g4ZKRiFsGCcGtm1q_lGAg8U0i9MnZOY9AooB-KbSg1H4HLHNfqEoWxhQbAzPwxMOPZuVXkwZH_HUt7uDPrZwYv6ywXvA2Kf2L3a7lKwjyHYXG07EYxTHr3sud-prqdzZ9a9mmkZD2gemoa2Kg5_hjZzCPExzdJAS5Eh8tN883U3fTtmKXwRcznz3fIO3DI10gNgULZa0SmFm0WbIo_sbPqoqZNuaPLb8PsFxnjsuqn8ESOAnDWaal8R8MTW5dw8s3mnTIEFsf9srRpdSiK1EWY7PtSqgZRipQty2F-s7xxmsMnS0kzAD_LGV85FQ-vFqI3cNy_OCi7ewl0XYWfzKmztO1pEEeAlYP-Yqys7nXdCwSkFLmV7vSxqrAUQyqwtefGmI_2TKv2g4AiNidMSPtpAXAsY87LWr_EbwTpqXbF8G0yct4XMw1eBUNxe_iJMSiyvnqA27UBq1H8pZdSbDVgZH9gzsAEoU4HxWSOZWE6BoyfthrB7GCMvY1YRbaBE0a4p4MuypFPlXug2EbstDXMUrIUsEtZqbO3x2kTwPITVEFqLDHiJI6ETHgraKczsoM83ol2E6pAdiOk_qMl8JHUK2JYJi_B5r_b30w41ku3pw-4hQWX7oR3E";
    $db = new \Javaabu\CriminalJusticeSectorDataShare\CriminalJusticeSectorDataShareClass($base_uri, $token);
    $resArray = $db->criminalCase()->index();
    expect($resArray)->toBeArray();
});

it('retrieves the correct page from a paginated response from (GET) `/criminal-case/`', function () {
    $base_uri = "http://pgodb.test/api/v1/";
    $token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiODBiNWJlNzM2NDljYmNiYzc4MGM4N2VkNWUxMmJhYzE4MjFlNWIzYmRkYjRmZTI5OGNiYjZkZmJjODc3NWVkZGMyMTJhMTExMDcyOTRhZTciLCJpYXQiOjE2NzQ0Nzc4NzMuMjMzMzc0LCJuYmYiOjE2NzQ0Nzc4NzMuMjMzMzc3LCJleHAiOjE3MDYwMTM4NzMuMTU5NjQzLCJzdWIiOiIxIiwic2NvcGVzIjpbIndyaXRlIiwicmVhZCJdfQ.XAOwwztXb96WmLnszl7CnYOqeTEDniQ8Dj7TLGZogLbwIaQAYT30g4ZKRiFsGCcGtm1q_lGAg8U0i9MnZOY9AooB-KbSg1H4HLHNfqEoWxhQbAzPwxMOPZuVXkwZH_HUt7uDPrZwYv6ywXvA2Kf2L3a7lKwjyHYXG07EYxTHr3sud-prqdzZ9a9mmkZD2gemoa2Kg5_hjZzCPExzdJAS5Eh8tN883U3fTtmKXwRcznz3fIO3DI10gNgULZa0SmFm0WbIo_sbPqoqZNuaPLb8PsFxnjsuqn8ESOAnDWaal8R8MTW5dw8s3mnTIEFsf9srRpdSiK1EWY7PtSqgZRipQty2F-s7xxmsMnS0kzAD_LGV85FQ-vFqI3cNy_OCi7ewl0XYWfzKmztO1pEEeAlYP-Yqys7nXdCwSkFLmV7vSxqrAUQyqwtefGmI_2TKv2g4AiNidMSPtpAXAsY87LWr_EbwTpqXbF8G0yct4XMw1eBUNxe_iJMSiyvnqA27UBq1H8pZdSbDVgZH9gzsAEoU4HxWSOZWE6BoyfthrB7GCMvY1YRbaBE0a4p4MuypFPlXug2EbstDXMUrIUsEtZqbO3x2kTwPITVEFqLDHiJI6ETHgraKczsoM83ol2E6pAdiOk_qMl8JHUK2JYJi_B5r_b30w41ku3pw-4hQWX7oR3E";
    $db = new \Javaabu\CriminalJusticeSectorDataShare\CriminalJusticeSectorDataShareClass($base_uri, $token);
    $resArray = $db->criminalCase()->index();
    expect($resArray)->toBeArray();
    $page1Array = $db->criminalCase()->indexPage('1');
    $page2Array = $db->criminalCase()->indexPage('2');
    $this->assertEquals($resArray, $page1Array);
    $this->assertNotEquals($resArray, $page2Array);
});

it('retrieves the model once an identifier is provided from (GET) `/criminal-case/', function () {
    $base_uri = "http://pgodb.test/api/v1/";
    $token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiODBiNWJlNzM2NDljYmNiYzc4MGM4N2VkNWUxMmJhYzE4MjFlNWIzYmRkYjRmZTI5OGNiYjZkZmJjODc3NWVkZGMyMTJhMTExMDcyOTRhZTciLCJpYXQiOjE2NzQ0Nzc4NzMuMjMzMzc0LCJuYmYiOjE2NzQ0Nzc4NzMuMjMzMzc3LCJleHAiOjE3MDYwMTM4NzMuMTU5NjQzLCJzdWIiOiIxIiwic2NvcGVzIjpbIndyaXRlIiwicmVhZCJdfQ.XAOwwztXb96WmLnszl7CnYOqeTEDniQ8Dj7TLGZogLbwIaQAYT30g4ZKRiFsGCcGtm1q_lGAg8U0i9MnZOY9AooB-KbSg1H4HLHNfqEoWxhQbAzPwxMOPZuVXkwZH_HUt7uDPrZwYv6ywXvA2Kf2L3a7lKwjyHYXG07EYxTHr3sud-prqdzZ9a9mmkZD2gemoa2Kg5_hjZzCPExzdJAS5Eh8tN883U3fTtmKXwRcznz3fIO3DI10gNgULZa0SmFm0WbIo_sbPqoqZNuaPLb8PsFxnjsuqn8ESOAnDWaal8R8MTW5dw8s3mnTIEFsf9srRpdSiK1EWY7PtSqgZRipQty2F-s7xxmsMnS0kzAD_LGV85FQ-vFqI3cNy_OCi7ewl0XYWfzKmztO1pEEeAlYP-Yqys7nXdCwSkFLmV7vSxqrAUQyqwtefGmI_2TKv2g4AiNidMSPtpAXAsY87LWr_EbwTpqXbF8G0yct4XMw1eBUNxe_iJMSiyvnqA27UBq1H8pZdSbDVgZH9gzsAEoU4HxWSOZWE6BoyfthrB7GCMvY1YRbaBE0a4p4MuypFPlXug2EbstDXMUrIUsEtZqbO3x2kTwPITVEFqLDHiJI6ETHgraKczsoM83ol2E6pAdiOk_qMl8JHUK2JYJi_B5r_b30w41ku3pw-4hQWX7oR3E";
    $db = new \Javaabu\CriminalJusticeSectorDataShare\CriminalJusticeSectorDataShareClass($base_uri, $token);
    $resArray = $db->criminalCase()->selectById('AAAA60485211');
    expect(sizeof($resArray))->toEqual(1);
});

it('can create a new model', function () {
    $base_uri = "http://pgodb.test/api/v1/";
    $token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiODBiNWJlNzM2NDljYmNiYzc4MGM4N2VkNWUxMmJhYzE4MjFlNWIzYmRkYjRmZTI5OGNiYjZkZmJjODc3NWVkZGMyMTJhMTExMDcyOTRhZTciLCJpYXQiOjE2NzQ0Nzc4NzMuMjMzMzc0LCJuYmYiOjE2NzQ0Nzc4NzMuMjMzMzc3LCJleHAiOjE3MDYwMTM4NzMuMTU5NjQzLCJzdWIiOiIxIiwic2NvcGVzIjpbIndyaXRlIiwicmVhZCJdfQ.XAOwwztXb96WmLnszl7CnYOqeTEDniQ8Dj7TLGZogLbwIaQAYT30g4ZKRiFsGCcGtm1q_lGAg8U0i9MnZOY9AooB-KbSg1H4HLHNfqEoWxhQbAzPwxMOPZuVXkwZH_HUt7uDPrZwYv6ywXvA2Kf2L3a7lKwjyHYXG07EYxTHr3sud-prqdzZ9a9mmkZD2gemoa2Kg5_hjZzCPExzdJAS5Eh8tN883U3fTtmKXwRcznz3fIO3DI10gNgULZa0SmFm0WbIo_sbPqoqZNuaPLb8PsFxnjsuqn8ESOAnDWaal8R8MTW5dw8s3mnTIEFsf9srRpdSiK1EWY7PtSqgZRipQty2F-s7xxmsMnS0kzAD_LGV85FQ-vFqI3cNy_OCi7ewl0XYWfzKmztO1pEEeAlYP-Yqys7nXdCwSkFLmV7vSxqrAUQyqwtefGmI_2TKv2g4AiNidMSPtpAXAsY87LWr_EbwTpqXbF8G0yct4XMw1eBUNxe_iJMSiyvnqA27UBq1H8pZdSbDVgZH9gzsAEoU4HxWSOZWE6BoyfthrB7GCMvY1YRbaBE0a4p4MuypFPlXug2EbstDXMUrIUsEtZqbO3x2kTwPITVEFqLDHiJI6ETHgraKczsoM83ol2E6pAdiOk_qMl8JHUK2JYJi_B5r_b30w41ku3pw-4hQWX7oR3E";
    $db = new \Javaabu\CriminalJusticeSectorDataShare\CriminalJusticeSectorDataShareClass($base_uri, $token);
    $resArray = $db->criminalCase()->selectById('5154252029');
    expect(sizeof($resArray))->toEqual(0);

    $sample_model = [
        "incident_reference_number" => "5154252029",
        "institution_reg_no" => "pgo",
        "incident_at" => "1996-12-30T09:11:26.000000Z",
        "lodged_at" => "1998-03-13T19:00:00.000000Z"
    ];
    $db->criminalCase()->store($sample_model);
    $resArray = $db->criminalCase()->selectById('5154252029');
    expect(sizeof($resArray))->toEqual(1);
});
