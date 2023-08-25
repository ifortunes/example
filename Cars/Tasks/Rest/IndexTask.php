<?php

namespace App\Prometheus\Sections\Cars\Tasks\Rest;

use App\Prometheus\Sections\Cars\DTO\IndexDTO;
use App\Prometheus\Sections\Cars\Models\Car;
use App\Prometheus\Sections\Cars\UI\Resources\IndexCollection;

class IndexTask
{
    public function run(IndexDTO $dto)
    {
        $cars = Car::filter($dto->getFilter())
            ->paginate(20, ['*'], 'page', $dto->getPage());

        return new IndexCollection(
            $cars
        );
    }
}
