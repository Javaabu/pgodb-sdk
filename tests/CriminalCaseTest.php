<?php

it('retrieves an array from (GET) `/criminal-cases/`', function () {
    $db = new \Javaabu\PgoDB\PgoDB('eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiODBiNWJlNzM2NDljYmNiYzc4MGM4N2VkNWUxMmJhYzE4MjFlNWIzYmRkYjRmZTI5OGNiYjZkZmJjODc3NWVkZGMyMTJhMTExMDcyOTRhZTciLCJpYXQiOjE2NzQ0Nzc4NzMuMjMzMzc0LCJuYmYiOjE2NzQ0Nzc4NzMuMjMzMzc3LCJleHAiOjE3MDYwMTM4NzMuMTU5NjQzLCJzdWIiOiIxIiwic2NvcGVzIjpbIndyaXRlIiwicmVhZCJdfQ.XAOwwztXb96WmLnszl7CnYOqeTEDniQ8Dj7TLGZogLbwIaQAYT30g4ZKRiFsGCcGtm1q_lGAg8U0i9MnZOY9AooB-KbSg1H4HLHNfqEoWxhQbAzPwxMOPZuVXkwZH_HUt7uDPrZwYv6ywXvA2Kf2L3a7lKwjyHYXG07EYxTHr3sud-prqdzZ9a9mmkZD2gemoa2Kg5_hjZzCPExzdJAS5Eh8tN883U3fTtmKXwRcznz3fIO3DI10gNgULZa0SmFm0WbIo_sbPqoqZNuaPLb8PsFxnjsuqn8ESOAnDWaal8R8MTW5dw8s3mnTIEFsf9srRpdSiK1EWY7PtSqgZRipQty2F-s7xxmsMnS0kzAD_LGV85FQ-vFqI3cNy_OCi7ewl0XYWfzKmztO1pEEeAlYP-Yqys7nXdCwSkFLmV7vSxqrAUQyqwtefGmI_2TKv2g4AiNidMSPtpAXAsY87LWr_EbwTpqXbF8G0yct4XMw1eBUNxe_iJMSiyvnqA27UBq1H8pZdSbDVgZH9gzsAEoU4HxWSOZWE6BoyfthrB7GCMvY1YRbaBE0a4p4MuypFPlXug2EbstDXMUrIUsEtZqbO3x2kTwPITVEFqLDHiJI6ETHgraKczsoM83ol2E6pAdiOk_qMl8JHUK2JYJi_B5r_b30w41ku3pw-4hQWX7oR3E');
    $res = $db->criminalCase()->index();
    expect($res)->toBeArray();
});

it('can retrieve an existing model from the database', function () {
    $db = new \Javaabu\PgoDB\PgoDB('eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiODBiNWJlNzM2NDljYmNiYzc4MGM4N2VkNWUxMmJhYzE4MjFlNWIzYmRkYjRmZTI5OGNiYjZkZmJjODc3NWVkZGMyMTJhMTExMDcyOTRhZTciLCJpYXQiOjE2NzQ0Nzc4NzMuMjMzMzc0LCJuYmYiOjE2NzQ0Nzc4NzMuMjMzMzc3LCJleHAiOjE3MDYwMTM4NzMuMTU5NjQzLCJzdWIiOiIxIiwic2NvcGVzIjpbIndyaXRlIiwicmVhZCJdfQ.XAOwwztXb96WmLnszl7CnYOqeTEDniQ8Dj7TLGZogLbwIaQAYT30g4ZKRiFsGCcGtm1q_lGAg8U0i9MnZOY9AooB-KbSg1H4HLHNfqEoWxhQbAzPwxMOPZuVXkwZH_HUt7uDPrZwYv6ywXvA2Kf2L3a7lKwjyHYXG07EYxTHr3sud-prqdzZ9a9mmkZD2gemoa2Kg5_hjZzCPExzdJAS5Eh8tN883U3fTtmKXwRcznz3fIO3DI10gNgULZa0SmFm0WbIo_sbPqoqZNuaPLb8PsFxnjsuqn8ESOAnDWaal8R8MTW5dw8s3mnTIEFsf9srRpdSiK1EWY7PtSqgZRipQty2F-s7xxmsMnS0kzAD_LGV85FQ-vFqI3cNy_OCi7ewl0XYWfzKmztO1pEEeAlYP-Yqys7nXdCwSkFLmV7vSxqrAUQyqwtefGmI_2TKv2g4AiNidMSPtpAXAsY87LWr_EbwTpqXbF8G0yct4XMw1eBUNxe_iJMSiyvnqA27UBq1H8pZdSbDVgZH9gzsAEoU4HxWSOZWE6BoyfthrB7GCMvY1YRbaBE0a4p4MuypFPlXug2EbstDXMUrIUsEtZqbO3x2kTwPITVEFqLDHiJI6ETHgraKczsoM83ol2E6pAdiOk_qMl8JHUK2JYJi_B5r_b30w41ku3pw-4hQWX7oR3E');
    $res = $db->criminalCase()->selectById('91142520112023');
    expect(count($res['data']))->toEqual(1);
});

