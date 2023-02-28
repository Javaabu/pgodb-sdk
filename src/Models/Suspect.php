<?php

namespace Javaabu\PgoDB\Models;

class Suspect extends NestedModel
{
    use IsModel;

    protected function initializeNestedModel(string $className, string $classInstance): ?NestedModel
    {
        if (! $this->id) {
            return null;
        }

        /** @var NestedModel $classInstance */
        $this->$classInstance = new $className(Suspect::class, $this->id);
        $this->$classInstance->setClient($this->authorizedClient);

        return $this->$classInstance;
    }

    public function selectById(string $identifier, ?string $individual_type = null, ?string $country_code = null): array
    {
        return $this
            ->addFilter('search_by_govt_id', $identifier, $individual_type, $country_code)
            ->filter();
    }

    public function suspectCharge() : ?NestedModel
    {
        return $this->initializeNestedModel(SuspectCharge::class, __FUNCTION__);
    }

    public static function urlResourceName(): string
    {
        return 'suspects';
    }
}
