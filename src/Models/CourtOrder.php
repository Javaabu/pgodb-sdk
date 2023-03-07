<?php

namespace Javaabu\PgoDB\Models;

class CourtOrder extends NestedModel
{

    public static function urlResourceName(): string
    {
        return 'court-orders';
    }
}
