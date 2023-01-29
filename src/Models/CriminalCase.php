<?php

namespace Javaabu\CriminalJusticeSectorDataShare\Models;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Javaabu\CriminalJusticeSectorDataShare\Http\AuthorizedClient;

class CriminalCase implements Model
{
    use IsModel;

    private AuthorizedClient $client;

    public function __construct(string $baseUri, string $accessToken)
    {
        $this->client = new AuthorizedClient($baseUri, $accessToken);
    }


    public function urlResourceName(): string
    {
        return 'criminal-cases';
    }
}
