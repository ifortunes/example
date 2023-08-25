<?php

namespace App\Prometheus\Sections\Cars\Actions\Rest;

use App\Prometheus\Sections\Cars\Tasks\Rest\ShowTask;
use App\Prometheus\Sections\Cars\UI\Resources\CarResource;

class ShowAction
{
    /**
     * @param int $id
     * @return CarResource
     */
    public function run(int $id): CarResource
    {
        return app(ShowTask::class)
            ->run($id);
    }
}
