<?php

namespace App\Prometheus\Sections\Cars\Actions\Custom;

use App\Prometheus\Sections\Cars\Tasks\Custom\GetSelectedOptionsTask;

class GetSelectedOptionsAction
{
    /**
     * @param object|null $model
     * @return array
     */
    public function run(?object $model = null): array
    {
        return app(GetSelectedOptionsTask::class)
            ->run($model);
    }
}
