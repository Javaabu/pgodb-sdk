<?php

namespace Javaabu\PgoDB\Models;

class Suspect extends NestedModel
{

    public function selectById(string $identifier, ?string $individual_type = null, ?string $country_code = null): array
    {
        return $this
            ->addFilter('search_by_govt_id', $identifier, $individual_type, $country_code)
            ->filter();
    }

    public function suspectCharge(): ?SuspectCharge
    {
        if (!$this->id) {
            return null;
        }
        $suspect_charge = new SuspectCharge(Suspect::class, $this->id);
        $suspect_charge->setClient($this->authorizedClient);
        return $suspect_charge;
    }

    public static function urlResourceName(): string
    {
        return 'suspects';
    }
}
