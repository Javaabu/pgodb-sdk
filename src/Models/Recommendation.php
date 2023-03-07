<?php

namespace Javaabu\PgoDB\Models;

class Recommendation extends NestedModel
{
    public function selectById(string $identifier): array
    {
        return $this
            ->addFilter('reference_number', $identifier)
            ->filter();
    }

    public static function urlResourceName(): string
    {
        return 'recommendations';
    }
}
