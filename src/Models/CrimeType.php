<?php

namespace Javaabu\PgoDB\Models;

class CrimeType implements Model
{
    use IsModel;

    public function __construct()
    {
    }

    public function selectById(string $identifier) : array
    {
        return $this->addFilter('slug', $identifier)->filter();
    }

    public static function urlResourceName(): string
    {
        return 'crime-types';
    }
}