<?php

namespace App\Prometheus\Sections\Cars\Actions\Sub;

use App\Prometheus\Sections\Manufacturers\Actions\Custom\GetManufacturersAction;

class GetManufacturersSub
{
    /**
     * @return object
     */
    public function run(): object
    {
        return app(GetManufacturersAction::class)
            ->run();
    }
}
