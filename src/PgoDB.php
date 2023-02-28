<?php

namespace Javaabu\PgoDB;

use Javaabu\PgoDB\Http\AuthorizedClient;
use Javaabu\PgoDB\Models\Action;
use Javaabu\PgoDB\Models\ActionType;
use Javaabu\PgoDB\Models\AssignedJudge;
use Javaabu\PgoDB\Models\AssignedLawyer;
use Javaabu\PgoDB\Models\CaseType;
use Javaabu\PgoDB\Models\City;
use Javaabu\PgoDB\Models\Company;
use Javaabu\PgoDB\Models\Country;
use Javaabu\PgoDB\Models\CourtCase;
use Javaabu\PgoDB\Models\CourtOrderType;
use Javaabu\PgoDB\Models\CrimeType;
use Javaabu\PgoDB\Models\CriminalCase;
use Javaabu\PgoDB\Models\DefendantCharge;
use Javaabu\PgoDB\Models\Detention;
use Javaabu\PgoDB\Models\EducationalLevel;
use Javaabu\PgoDB\Models\Individual;
use Javaabu\PgoDB\Models\Institution;
use Javaabu\PgoDB\Models\Judge;
use Javaabu\PgoDB\Models\Lawyer;
use Javaabu\PgoDB\Models\State;
use Javaabu\PgoDB\Models\Victim;
use Javaabu\PgoDB\Models\VictimCategory;

class PgoDB
{
    protected AuthorizedClient $authorizedClient;
    protected CriminalCase $criminalCase;
    protected CourtCase $courtCase;
    protected Institution $institution;
    protected CrimeType $crimeType;
    protected CaseType $caseType;
    protected CourtOrderType $courtOrderType;
    protected ActionType $actionType;
    protected Company $company;
    protected EducationalLevel $educationalLevel;
    protected VictimCategory $victimCategory;
    // individuals
    protected Individual $individual;
    protected Lawyer $lawyer;
    protected Judge $judge;
    protected Country $country;

    public function __construct(string $apiKey, string $baseUri)
    {
        $this->authorizedClient = new AuthorizedClient($apiKey, $baseUri);

        $this->criminalCase = new CriminalCase();
        $this->courtCase = new CourtCase();
        $this->institution = new Institution();
        $this->crimeType = new CrimeType();
        $this->caseType = new CaseType();
        $this->courtOrderType = new CourtOrderType();
        $this->actionType = new ActionType();
        $this->company = new Company();
        $this->individual = new Individual();
        $this->educationalLevel = new EducationalLevel();
        $this->victimCategory = new VictimCategory();
        $this->country = new Country();
        $this->lawyer = new Lawyer();
        $this->judge = new Judge();

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

    public function crimeType() : ?CrimeType
    {
        return $this->initializeModel(__FUNCTION__);
    }

    public function caseType() : ?CaseType
    {
        return $this->initializeModel(__FUNCTION__);
    }

    public function actionType() : ?ActionType
    {
        return $this->initializeModel(__FUNCTION__);
    }

    public function company() : ?Company
    {
        return $this->initializeModel(__FUNCTION__);
    }

    public function individual() : ?Individual
    {
        return $this->initializeModel(__FUNCTION__);
    }

    public function judge() : ?Judge
    {
        return $this->initializeModel(__FUNCTION__);
    }

    public function lawyer() : ?Lawyer
    {
        return $this->initializeModel(__FUNCTION__);
    }

    public function educationalLevel() : ?EducationalLevel
    {
        return $this->initializeModel(__FUNCTION__);
    }

    public function victimCategory() : ?VictimCategory
    {
        return $this->initializeModel(__FUNCTION__);
    }

    public function courtOrderType() : ?CourtOrderType
    {
        return $this->initializeModel(__FUNCTION__);
    }

    public function country() : ?Country
    {
        return $this->initializeModel(__FUNCTION__);
    }


}
