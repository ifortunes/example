<?php

namespace App\Prometheus\Sections\Cars\Actions\Rest;

use App\Prometheus\Sections\Cars\Tasks\Rest\UpdateTask;
use App\Prometheus\Sections\Cars\DTO\UpdateDTO;

class UpdateAction
{
    /**
     * @param UpdateDTO $dto
     * @return array
     */
    public function run(UpdateDTO $dto): array
    {
        return app(UpdateTask::class)
            ->run($dto);
    }
}
