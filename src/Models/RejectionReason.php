<?php
namespace Javaabu\PgoDB\Models;

class RejectionReason implements Model
{
    use IsModel;

    public function __construct()
    {
    }

    public static function urlResourceName(): string
    {
        return 'rejection-reasons';
    }
}
