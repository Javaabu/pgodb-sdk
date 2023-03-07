<?php

namespace Javaabu\PgoDB\Models;

abstract class NestedModel extends Model
{
    protected ?string $parentClass;

    protected ?string $parentId;

    public function __construct(string $parentClass,
                                string $parentId)
    {
        $this->parentClass = $parentClass;
        $this->parentId = $parentId;
    }
}
