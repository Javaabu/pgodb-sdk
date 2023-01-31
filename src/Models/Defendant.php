<?php

namespace Javaabu\PgoDB\Models;

class Defendant extends NestedModel
{
    use IsModel;

    public function selectById(string $identifier, ?string $individual_type = null, ?string $country_code = null): array
    {
        return $this
            ->addFilter('search_by_govt_id', $identifier, $individual_type, $country_code)
            ->filter();
    }

    public function selectByServiceNumber(string $identifier) : array
    {
        return $this->addFilter('service_number', $identifier)->filter();
    }

    public static function urlResourceName(): string
    {
        return 'defendants';
    }
}
