<?php

namespace Javaabu\PgoDB\Models;

class Judge extends Model
{
    /**
     * Retrieves the individual based on their government id (national id-card, passport number)
     * or their registration number
     */
    public function find(string $id): array
    {
        return $this
            ->addFilter('search_by_govt_id', $id)
            ->get();
    }

    public static function urlResourceName(): string
    {
        return 'judges';
    }
}
