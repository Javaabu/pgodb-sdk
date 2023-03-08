<?php

namespace Javaabu\PgoDB\Models;

class AssignedProsecutor extends NestedModel
{
    /**
     * Retrieves based on government id (national identity card number, passport number)
     * or Department of Judicial Administration's registration number
     */
    public function find(string $id): array
    {
        return $this
            ->addFilter('search_by_govt_id', $id)
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
