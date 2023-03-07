<?php

namespace Javaabu\PgoDB\Models;

class City extends NestedModel
{
    public static function urlResourceName(): string
    {
        return 'cities';
    }
}
