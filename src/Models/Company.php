<?php

namespace Javaabu\PgoDB\Models;

class Company implements Model
{
    use IsModel;

    public function __construct()
    {
    }

    public static function urlResourceName(): string
    {
        return 'companies';
    }
}
