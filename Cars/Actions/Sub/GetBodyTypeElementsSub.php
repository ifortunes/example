<?php

namespace App\Prometheus\Sections\Cars\Actions\Sub;

use App\Prometheus\Sections\BodyTypes\Actions\Custom\Element\GetBodyTypeElementsAction;

class GetBodyTypeElementsSub
{
    /**
     * @return object
     */
    public function run(): object
    {
        return app(GetBodyTypeElementsAction::class)
            ->run();
    }
}
