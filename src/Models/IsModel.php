<?php

namespace Javaabu\PgoDB\Models;

use Javaabu\PgoDB\Http\AuthorizedClient;

trait IsModel
{
    private AuthorizedClient $authorizedClient;

    protected array $sorts = [];

    protected array $filters = [];

    public function index(): array
    {
        $endpoint = $this->getUrl();

        $this->clearAllVariables();

        if ($response = $this->authorizedClient->get($endpoint)) {
            return json_decode($response, true);
        }

        return [];
    }

    public function selectById(string $identifier): array
    {
        return $this
            ->addFilter('search', $identifier)
            ->filter();
    }

    public function sort(): array
    {
        if (! $endpoint = $this->sortQuery()) {
            return [];
        }
        $this->clearAllVariables();
        if ($response = $this->authorizedClient->get($endpoint)) {
            return json_decode($response, true);
        }

        return [];
    }

    public function filter(): array
    {
        if (! $endpoint = $this->filterQuery()) {
            return [];
        }

        $this->clearAllVariables();

        if ($response = $this->authorizedClient->get($endpoint)) {
            return json_decode($response, true);
        }

        return [];
    }

    public function whereId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function addFilter(string $key, ?string ...$value): self
    {
        $query_value = implode(',', $value);
        $this->filters[] = "filter[$key]=$query_value";

        return $this;
    }

    public function addSortByAsc(string $key): self
    {
        $this->sorts[] = $key;

        return $this;
    }

    public function addSortByDesc(string $key): self
    {
        $this->sorts[] = "-$key";

        return $this;
    }

    protected function sortQuery(): ?string
    {
        $endpoint = $this->getUrl();
        if (empty($this->sorts)) {
            return $endpoint;
        }
        $query = implode(',', $this->sorts);

        return $endpoint."?sort=$query";
    }

    protected function filterQuery(): ?string
    {
        $endpoint = $this->getUrl();
        if (empty($this->filters)) {
            return $endpoint;
        }
        $query = implode('&', $this->filters);

        return $endpoint.'?'.$query;
    }

    protected function getUrl(): string
    {
        $endpoint = '';
        if (isset($this->parentId) && isset($this->parentClass)) {
            /** @var CriminalCase $parent_class */
            $parent_class = $this->parentClass;
            $parent_class = $parent_class::urlResourceName();
            $endpoint .= "$parent_class/{$this->parentId}/";
        }

        if (! isset($this->id)) {
            return $endpoint.$this->urlResourceName();
        }

        return $endpoint.$this->urlResourceName()."/{$this->id}";
    }

    public function store(array $data): array
    {
        $endpoint = $this->getUrl();
        if ($response = $this->authorizedClient->post($endpoint, $data)) {
            return json_decode($response, true);
        }

        return [];
    }

    public function update(array $data): array
    {
        $endpoint = $this->getUrl();
        if ($response = $this->authorizedClient->patch($endpoint, $data)) {
            return json_decode($response, true);
        }

        return [];
    }

    public function delete(): array
    {
        $endpoint = $this->getUrl();

        return json_decode($this->authorizedClient->delete($endpoint));
    }

    private function clearAllVariables(): void
    {
        $this->sorts = [];
        $this->filters = [];
        $this->id = null;
        if (isset($this->parentId)) {
            $this->parentId = null;
        }
        if (isset($this->parentClass)) {
            $this->parentClass = null;
        }
    }

    public function setClient(AuthorizedClient $client): void
    {
        $this->authorizedClient = $client;
    }

    public function getClient(): AuthorizedClient
    {
        return $this->authorizedClient;
    }
}
