<?php

namespace Javaabu\PgoDB\Models;

class Detention extends NestedModel
{
    use IsModel;

    public function __construct()
    {
    }

    public static function urlResourceName(): string
    {
        return 'detentions';
    }
}
