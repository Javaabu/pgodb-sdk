<?php

namespace Javaabu\PgoDB;

use Javaabu\PgoDB\Http\AuthorizedClient;
use Javaabu\PgoDB\Models\Action;
use Javaabu\PgoDB\Models\AssignedJudge;
use Javaabu\PgoDB\Models\AssignedLawyer;
use Javaabu\PgoDB\Models\AssignedProsecutor;
use Javaabu\PgoDB\Models\CourtCase;
use Javaabu\PgoDB\Models\CriminalCase;
use Javaabu\PgoDB\Models\Institution;
use Javaabu\PgoDB\Models\Model;

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
