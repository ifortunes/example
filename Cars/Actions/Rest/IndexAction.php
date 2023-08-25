<?php

namespace App\Prometheus\Sections\Cars\Actions\Rest;

use App\Prometheus\Sections\Cars\DTO\IndexDTO;
use App\Prometheus\Sections\Cars\Tasks\Rest\IndexTask;

class IndexAction
{
    public function run(IndexDTO $dto)
    {
        return app(IndexTask::class)
            ->run($dto);
    }
}
