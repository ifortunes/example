<?php

namespace App\Prometheus\Sections\Cars\Actions\Sub;

use App\Prometheus\Sections\Options\Actions\Custom\GetOptionsAction;

class GetOptionsSub
{
    public function run()
    {
        return app(GetOptionsAction::class)
            ->run();
    }
}
