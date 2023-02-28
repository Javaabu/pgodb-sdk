<?php

namespace Javaabu\PgoDB\Models;

class State extends NestedModel
{
    use IsModel;

    protected function initializeNestedModel(string $className, string $classInstance): ?NestedModel
    {
        if (! $this->id) {
            return null;
        }

        /** @var NestedModel $classInstance */
        $this->$classInstance = new $className(State::class, $this->id);
        $this->$classInstance->setClient($this->authorizedClient);

        return $this->$classInstance;
    }

    public function city() : ?NestedModel
    {
        return $this->initializeNestedModel(City::class, __FUNCTION__);
    }

    public static function urlResourceName(): string
    {
        return 'states';
    }
}
