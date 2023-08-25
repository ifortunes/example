<?php

namespace App\Prometheus\Sections\Cars\UI\Resources;

use App\Prometheus\Sections\Cars\Entities\BaseEntity;

use Illuminate\Http\Resources\Json\JsonResource;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class CarResource extends JsonResource
{
    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function toArray($request): array
    {
        return app(BaseEntity::class)
            ->get($this);
    }
}
