<?php

namespace Javaabu\PgoDB;

use Javaabu\PgoDB\Http\AuthorizedClient;
use Javaabu\PgoDB\Models\CourtCase;
use Javaabu\PgoDB\Models\CriminalCase;
use Javaabu\PgoDB\Models\Institution;

class PgoDB
{
    protected AuthorizedClient $authorizedClient;

    protected CriminalCase $criminalCase;

    protected CourtCase $courtCase;

    protected Institution $institution;

    public function __construct(protected string $apiKey)
    {
        $this->authorizedClient = new AuthorizedClient($this->apiKey);

        $this->criminalCase = new CriminalCase();
        $this->courtCase = new CourtCase();
        $this->institution = new Institution();
    }

    public function criminalCase(): ?CriminalCase
    {
        $this->criminalCase->setClient($this->authorizedClient);
        return $this->criminalCase;
    }

    public function courtCase(): ?CourtCase
    {
        $this->courtCase->setClient($this->authorizedClient);
        return $this->courtCase;
    }

    public function institution(): ?Institution
    {
        $this->institution->setClient($this->authorizedClient);
        return $this->institution;
    }
}
