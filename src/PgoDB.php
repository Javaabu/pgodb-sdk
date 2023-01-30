<?php

namespace Javaabu\PgoDB;

use Javaabu\PgoDB\Http\AuthorizedClient;
use Javaabu\PgoDB\Models\CourtCase;
use Javaabu\PgoDB\Models\CriminalCase;
use Javaabu\PgoDB\Models\Institution;

class PgoDB
{
    protected static AuthorizedClient $authorizedClient;

    protected CriminalCase $criminalCase;
    protected CourtCase $courtCase;
    protected Institution $institution;

    public function __construct()
    {
        $this->criminalCase = new CriminalCase();
        $this->courtCase = new CourtCase();
        $this->institution = new Institution();
    }

    public function criminalCase() : ?CriminalCase
    {
        return $this->criminalCase;
    }

    public function courtCase() : ?CourtCase
    {
        return $this->courtCase;
    }

    public function institution() : ?Institution
    {
        return $this->institution;
    }

}
