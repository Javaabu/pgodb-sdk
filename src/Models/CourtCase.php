<?php

namespace Javaabu\PgoDB\Models;

class CourtCase implements Model
{
    use IsModel;

    public function __construct()
    {
    }

    protected function initializeNestedModel(string $className, string $classInstance): ?NestedModel
    {
        if (! $this->id) {
            return null;
        }

        /** @var NestedModel $classInstance */
        $this->$classInstance = new $className(CourtCase::class, $this->id);
        $this->$classInstance->setClient($this->authorizedClient);

        return $this->$classInstance;
    }

    public function assignedProsecutor(): ?NestedModel
    {
        return $this->initializeNestedModel(AssignedProsecutor::class, __FUNCTION__);
    }

    public function assignedJudge(): ?NestedModel
    {
        return $this->initializeNestedModel(AssignedJudge::class, __FUNCTION__);
    }

    public function assignedLawyer(): ?NestedModel
    {
        return $this->initializeNestedModel(AssignedLawyer::class, __FUNCTION__);
    }

    public function recommendation(): ?NestedModel
    {
        return $this->initializeNestedModel(Recommendation::class, __FUNCTION__);
    }

    public function action(): ?NestedModel
    {
        return $this->initializeNestedModel(Action::class, __FUNCTION__);
    }

    public function courtProceeding(): ?NestedModel
    {
        return $this->initializeNestedModel(CourtProceeding::class, __FUNCTION__);
    }

    public function defendant(): ?NestedModel
    {
        return $this->initializeNestedModel(Defendant::class, __FUNCTION__);
    }

    public function courtOrder(): ?NestedModel
    {
        return $this->initializeNestedModel(CourtOrder::class, __FUNCTION__);
    }

    public function detention(): ?NestedModel
    {
        return $this->initializeNestedModel(Detention::class, __FUNCTION__);
    }

    public function victim(): ?NestedModel
    {
        return $this->initializeNestedModel(Victim::class, __FUNCTION__);
    }

    public static function urlResourceName(): string
    {
        return 'court-cases';
    }
}
