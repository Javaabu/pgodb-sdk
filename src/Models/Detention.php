<?php

namespace Javaabu\PgoDB\Models;

class Detention extends NestedModel
{
    public static function urlResourceName(): string
    {
        return 'detentions';
    }
}
