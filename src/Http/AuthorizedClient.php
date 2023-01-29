<?php

namespace Javaabu\CriminalJusticeSectorDataShare\Http;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class AuthorizedClient
{
    private Client $client;

    public function __construct(
        protected string $baseUri,
        protected string $accessToken)
    {
        $this->client = new Client([
            'base_uri' => $this->baseUri,
            'headers' => [
                'Authorization' => 'Bearer '.$this->accessToken,
            ],
        ]);
    }

    public function delete(string $endpoint): bool
    {
        try {
            $response = $this->client->delete($endpoint);
            if ($response->getStatusCode() != 200) {
                return json_encode([
                    'message' => 'An error occurred in DELETE . '.$response->getBody(),
                    'status' => $response->getStatusCode(),
                ]);
            }

            return $response->getBody()->getContents();
        } catch (GuzzleException $e) {
            return json_encode([
                'message' => $e->getMessage(),
                'status' => 500,
            ]);
        }
    }

    public function patch(string $endpoint, array $data): string
    {
        try {
            $response = $this->client->patch($endpoint,
                ['body' => json_encode($data, true)]);
            if ($response->getStatusCode() != 200) {
                return json_encode([
                    'message' => 'An error occurred in PATCH. '.$response->getBody(),
                    'status' => $response->getStatusCode(),
                ]);
            }

            return $response->getBody()->getContents();
        } catch (GuzzleException $e) {
            return json_encode([
                'message' => $e->getMessage(),
                'status' => 500,
            ]);
        }
    }

    public function post(string $endpoint, array $data): string
    {
        try {
            $response = $this->client->post($endpoint,
                ['body' => json_encode($data, true)]);
            if ($response->getStatusCode() != 200) {
                return json_encode([
                    'message' => 'An error occurred in POST. '.$response->getBody(),
                    'status' => $response->getStatusCode(),
                ]);
            }

            return $response->getBody()->getContents();
        } catch (GuzzleException $e) {
            return json_encode([
                'message' => $e->getMessage(),
                'status' => 500,
            ]);
        }
    }

    public function get(string $endpoint, array $filters = []): string
    {
        try {
            $response = $this->client->get($endpoint, $filters);
            if ($response->getStatusCode() != 200) {
                return json_encode([
                    'message' => 'An error occurred in GET. '.$response->getBody(),
                    'status' => $response->getStatusCode(),
                ]);
            }

            return $response->getBody()->getContents();
        } catch (GuzzleException $e) {
            return json_encode([
                'message' => $e->getMessage(),
                'status' => 500,
            ]);
        }
    }
}
