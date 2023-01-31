<?php

namespace Javaabu\PgoDB\Models;

class CourtProceeding extends NestedModel
{
    use IsModel;

    public static function urlResourceName(): string
    {
        return 'court-proceedings';
    }
}
