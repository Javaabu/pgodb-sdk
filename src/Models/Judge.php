<?php

namespace Javaabu\PgoDB\Models;

class Judge implements Model
{
    use IsModel;

    public function __construct()
    {
    }

    public static function urlResourceName(): string
    {
        return 'judges';
    }
}