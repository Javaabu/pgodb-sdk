<?php

namespace Javaabu\PgoDB\Models;

class State implements Model
{
    use IsModel;

    public function __construct()
    {
    }

    public static function urlResourceName(): string
    {
        return 'states';
    }
}
