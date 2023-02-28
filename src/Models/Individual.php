<?php

namespace Javaabu\PgoDB\Models;

class Individual implements Model
{
    use IsModel;

    public function __construct()
    {
    }

    public static function urlResourceName(): string
    {
        return 'individuals';
    }
}
