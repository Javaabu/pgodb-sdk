<?php

namespace Javaabu\CriminalJusticeSectorDataShare\Models;

use Javaabu\CriminalJusticeSectorDataShare\Http\AuthorizedClient;

class CourtCase implements Model
{
    use IsModel;

    private AuthorizedClient $client;

    public function __construct(string $baseUri, string $accessToken)
    {
        $this->client = new AuthorizedClient($baseUri, $accessToken);
    }

    public function urlResourceName(): string
    {
        return 'court-cases';
    }
}
