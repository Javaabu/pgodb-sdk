<?php

namespace Javaabu\PgoDB\Models;

class ChargeStatus implements Model
{
    use IsModel;

    public function __construct()
    {
    }

    public static function urlResourceName(): string
    {
        return 'charge-statuses';
    }
}
