<?php

namespace Javaabu\PgoDB\Models;

class SuspectCharge extends NestedModel
{

    public static function urlResourceName(): string
    {
        return 'defendant-charges';
    }
}
