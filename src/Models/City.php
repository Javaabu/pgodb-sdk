<?php

namespace Javaabu\PgoDB\Models;

class City extends NestedModel
{
    use IsModel;

    public static function urlResourceName(): string
    {
        return 'cities';
    }
}
