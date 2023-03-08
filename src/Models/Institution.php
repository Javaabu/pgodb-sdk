<?php

namespace Javaabu\PgoDB\Models;

class Institution extends Model
{
    public function find(string $id) : array
    {
        return $this
            ->addFilter('search_by_code_or_slug', $id)
            ->get();
    }

    public static function urlResourceName(): string
    {
        return 'institutions';
    }
}
