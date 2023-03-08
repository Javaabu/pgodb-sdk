<?php

namespace Javaabu\PgoDB\Models;

class CaseType extends Model
{
    public function find(string $id): array
    {
        return $this->addFilter('slug', $id)->get();
    }

    public static function urlResourceName(): string
    {
        return 'case-types';
    }
}
