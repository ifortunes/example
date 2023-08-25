<?php

namespace App\Prometheus\Sections\Cars\Tasks\Rest;

use App\Prometheus\Sections\Cars\Entities\BaseEntity;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class CreateTask
{
    /**
     * @return array
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function run(): array
    {
        return app(BaseEntity::class)
            ->get();
    }
}