it('can update an existing model identified by its id', function () {
    $db = new \Javaabu\PgoDB\PgoDB('eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiODBiNWJlNzM2NDljYmNiYzc4MGM4N2VkNWUxMmJhYzE4MjFlNWIzYmRkYjRmZTI5OGNiYjZkZmJjODc3NWVkZGMyMTJhMTExMDcyOTRhZTciLCJpYXQiOjE2NzQ0Nzc4NzMuMjMzMzc0LCJuYmYiOjE2NzQ0Nzc4NzMuMjMzMzc3LCJleHAiOjE3MDYwMTM4NzMuMTU5NjQzLCJzdWIiOiIxIiwic2NvcGVzIjpbIndyaXRlIiwicmVhZCJdfQ.XAOwwztXb96WmLnszl7CnYOqeTEDniQ8Dj7TLGZogLbwIaQAYT30g4ZKRiFsGCcGtm1q_lGAg8U0i9MnZOY9AooB-KbSg1H4HLHNfqEoWxhQbAzPwxMOPZuVXkwZH_HUt7uDPrZwYv6ywXvA2Kf2L3a7lKwjyHYXG07EYxTHr3sud-prqdzZ9a9mmkZD2gemoa2Kg5_hjZzCPExzdJAS5Eh8tN883U3fTtmKXwRcznz3fIO3DI10gNgULZa0SmFm0WbIo_sbPqoqZNuaPLb8PsFxnjsuqn8ESOAnDWaal8R8MTW5dw8s3mnTIEFsf9srRpdSiK1EWY7PtSqgZRipQty2F-s7xxmsMnS0kzAD_LGV85FQ-vFqI3cNy_OCi7ewl0XYWfzKmztO1pEEeAlYP-Yqys7nXdCwSkFLmV7vSxqrAUQyqwtefGmI_2TKv2g4AiNidMSPtpAXAsY87LWr_EbwTpqXbF8G0yct4XMw1eBUNxe_iJMSiyvnqA27UBq1H8pZdSbDVgZH9gzsAEoU4HxWSOZWE6BoyfthrB7GCMvY1YRbaBE0a4p4MuypFPlXug2EbstDXMUrIUsEtZqbO3x2kTwPITVEFqLDHiJI6ETHgraKczsoM83ol2E6pAdiOk_qMl8JHUK2JYJi_B5r_b30w41ku3pw-4hQWX7oR3E');
    $db->criminalCase()->whereId('91142520112026')->update([
        'institution_reg_no' => 'JAVAAABU',
    ]);
    $res = $db->criminalCase()->selectById('91142520112026');
    $this->assertEquals('javaabu', $res['institution']['slug']);
});

