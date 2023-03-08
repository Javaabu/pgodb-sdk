<?php

namespace Javaabu\PgoDB\Models;

class Recommendation extends NestedModel
{
    public function find(string $id): array
    {
        return $this
            ->addFilter('reference_number', $id)
            ->get();
    }

    public static function urlResourceName(): string
    {
        return 'recommendations';
    }
}
