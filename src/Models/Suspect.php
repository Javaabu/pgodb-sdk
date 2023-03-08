<?php

namespace Javaabu\PgoDB\Models;

class Suspect extends NestedModel
{
    /**
     * Retrieves the suspect by their government id (either their national identity card number
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

    public function suspectCharge(): ?SuspectCharge
    {
        if (! $this->id) {
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
