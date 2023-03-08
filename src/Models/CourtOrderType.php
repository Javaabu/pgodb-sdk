<?php

namespace Javaabu\PgoDB\Models;

class CourtOrderType extends Model
{
    public function find(string $id): array
    {
        return $this->addFilter('slug', $id)->get();
    }

    public static function urlResourceName(): string
    {
        return 'court-order-types';
    }
}
