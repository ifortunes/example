<?php

namespace App\Prometheus\Sections\Cars\Actions\Sub;

use App\Prometheus\Sections\Users\Actions\Custom\GetUsersAction;

class GetUsersSub
{
    public function run()
    {
        return app(GetUsersAction::class)
            ->run();
    }
}
