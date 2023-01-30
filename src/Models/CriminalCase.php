<?php

namespace Javaabu\PgoDB\Models;

class CriminalCase implements Model
{
    use IsModel;

    protected ?string $id;

    protected Complainant $complainant;

    public function __construct()
    {
    }

    public function complainant(): ?Complainant
    {
        if (! $this->id) {
            return null;
        }

        $this->complainant = new Complainant(CriminalCase::class, $this->id);

        return $this->complainant;
    }

    public static function urlResourceName(): string
    {
        return 'criminal-cases';
    }
}
