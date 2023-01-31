<?php

namespace Javaabu\PgoDB\Models;

class Action extends NestedModel
{
    use IsModel;

    public static function urlResourceName(): string
    {
        return 'actions';
    }
}
