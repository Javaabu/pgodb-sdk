<?php

namespace Javaabu\PgoDB\Models;

class ActionType implements Model
{
    use IsModel;

    public function __construct()
    {
    }

    public static function urlResourceName(): string
    {
        return 'action-types';
    }
}
