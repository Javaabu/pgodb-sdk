<?php

namespace Javaabu\CriminalJusticeSectorDataShare\Util;

class UrlQuery
{

    public function __construct(
        protected string  $url,
        protected array   $sorts = [],
        protected array   $filters = [],
        protected ?string $page = null
    )
    {
    }

    public function addFilter(string $filterKey, string $value): void
    {
        $this->filters[] = "filter[$filterKey]=$value";
    }

    public function selectPage(string $page): void
    {
        $this->page = $page;
    }


    public function addSortByAscending(string $key): void
    {
        $this->sorts[] = $key;
    }

    public function addSortByDescending(string $key): void
    {
        $this->sorts[] = "-$key";
    }

    public function getPageQuery(): string
    {
        if (!$this->page) {
            return "";
        }

        return "page={$this->page}";
    }

    public function getSortQuery(): string
    {
        if (empty($this->sorts)) {
            return "";
        }

        $sortKeys = implode(",", $this->sorts);
        return "sort=" . $sortKeys;
    }

    public function getFilterQuery(): string
    {
        if (empty($this->filters)) {
            return "";
        }

        return implode("&", $this->filters);
    }

    public function hasSorts(): bool
    {
        return !empty($this->sorts);
    }

    public function hasFilters(): bool
    {
        return !empty($this->filters);
    }

    public function hasPage(): bool
    {
        return $this->page != null;
    }

    public function getQuery(string $endpoint): string
    {
        if ($this->hasSorts()) {
            $endpoint .= '?' . $this->getSortQuery();
        } else if ($this->hasFilters()) {
            $endpoint .= '?' . $this->getFilterQuery();
        } else if ($this->hasPage()) {
            $endpoint .= '?' . $this->getPageQuery();
        }

        return $endpoint;
    }
}
