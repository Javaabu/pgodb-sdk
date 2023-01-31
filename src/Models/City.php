<?php

namespace Javaabu\PgoDB\Models;

class City implements Model
{
    use IsModel;

    public function __construct()
    {
    }

    public static function urlResourceName(): string
    {
        return 'cities';
    }
}
