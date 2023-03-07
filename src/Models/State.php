<?php

namespace Javaabu\PgoDB\Models;

class State extends NestedModel
{
    public function city(): ?City
    {
        if (! $this->id) {
            return null;
        }

        $city = new City(State::class, $this->id);
        $city->setClient($this->authorizedClient);
        return $city;
    }

    public static function urlResourceName(): string
    {
        return 'states';
    }
}
