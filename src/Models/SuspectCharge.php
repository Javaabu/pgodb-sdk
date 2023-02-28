<?php

namespace Javaabu\PgoDB\Models;

class SuspectCharge extends NestedModel
{
    use IsModel;

    public static function urlResourceName(): string
    {
        return 'defendant-charges';
    }
}
