<?php

namespace Javaabu\PgoDB\Models;

use Javaabu\PgoDB\Http\AuthorizedClient;

abstract class Model
{
    protected AuthorizedClient $authorizedClient;

    protected array $sorts = [];

    protected array $filters = [];

    protected bool $get_one_per_page = false;

    /**
     * Returns a list of items.
     *
     * Calls an index endpoint.
     */
    public function get()
    {
        $endpoint = $this->makeUri();
        $options = $this->getQueryParams();
        if ($this->get_one_per_page) {
            $options += [
                'per_page' => 1
            ];
        }

        if ($response = $this->authorizedClient->get($endpoint, $options)) {
            $this->clearAllVariables();
            return json_decode($response, true);
        }

        return [];
    }

    /**
     * Should return a single item
     *
     * @param string $id
     * @return array
     */
    public function find(string $id) : array
    {
        $this->get_one_per_page = true;
        $data = $this->addFilter('search', $id)->get();
        if (array_key_exists('data', $data) && !empty($data['data'])) {
            return $data['data'][0];
        }
        return [];
    }

    /**
     * Sends a delete request and returns either true or false
     *
     * @param string $id
     * @return bool
     */
    public function delete(string $id): bool
    {
        $this->id = $id;
        $delete_url = $this->makeUri();
        if ($this->authorizedClient->delete($delete_url)) {
            $this->clearAllVariables();
            return true;
        }
        return false;
    }

    /**
     * Stores a new object
     *
     * @param array $data
     * @return void
     */
    public function store(array $data) : ?array
    {
        $endpoint = $this->makeUri();
        if ($response = $this->authorizedClient->post($endpoint, $data)) {
            $this->clearAllVariables();
            return json_decode($response, true);
        }

        return [];
    }

    /**
     * Update the record
     *
     * @param array $data
     * @return void
     */
    public function update(array $data) : ?array
    {
        $endpoint = $this->makeUri();
        if ($response = $this->authorizedClient->patch($endpoint, $data)) {
            $this->clearAllVariables();
            return json_decode($response, true);
        }

        return null;
    }


    public function whereId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function addFilter(string $key, ?string $value): self
    {
        $this->filters = [
            $key => $value
        ];

        return $this;
    }


    public function addSort(string $key): self
    {
        $this->sorts[] = $key;

        return $this;
    }

    public function addSortByDesc(string $key): self
    {
        $this->sorts[] = "-$key";

        return $this;
    }

    protected function getQueryParams(): ?array
    {
        $queryParams = [];
        if (sizeof($this->sorts) > 0) {
            $sort_value = implode(',', array_merge($this->sorts));
            $queryParams[] = [
                'sort' => $sort_value
            ];
        }

        if (sizeof($this->filters) > 0) {
            $queryParams['filter'] = $this->filters;
        }

        if (sizeof($queryParams) == 0) {
            return [];
        }

        return ['query' => $queryParams];
    }


    /**
     * Prepare an API request
     *
     * @return string
     */
    protected function makeUri(): string
    {
        $endpoint = '';
        if (isset($this->parentId) && isset($this->parentClass)) {
            /** @var CriminalCase $parent_class */
            $parent_class = $this->parentClass;
            $parent_class = $parent_class::urlResourceName();
            $endpoint .= "$parent_class/{$this->cleanStringForUri($this->parentId)}/";
        }

        if (!isset($this->id)) {
            return $endpoint . $this->urlResourceName();
        }

        return $endpoint . $this->urlResourceName() . "/{$this->cleanStringForUri($this->id)}";
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

        $this->get_one_per_page = false;
    }

    public function setClient(AuthorizedClient $client): void
    {
        $this->authorizedClient = $client;
    }

    private function cleanStringForUri(string $value) : string
    {
        return urlencode(urlencode($value));
    }

}
