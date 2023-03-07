<?php

namespace Javaabu\PgoDB\Models;

class Defendant extends NestedModel
{
    public function selectById(string $identifier,
                               ?string $individual_type = null,
                               ?string $country_code = null): array
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

    public function defendantCharge(): ?DefendantCharge
    {
        if (! $this->id) {
            return null;
        }

        $defendant_charge = new DefendantCharge(Defendant::class, $this->id);
        $defendant_charge->setClient($this->authorizedClient);

        return $defendant_charge;
    }
}
