<?php

namespace Javaabu\PgoDB\Models;

class AssignedLawyer extends NestedModel
{
    public function selectById(string $identifier,
                               ?string $individual_type = null,
                               ?string $country_code = null): array
    {
        return $this
            ->addFilter('search_by_govt_id', $identifier, $individual_type, $country_code)
            ->filter();
    }

    public function getLegalAidLawyers(bool $value = true): array
    {
        return $this->addFilter('is_legal_aid', $value)->filter();
    }

    public static function urlResourceName(): string
    {
        return 'assigned-lawyers';
    }
}
