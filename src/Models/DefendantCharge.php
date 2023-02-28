<?php

namespace Javaabu\PgoDB\Models;

class DefendantCharge extends NestedModel
{
    use IsModel;

    public static function urlResourceName(): string
    {
        return 'defendant-charges';
    }
}
