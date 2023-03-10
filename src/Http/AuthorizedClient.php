<?php

namespace Javaabu\PgoDB\Http;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class AuthorizedClient
{
    private Client $client;

    public function __construct(string $apiKey, string $baseUri)
    {
        $this->client = new Client([
            'base_uri' => $baseUri,
            'headers' => [
                'Authorization' => 'Bearer '.$apiKey,
                'Content-Type' => 'application/json',
            ],
        ]);
    }

    public function delete(string $endpoint)
    {
        try {
            $response = $this->client->delete($endpoint);
            if ($response->getStatusCode() != 200) {
                return json_encode([
                    'errors' => [
                        'message' => 'An error occurred in DELETE . '.$response->getBody(),
                        'status' => $response->getStatusCode(),
                    ],
                ]);
            }

            return $response->getBody();
        } catch (GuzzleException $e) {
            return json_encode([
                'errors' => [
                    'message' => $e->getMessage(),
                    'status' => 500,
                ],
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
                    'errors' => [
                        'message' => 'An error occurred in PATCH. '.$response->getBody(),
                        'status' => $response->getStatusCode(),
                    ],
                ]);
            }

            return $response->getBody();
        } catch (GuzzleException $e) {
            return json_encode([
                'errors' => [
                    'message' => $e->getMessage(),
                    'status' => 500,
                ],
            ]);
        }
    }

    public function post(string $endpoint, array $data): string
    {
        try {
            $response = $this->client->post($endpoint,
                ['body' => json_encode($data, true)]);
            if ($response->getStatusCode() != 200) {
                return json_encode(
                    [
                        'errors' => [
                            'message' => 'An error occurred in POST. '.$response->getBody(),
                            'status' => $response->getStatusCode(),
                        ],
                    ]);
            }

            return $response->getBody();
        } catch (GuzzleException $e) {
            return json_encode([
                'errors' => [
                    'message' => $e->getMessage(),
                    'status' => 500,
                ],
            ]);
        }
    }

    public function get(string $endpoint, array $options = []): string
    {
        try {
            $response = $this->client->get($endpoint, $options);
            if ($response->getStatusCode() != 200) {
                return json_encode([
                    'errors' => [
                        'message' => 'An error occurred in GET. '.$response->getBody(),
                        'status' => $response->getStatusCode(),
                    ],
                ]);
            }

            return strval($response->getBody());
        } catch (GuzzleException $e) {
            return json_encode([
                'errors' => [
                    'message' => $e->getMessage(),
                    'status' => 500,
                ],
            ]);
        }
    }
}
