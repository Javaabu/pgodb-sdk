<?php

namespace Javaabu\CriminalJusticeSectorDataShare\Models;

trait IsModel
{

    public function index() : array
    {
        // Will get a paginated view set to the first page by default
        return $this->get();
    }

    public function indexPage(string $page) : array
    {
        return $this->get(['page' => $page]);
    }

    public function selectById(string $identifier) : array
    {
        $endpoint = $this->urlResourceName() . '?filter[search]='. $identifier;
        return json_decode($this->client->get($endpoint), true);
    }

    public function update(string $identifier, array $data) : array
    {
        return $this->patch($data, $identifier);
    }


    protected function get(array $filters = []): array
    {
        $query = $this->prepareQueryFromFilters($filters);
        $endpoint = $this->urlResourceName() . $query;
        if ($response = $this->client->get($endpoint)) {
            return json_decode($response, true);
        }
        return [];
    }


    protected function post(array $body): array
    {
        $endpoint = $this->urlResourceName();
        if ($response = $this->client->post($endpoint, $body)) {
            return json_decode($response, true);
        }
        return [];
    }

    protected function patch(array $body, string $id): array
    {
        $endpoint = $this->urlResourceName() . "/" . $id;
        if ($response = $this->client->patch($endpoint, $body)) {
            return json_decode($response, true);
        }
        return [];
    }

    protected function delete(string $endpoint, string $id)
    {
        $endpoint = $this->urlResourceName() . "/" . $id;
        return json_decode($this->client->delete($endpoint));
    }

    protected function prepareQueryFromFilters(array $filters = []): string
    {
        if (empty($filters)) {
            return '';
        }

        $query = '?';
        $first = true;
        foreach ($filters as $key => $value) {
            if ($key != 'filter') {
                if ($first) {
                    $query .= "$key=$value";
                    $first = !$first;
                } else {
                    $query .= "&$key=$value";
                }
            }
        }

        return $query;
    }
}
