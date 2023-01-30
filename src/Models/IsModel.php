<?php

namespace Javaabu\CriminalJusticeSectorDataShare\Models;

use Javaabu\CriminalJusticeSectorDataShare\Util\UrlQuery;

trait IsModel
{
    public function index(?UrlQuery $query = null): array
    {
        if (! $query) {
            return $this->get()['data'];
        }

        $endpoint = $this->urlResourceName();
        $endpoint = $query->getQuery($endpoint);

        return $this->get($endpoint)['data'];
    }

    public function indexPage(string $page): array
    {
        $query = $this->queryBuilder();
        $query->selectPage($page);

        return $this->index($query);
    }

    public function selectById(string $identifier): array
    {
        $query = $this->queryBuilder();
        $query->addFilter('search', $identifier);

        return $this->index($query);
    }

    public function deleteById(string $identifier): array
    {
        return $this->delete($this->urlResourceName(), $identifier);
    }

    public function updateById(string $identifier, array $data): array
    {
        return $this->patch($identifier, $data);
    }

    public function store(array $data): array
    {
        return $this->post($data);
    }

    protected function queryBuilder(): UrlQuery
    {
        return new UrlQuery($this->urlResourceName());
    }

    protected function get(string $endpoint = null): array
    {
        if (! $endpoint) {
            $endpoint = $this->urlResourceName();
        }

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

    protected function patch(string $id, array $body): array
    {
        $endpoint = $this->urlResourceName().'/'.$id;
        if ($response = $this->client->patch($endpoint, $body)) {
            return json_decode($response, true);
        }

        return [];
    }

    protected function delete(string $endpoint, string $id)
    {
        $endpoint = $this->urlResourceName().'/'.$id;

        return json_decode($this->client->delete($endpoint));
    }
}
