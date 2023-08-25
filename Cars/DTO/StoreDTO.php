<?php

namespace App\Prometheus\Sections\Cars\DTO;

use Illuminate\Support\Str;

class StoreDTO
{
    public function __construct(
        private array $model,
        private array $options,
        private array $images,
    ){}

    public function getModel(): array
    {
        return $this->model;
    }

    public function getOptions(): array
    {
        return $this->options;
    }

    public function getImages(): array
    {
        return $this->images;
    }
}
