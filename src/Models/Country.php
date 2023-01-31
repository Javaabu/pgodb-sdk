<?php

namespace Javaabu\PgoDB\Models;

class Country implements Model
{
    use IsModel;

    public function __construct()
    {
    }

    public static function urlResourceName(): string
    {
        return 'countries';
    }
}
