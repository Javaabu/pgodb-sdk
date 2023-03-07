<?php

namespace Javaabu\PgoDB\Models;

class CourtCase extends Model
{
    public function assignedProsecutor(): ?AssignedProsecutor
    {
        if (! $this->id) {
            return null;
        }

        $assigned_prosecutor = new AssignedProsecutor(CourtCase::class, $this->id);
        $assigned_prosecutor->setClient($this->authorizedClient);

        return $assigned_prosecutor;
    }

    public function assignedJudge(): ?AssignedJudge
    {
        if (! $this->id) {
            return null;
        }

        $assigned_judge = new AssignedJudge(CourtCase::class, $this->id);
        $assigned_judge->setClient($this->authorizedClient);

        return $assigned_judge;
    }

    public function assignedLawyer(): ?AssignedLawyer
    {
        if (! $this->id) {
            return null;
        }

        $assigned_lawyer = new AssignedLawyer(CourtCase::class, $this->id);
        $assigned_lawyer->setClient($this->authorizedClient);

        return $assigned_lawyer;
    }

    public function recommendation(): ?Recommendation
    {
        if (! $this->id) {
            return null;
        }

        $recommendation = new Recommendation(CourtCase::class, $this->id);
        $recommendation->setClient($this->authorizedClient);

        return $recommendation;
    }

    public function action(): ?Action
    {
        if (! $this->id) {
            return null;
        }

        $action = new Action();
        $action->setClient($this->authorizedClient);

        return $action;
    }

    public function courtProceeding(): ?CourtProceeding
    {
        if (! $this->id) {
            return null;
        }

        $court_proceeding = new CourtProceeding(CourtCase::class, $this->id);
        $court_proceeding->setClient($this->authorizedClient);

        return $court_proceeding;
    }

    public function defendant(): ?Defendant
    {
        if (! $this->id) {
            return null;
        }

        $defendant = new Defendant(CourtCase::class, $this->id);
        $defendant->setClient($this->authorizedClient);

        return $defendant;
    }

    public function courtOrder(): ?NestedModel
    {
        if (! $this->id) {
            return null;
        }

        $court_order = new CourtOrder(CourtCase::class, $this->id);
        $court_order->setClient($this->authorizedClient);

        return $court_order;
    }

    public function detention(): ?NestedModel
    {
        if (! $this->id) {
            return null;
        }

        $detention = new Detention(CourtCase::class, $this->id);
        $detention->setClient($this->authorizedClient);

        return $detention;
    }

    public function victim(): ?NestedModel
    {
        if (! $this->id) {
            return null;
        }

        $victim = new Victim(CourtCase::class, $this->id);
        $victim->setClient($this->authorizedClient);

        return $victim;
    }

    public static function urlResourceName(): string
    {
        return 'court-cases';
    }
}
