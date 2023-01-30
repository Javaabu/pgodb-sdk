<?php

namespace Javaabu\PgoDB\Models;

class Complainant implements Model
{
    use IsModel;

    public function __construct(
        protected ?string $parentClass,
        protected ?string $parentId
    ) {
    }

    public function selectId(string $identifier): array
    {
        return $this
            ->addFilter('search_by_govt_id', $identifier)
            ->filter();
    }

    public static function urlResourceName(): string
    {
        return 'complainants';
    }
}
