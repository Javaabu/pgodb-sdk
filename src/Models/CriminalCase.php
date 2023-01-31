<?php

namespace Javaabu\PgoDB\Models;

class CriminalCase implements Model
{
    use IsModel;

    protected ?string $id;

    protected Complainant $complainant;
    protected AssignedLawyer $assignedLawyer;
    protected AssignedProsecutor $assignedProsecutor;
    protected Action $action;
    protected Recommendation $recommendation;


    public function __construct()
    {
    }

    protected function initializeNestedModel(string $className, string $classInstance): ?NestedModel
    {
        if (!$this->id) {
            return null;
        }

        /** @var NestedModel $classInstance */
        $this->$classInstance = new $className(CriminalCase::class, $this->id);
        $this->$classInstance->setClient($this->authorizedClient);
        return $this->$classInstance;
    }

    public function assignedProsecutor(): ?NestedModel
    {
        return $this->initializeNestedModel(AssignedProsecutor::class, __FUNCTION__);
    }

    public function assignedLawyer(): ?NestedModel
    {
        return $this->initializeNestedModel(AssignedLawyer::class, __FUNCTION__);
    }

    public function complainant(): ?NestedModel
    {
        return $this->initializeNestedModel(Complainant::class, __FUNCTION__);
    }

    public function recommendation(): ?NestedModel
    {
        return $this->initializeNestedModel(Recommendation::class, __FUNCTION__);
    }

    public function action() : ?NestedModel
    {
        return $this->initializeNestedModel(Action::class, __FUNCTION__);
    }

    public static function urlResourceName(): string
    {
        return 'criminal-cases';
    }
}
