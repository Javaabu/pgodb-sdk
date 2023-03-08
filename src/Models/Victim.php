<?php

namespace Javaabu\PgoDB\Models;

class Victim extends NestedModel
{
    public function find(string $id): array
    {
        return $this
            ->addFilter('search_by_govt_id', $id)
            ->get();
    }

    public static function urlResourceName(): string
    {
        return 'victims';
    }
}
