<?php

namespace App\Prometheus\Sections\Cars\Tasks\Rest;

use App\Prometheus\Sections\Cars\Models\Car;
use App\Prometheus\Sections\Cars\UI\Resources\CarResource;

class ShowTask
{
    /**
     * @param int $id
     * @return CarResource
     */
    public function run(int $id): CarResource
    {
        return new CarResource(
            Car::findOrFail($id)
        );
    }
}
