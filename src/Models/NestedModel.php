<?php

namespace Javaabu\PgoDB\Models;

abstract class NestedModel implements Model
{
    public function __construct(protected ?string $parentClass,
                                protected ?string $parentId)
    {

    }
}
