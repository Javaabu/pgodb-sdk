<?php

namespace Javaabu\PgoDB\Models;

class AssignedJudge extends NestedModel
{
    /**
     * Retrieves based on government id (national identity card number, passport number)
     * or Department of Judicial Administration's registration number
     *
     * @param string $id
     * @return array
     */
    public function find(string $id): array
    {
        return $this
            ->addFilter('search_by_govt_id', $id)
            ->get();
    }

    public static function urlResourceName(): string
    {
        return 'assigned-judges';
    }
}
