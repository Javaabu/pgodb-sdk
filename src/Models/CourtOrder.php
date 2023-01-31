<?php

namespace Javaabu\PgoDB\Models;

class CourtOrder extends NestedModel
{
    use IsModel;

    public static function urlResourceName(): string
    {
        return 'court-orders';
    }
}
