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

    public function __construct(string $apiKey, string $baseUri)
    {
        $this->authorizedClient = new AuthorizedClient($apiKey, $baseUri);

        $this->criminalCase = new CriminalCase();
        $this->courtCase = new CourtCase();
        $this->institution = new Institution();
    }

    protected function initializeModel(string $modelName)
    {
        $this->$modelName->setClient($this->authorizedClient);

        return $this->$modelName;
    }

    public function criminalCase(): ?CriminalCase
    {
        return $this->initializeModel(__FUNCTION__);
    }

    public function courtCase(): ?CourtCase
    {
        return $this->initializeModel(__FUNCTION__);
    }

    public function institution(): ?Institution
    {
        return $this->initializeModel(__FUNCTION__);
    }
}
