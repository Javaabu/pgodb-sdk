<?php

namespace Javaabu\PgoDB\Models;

class Action implements Model
{
    use IsModel;

    public function __construct()
    {
    }

    public static function urlResourceName(): string
    {
        return 'actions';
    }
}
