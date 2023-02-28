<?php

namespace Javaabu\PgoDB\Models;

class Detention extends NestedModel
{
    use IsModel;

    public static function urlResourceName(): string
    {
        return 'detentions';
    }
}
