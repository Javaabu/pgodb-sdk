<?php

namespace Javaabu\PgoDB\Models;

class CourtCase implements Model
{
    use IsModel;

    public function __construct()
    {
    }

    public static function urlResourceName(): string
    {
        return 'court-cases';
    }
}
