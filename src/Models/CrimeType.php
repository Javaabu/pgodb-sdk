<?php

namespace Javaabu\PgoDB\Models;

class CrimeType extends Model
{
    public function find(string $id): array
    {
        return $this->addFilter('slug', $id)->get();
    }

    public static function urlResourceName(): string
    {
        return 'crime-types';
    }
}
