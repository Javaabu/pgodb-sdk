<?php
namespace Javaabu\CriminalJusticeSectorDataShare\Models;

interface Model
{
    public function urlResourceName() : string;

    // Get the model by the given id
    public function selectById(string $identifier) : ?array;

    public function indexPage(string $page) : array;

    public function update(string $identifier, array $data) : array;

}
