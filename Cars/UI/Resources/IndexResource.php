<?php

namespace App\Prometheus\Sections\Cars\UI\Resources;

use App\Prometheus\Sections\Cars\Entities\IndexEntity;

use Illuminate\Http\Resources\Json\JsonResource;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class IndexResource extends JsonResource
{
    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function toArray($request): array
    {
        return app(IndexEntity::class)
            ->get($this);
    }
}
