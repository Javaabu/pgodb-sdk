<?php

namespace Javaabu\PgoDB\Models;

class CourtProceeding extends NestedModel
{
    public static function urlResourceName(): string
    {
        return 'court-proceedings';
    }
}
