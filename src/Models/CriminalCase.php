<?php

namespace Javaabu\CriminalJusticeSectorDataShare\Models;

use Javaabu\CriminalJusticeSectorDataShare\Http\AuthorizedClient;

class CriminalCase implements Model
{
    use IsModel;

    private AuthorizedClient $client;

    public function __construct(AuthorizedClient $client)
    {
        $this->client = $client;
    }

    public function urlResourceName(): string
    {
        return 'criminal-cases';
    }
}
