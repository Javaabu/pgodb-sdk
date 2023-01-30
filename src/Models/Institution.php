<?php

namespace Javaabu\PgoDB\Models;

class Institution implements Model
{
    use IsModel;

    public function __construct()
    {
    }

    public static function urlResourceName(): string
    {
        return 'institutions';
    }
}
