<?php

namespace Javaabu\PgoDB\Models;

class Suspect extends NestedModel
{
    use IsModel;

    public function selectById(string $identifier, ?string $individual_type = null, ?string $country_code = null): array
    {
        return $this
            ->addFilter('search_by_govt_id', $identifier, $individual_type, $country_code)
            ->filter();
    }

    public static function urlResourceName(): string
    {
        return 'suspects';
    }
}