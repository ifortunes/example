<?php

namespace App\Prometheus\Sections\Cars\Actions\Sub;

use App\Prometheus\Sections\BodyTypes\Actions\Custom\GetBodyTypesAction;

class GetBodyTypesSub
{
    public function run()
    {
        return app(GetBodyTypesAction::class)
            ->run();
    }
}
