<?php

namespace Javaabu\PgoDB\Models;

class AssignedJudge extends NestedModel
{
    public function find(string $identifier,
                               ?string $individual_type = null,
                               ?string $country_code = null): array
    {
        return $this
            ->addFilter('search_by_govt_id', $identifier, $individual_type, $country_code)
            ->get();
    }

    public static function urlResourceName(): string
    {
        return 'assigned-judges';
    }
}
