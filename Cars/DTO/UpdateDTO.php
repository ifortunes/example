<?php

namespace App\Prometheus\Sections\Cars\DTO;

use Illuminate\Support\Str;

class UpdateDTO
{
    public function __construct(
        private int $id,
        private array $model,
        private array $options,
        private array $images,
    ){}

    public function getId(): int
    {
        return $this->id;
    }

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
