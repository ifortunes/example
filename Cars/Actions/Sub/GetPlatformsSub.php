<?php

namespace App\Prometheus\Sections\Cars\Actions\Sub;

use App\Prometheus\Sections\Platforms\Actions\GetPlatformsAction;

class GetPlatformsSub
{
    public function run()
    {
        return app(GetPlatformsAction::class)
            ->run();
    }
}
