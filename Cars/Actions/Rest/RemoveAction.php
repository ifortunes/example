<?php

namespace App\Prometheus\Sections\Cars\Actions\Rest;

use App\Prometheus\Sections\Cars\Tasks\Rest\RemoveTask;

class RemoveAction
{
    /**
     * @param int $id
     * @return array
     */
    public function run(int $id): array
    {
        return app(RemoveTask::class)
            ->run($id);
    }
}
