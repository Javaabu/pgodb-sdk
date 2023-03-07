<?php

namespace Javaabu\PgoDB\Models;

class AssignedProsecutor extends NestedModel
{
    public function find(string $identifier,
                               ?string $individual_type = null,
                               ?string $country_code = null): array
    {
        return $this
            ->addFilter('search_by_govt_id', $identifier, $individual_type, $country_code)
            ->get();
    }

    public function getLegalAidProsecutors(bool $value = true): array
    {
        return $this->addFilter('is_legal_aid', $value)->get();
    }

    public static function urlResourceName(): string
    {
        return 'assigned-prosecutors';
    }
}
