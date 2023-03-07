<?php

namespace Javaabu\PgoDB\Models;

class Country extends Model
{
    protected ?string $id;

    public function state(): ?State
    {
        $state = new State(Country::class, $this->id);
        $state->setClient($this->authorizedClient);

        return $state;
    }

    public static function urlResourceName(): string
    {
        return 'countries';
    }
}
