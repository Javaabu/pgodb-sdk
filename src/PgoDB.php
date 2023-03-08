<?php

namespace Javaabu\PgoDB;

use Javaabu\PgoDB\Http\AuthorizedClient;
use Javaabu\PgoDB\Models\ActionType;
use Javaabu\PgoDB\Models\CaseType;
use Javaabu\PgoDB\Models\Company;
use Javaabu\PgoDB\Models\Country;
use Javaabu\PgoDB\Models\CourtCase;
use Javaabu\PgoDB\Models\CourtOrderType;
use Javaabu\PgoDB\Models\CrimeType;
use Javaabu\PgoDB\Models\CriminalCase;
use Javaabu\PgoDB\Models\EducationalLevel;
use Javaabu\PgoDB\Models\Individual;
use Javaabu\PgoDB\Models\Institution;
use Javaabu\PgoDB\Models\Judge;
use Javaabu\PgoDB\Models\Lawyer;
use Javaabu\PgoDB\Models\VictimCategory;

class PgoDB
{
    protected AuthorizedClient $authorizedClient;

    public function __construct(string $apiKey,
                                string $baseUri = 'https://pgodb.javaabu.net/api/v1/')
    {
        $this->authorizedClient = new AuthorizedClient($apiKey, $baseUri);
    }

    public function criminalCase(): ?CriminalCase
    {
        $criminal_case = new CriminalCase();
        $criminal_case->setClient($this->authorizedClient);

        return $criminal_case;
    }

    public function courtCase(): ?CourtCase
    {
        $court_case = new CourtCase();
        $court_case->setClient($this->authorizedClient);

        return $court_case;
    }

    public function institution(): ?Institution
    {
        $institution = new Institution();
        $institution->setClient($this->authorizedClient);

        return $institution;
    }

    public function crimeType(): ?CrimeType
    {
        $crime_type = new CrimeType();
        $crime_type->setClient($this->authorizedClient);

        return $crime_type;
    }

    public function caseType(): ?CaseType
    {
        $case_type = new CaseType();
        $case_type->setClient($this->authorizedClient);

        return $case_type;
    }

    public function actionType(): ?ActionType
    {
        $action_type = new ActionType();
        $action_type->setClient($this->authorizedClient);

        return $action_type;
    }

    public function company(): ?Company
    {
        $company = new Company();
        $company->setClient($this->authorizedClient);

        return $company;
    }

    public function individual(): ?Individual
    {
        $individual = new Individual();
        $individual->setClient($this->authorizedClient);

        return $individual;
    }

    public function judge(): ?Judge
    {
        $judge = new Judge();
        $judge->setClient($this->authorizedClient);

        return $judge;
    }

    public function lawyer(): ?Lawyer
    {
        $lawyer = new Lawyer();
        $lawyer->setClient($this->authorizedClient);

        return $lawyer;
    }

    public function educationalLevel(): ?EducationalLevel
    {
        $educational_level = new EducationalLevel();
        $educational_level->setClient($this->authorizedClient);

        return $educational_level;
    }

    public function victimCategory(): ?VictimCategory
    {
        $victim_category = new VictimCategory();
        $victim_category->setClient($this->authorizedClient);

        return $victim_category;
    }

    public function courtOrderType(): ?CourtOrderType
    {
        $court_order_type = new CourtOrderType();
        $court_order_type->setClient($this->authorizedClient);

        return $court_order_type;
    }

    public function country(): ?Country
    {
        $country = new Country();
        $country->setClient($this->authorizedClient);

        return $country;
    }
}
