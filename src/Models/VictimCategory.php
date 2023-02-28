<?php

namespace Javaabu\PgoDB\Models;

class VictimCategory implements Model
{
    use IsModel;

    public function __construct()
    {
    }

    public static function urlResourceName(): string
    {
        return 'victim-categories';
    }
}
