<?php

namespace Javaabu\PgoDB\Models;

use Javaabu\PgoDB\Http\AuthorizedClient;

trait IsModel
{
    protected array $sorts = [];
    protected array $filters = [];

    public function index(): array
    {
        $endpoint = $this->getUrl();

        $this->clearAllVariables();

        if ($response = (new AuthorizedClient())->get($endpoint)) {
            return json_decode($response, true)["data"];
        }
        return [];
    }

    public function selectId(string $identifier): array
    {
        return $this
            ->addFilter("search", $identifier)
            ->filter();
    }

    public function filter(): array
    {
        if (! $endpoint = $this->filterQuery()) {
            return [];
        }

        $this->clearAllVariables();

        if ($response = (new AuthorizedClient())->get($endpoint)) {
            return json_decode($response, true);
        }
        return [];
    }

    public function whereId(string $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function addFilter(string $key, string $value): self
    {
        $this->filters[] = "filter[$key]=$value";
        return $this;
    }

    protected function filterQuery(): ?string
    {
        $endpoint = $this->getUrl();
        if (empty($this->filters)) {
            return $endpoint;
        }
        $query = implode("&", $this->filters);
        return $endpoint . "?$query";
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
            return $endpoint . $this->urlResourceName();
        }

        return $endpoint . $this->urlResourceName() ."/{$this->id}";
    }


    public function store(array $data): array
    {
        $endpoint = $this->getUrl();
        if ($response = (new AuthorizedClient())->post($endpoint, $data)) {
           return json_decode($response, true);
        }
        return [];
    }

    public function update(array $data): array
    {
        $endpoint = $this->getUrl();
        if ($response = (new AuthorizedClient())->patch($endpoint, $data)) {
            return json_decode($response, true);
        }
        return [];
    }


    public function delete() : array
    {
        $endpoint = $this->getUrl();
        return json_decode((new AuthorizedClient())->delete($endpoint));
    }

    private function clearAllVariables() : void
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
}
