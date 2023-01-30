<?php

namespace Javaabu\PgoDB\Models;

interface Model
{
    public static function urlResourceName(): string;

    public function update(array $data): array;

    public function delete(): array;

    public function store(array $data): array;

    public function addFilter(string $key, string $value): self;

    public function whereId(string $id): self;

    public function filter(): array;

    public function selectId(string $identifier): array;

    public function index(): array;
}
