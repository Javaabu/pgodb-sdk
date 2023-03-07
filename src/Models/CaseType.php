<?php

namespace Javaabu\PgoDB\Models;

class CaseType extends Model
{
    public function find(string $identifier): array
    {
        return $this->addFilter('slug', $identifier)->get();
    }

    public static function urlResourceName(): string
    {
        return 'case-types';
    }
}
