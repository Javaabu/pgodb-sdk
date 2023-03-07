<?php

namespace Javaabu\PgoDB\Models;

class CourtOrderType extends Model
{

    public function selectById(string $identifier): array
    {
        return $this->addFilter('slug', $identifier)->filter();
    }

    public static function urlResourceName(): string
    {
        return 'court-order-types';
    }
}
