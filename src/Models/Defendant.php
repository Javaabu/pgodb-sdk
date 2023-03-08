<?php

namespace Javaabu\PgoDB\Models;

class Defendant extends NestedModel
{
    /**
     * Retrieves the defendant by their government id (either their national identity card number
     * or their passport number).
     *
     * @param string $id
     * @return array
     */
    public function find(string $id): array
    {
        return $this
            ->addFilter('search_by_govt_id', $id)
            ->get();
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
