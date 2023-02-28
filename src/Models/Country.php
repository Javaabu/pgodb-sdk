<?php

namespace Javaabu\PgoDB\Models;

class Country implements Model
{
    use IsModel;

    public function __construct()
    {
    }

    public function state(): ?State
    {
        return $this->initializeModel(__FUNCTION__);
    }

    public static function urlResourceName(): string
    {
        return 'countries';
    }
}
