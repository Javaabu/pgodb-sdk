<?php

namespace Javaabu\PgoDB\Models;

class EducationalLevel implements Model
{
    use IsModel;

    public function __construct()
    {
    }

    public static function urlResourceName(): string
    {
        return 'educational-levels';
    }
}
