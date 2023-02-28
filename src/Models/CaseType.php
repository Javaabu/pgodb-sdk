<?php

namespace Javaabu\PgoDB\Models;

class CaseType implements Model
{
    use IsModel;

    public function selectById(string $identifier): array
    {
        return $this->addFilter('slug', $identifier)->filter();
    }

    public static function urlResourceName(): string
    {
        return 'case-types';
    }
}
