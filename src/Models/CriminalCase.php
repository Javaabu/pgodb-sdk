<?php

namespace Javaabu\PgoDB\Models;

class CriminalCase extends Model
{
    protected ?string $id;

    public function assignedProsecutor(): ?AssignedProsecutor
    {
        if (! $this->id) {
            return null;
        }

        $assigned_prosecutor = new AssignedProsecutor(CriminalCase::class, $this->id);
        $assigned_prosecutor->setClient($this->authorizedClient);

        return $assigned_prosecutor;
    }

    public function assignedLawyer(): ?AssignedLawyer
    {
        if (! $this->id) {
            return null;
        }

        $assigned_lawyer = new AssignedLawyer(CriminalCase::class, $this->id);
        $assigned_lawyer->setClient($this->authorizedClient);

        return $assigned_lawyer;
    }

    public function complainant(): ?Complainant
    {
        if (! $this->id) {
            return null;
        }

        $complainant = new Complainant(CriminalCase::class, $this->id);
        $complainant->setClient($this->authorizedClient);

        return $complainant;
    }

    public function recommendation(): ?Recommendation
    {
        if (! $this->id) {
            return null;
        }

        $recommendation = new Recommendation(CriminalCase::class, $this->id);
        $recommendation->setClient($this->authorizedClient);

        return $recommendation;
    }

    public function courtOrder(): ?NestedModel
    {
        if (! $this->id) {
            return null;
        }

        $court_order = new CourtOrder(CriminalCase::class, $this->id);
        $court_order->setClient($this->authorizedClient);

        return $court_order;
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

    public function victim(): ?Victim
    {
        if (! $this->id) {
            return null;
        }

        $victim = new Victim(CriminalCase::class, $this->id);
        $victim->setClient($this->authorizedClient);

        return $victim;
    }

    public function suspect(): ?Suspect
    {
        if (! $this->id) {
            return null;
        }

        $suspect = new Suspect(CriminalCase::class, $this->id);
        $suspect->setClient($this->authorizedClient);

        return $suspect;
    }

    public static function urlResourceName(): string
    {
        return 'criminal-cases';
    }
}
