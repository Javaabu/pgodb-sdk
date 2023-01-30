<?php

namespace Javaabu\PgoDB\Models;

class Complainant extends NestedModel
{
    use IsModel;

    public function selectById(string $identifier): array
    {
        return $this
            ->addFilter("search_by_govt_id", $identifier)
            ->filter();
    }

    public static function urlResourceName(): string
    {
        return 'complainants';
    }
}
