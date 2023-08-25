<?php

namespace App\Prometheus\Sections\Cars\Actions\Rest;

use App\Prometheus\Sections\Cars\Tasks\Rest\CreateTask;

class CreateAction
{
    public function run()
    {
        return app(CreateTask::class)
            ->run();
    }
}