it('can create a nested complainant in an existing criminal case model', function () {
    $db = new \Javaabu\PgoDB\PgoDB('eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiODBiNWJlNzM2NDljYmNiYzc4MGM4N2VkNWUxMmJhYzE4MjFlNWIzYmRkYjRmZTI5OGNiYjZkZmJjODc3NWVkZGMyMTJhMTExMDcyOTRhZTciLCJpYXQiOjE2NzQ0Nzc4NzMuMjMzMzc0LCJuYmYiOjE2NzQ0Nzc4NzMuMjMzMzc3LCJleHAiOjE3MDYwMTM4NzMuMTU5NjQzLCJzdWIiOiIxIiwic2NvcGVzIjpbIndyaXRlIiwicmVhZCJdfQ.XAOwwztXb96WmLnszl7CnYOqeTEDniQ8Dj7TLGZogLbwIaQAYT30g4ZKRiFsGCcGtm1q_lGAg8U0i9MnZOY9AooB-KbSg1H4HLHNfqEoWxhQbAzPwxMOPZuVXkwZH_HUt7uDPrZwYv6ywXvA2Kf2L3a7lKwjyHYXG07EYxTHr3sud-prqdzZ9a9mmkZD2gemoa2Kg5_hjZzCPExzdJAS5Eh8tN883U3fTtmKXwRcznz3fIO3DI10gNgULZa0SmFm0WbIo_sbPqoqZNuaPLb8PsFxnjsuqn8ESOAnDWaal8R8MTW5dw8s3mnTIEFsf9srRpdSiK1EWY7PtSqgZRipQty2F-s7xxmsMnS0kzAD_LGV85FQ-vFqI3cNy_OCi7ewl0XYWfzKmztO1pEEeAlYP-Yqys7nXdCwSkFLmV7vSxqrAUQyqwtefGmI_2TKv2g4AiNidMSPtpAXAsY87LWr_EbwTpqXbF8G0yct4XMw1eBUNxe_iJMSiyvnqA27UBq1H8pZdSbDVgZH9gzsAEoU4HxWSOZWE6BoyfthrB7GCMvY1YRbaBE0a4p4MuypFPlXug2EbstDXMUrIUsEtZqbO3x2kTwPITVEFqLDHiJI6ETHgraKczsoM83ol2E6pAdiOk_qMl8JHUK2JYJi_B5r_b30w41ku3pw-4hQWX7oR3E');
    $db->criminalCase()->whereId('91142520112026')->complainant()->store(
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
    $res = $db->criminalCase()->whereId('91142520112026')->complainant()->selectById('A161929');
    expect($res)->toBeArray();
    $this->assertEquals('Dr. Larissa Stokes', $res['data'][0]['individual']['name']);
});

it('can create a new model', function () {
    $db = new \Javaabu\PgoDB\PgoDB('eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiODBiNWJlNzM2NDljYmNiYzc4MGM4N2VkNWUxMmJhYzE4MjFlNWIzYmRkYjRmZTI5OGNiYjZkZmJjODc3NWVkZGMyMTJhMTExMDcyOTRhZTciLCJpYXQiOjE2NzQ0Nzc4NzMuMjMzMzc0LCJuYmYiOjE2NzQ0Nzc4NzMuMjMzMzc3LCJleHAiOjE3MDYwMTM4NzMuMTU5NjQzLCJzdWIiOiIxIiwic2NvcGVzIjpbIndyaXRlIiwicmVhZCJdfQ.XAOwwztXb96WmLnszl7CnYOqeTEDniQ8Dj7TLGZogLbwIaQAYT30g4ZKRiFsGCcGtm1q_lGAg8U0i9MnZOY9AooB-KbSg1H4HLHNfqEoWxhQbAzPwxMOPZuVXkwZH_HUt7uDPrZwYv6ywXvA2Kf2L3a7lKwjyHYXG07EYxTHr3sud-prqdzZ9a9mmkZD2gemoa2Kg5_hjZzCPExzdJAS5Eh8tN883U3fTtmKXwRcznz3fIO3DI10gNgULZa0SmFm0WbIo_sbPqoqZNuaPLb8PsFxnjsuqn8ESOAnDWaal8R8MTW5dw8s3mnTIEFsf9srRpdSiK1EWY7PtSqgZRipQty2F-s7xxmsMnS0kzAD_LGV85FQ-vFqI3cNy_OCi7ewl0XYWfzKmztO1pEEeAlYP-Yqys7nXdCwSkFLmV7vSxqrAUQyqwtefGmI_2TKv2g4AiNidMSPtpAXAsY87LWr_EbwTpqXbF8G0yct4XMw1eBUNxe_iJMSiyvnqA27UBq1H8pZdSbDVgZH9gzsAEoU4HxWSOZWE6BoyfthrB7GCMvY1YRbaBE0a4p4MuypFPlXug2EbstDXMUrIUsEtZqbO3x2kTwPITVEFqLDHiJI6ETHgraKczsoM83ol2E6pAdiOk_qMl8JHUK2JYJi_B5r_b30w41ku3pw-4hQWX7oR3E');
    $res1 = $db->criminalCase()->selectById('91142520112238');
    expect(count($res1['data']))->toEqual(0);

    $sample_model = [
        'incident_reference_number' => '91142520112238',
        'institution_reg_no' => 'PGO',
        'incident_at' => '1996-12-30T09:11:26.000000Z',
        'lodged_at' => '1998-03-13T19:00:00.000000Z',
    ];
    $stored_result = $db->criminalCase()->store($sample_model);
    $this->assertEquals('91142520112238', $stored_result['incident_reference_number']);

    $res2 = $db->criminalCase()->selectById('91142520112238');
    expect(count($res2['data']))->toEqual(1);
});
