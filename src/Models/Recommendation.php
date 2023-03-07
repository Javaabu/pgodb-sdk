<?php

namespace Javaabu\PgoDB\Models;

class Recommendation extends NestedModel
{
    public function find(string $identifier): array
    {
        return $this
            ->addFilter('reference_number', $identifier)
            ->get();
    }

    public static function urlResourceName(): string
    {
        return 'recommendations';
    }
}
