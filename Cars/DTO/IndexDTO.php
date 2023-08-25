<?php

namespace App\Prometheus\Sections\Cars\DTO;

class IndexDTO
{
    public function __construct(
        private int $page,
        private string|null $search,
        private  $filter
    ){}

    public function getSearch(): string
    {
        return $this->search;
    }

    public function getFilter()
    {
        return $this->filter;
    }

    public function getPage(): int
    {
        return $this->page;
    }
}
