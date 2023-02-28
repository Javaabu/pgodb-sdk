<?php

namespace Javaabu\PgoDB\Models;

class Defendant extends NestedModel
{
    use IsModel;

    protected function initializeNestedModel(string $className, string $classInstance): ?NestedModel
    {
        if (! $this->id) {
            return null;
        }

        /** @var NestedModel $classInstance */
        $this->$classInstance = new $className(Defendant::class, $this->id);
        $this->$classInstance->setClient($this->authorizedClient);

        return $this->$classInstance;
    }

    public function selectById(string $identifier, ?string $individual_type = null, ?string $country_code = null): array
    {
        return $this
            ->addFilter('search_by_govt_id', $identifier, $individual_type, $country_code)
            ->filter();
    }

    public function selectByServiceNumber(string $identifier): array
    {
        return $this->addFilter('service_number', $identifier)->filter();
    }

    public static function urlResourceName(): string
    {
        return 'defendants';
    }

    public function defendantCharge(): ?NestedModel
    {
        return $this->initializeNestedModel(DefendantCharge::class, __FUNCTION__);
    }
}
