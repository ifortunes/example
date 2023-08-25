<?php

namespace App\Prometheus\Sections\Cars\Actions\Rest;

use App\Prometheus\Sections\Cars\Tasks\Rest\StoreTask;
use App\Prometheus\Sections\Cars\DTO\StoreDTO;

class StoreAction
{
    /**
     * @param StoreDTO $dto
     * @return array
     */
    public function run(StoreDTO $dto): array
    {
        return app(StoreTask::class)
            ->run($dto);
    }
}
