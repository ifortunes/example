<?php

namespace App\Prometheus\Sections\Cars\Actions\Sub;

use App\Prometheus\Sections\Manufacturers\Actions\Custom\GetManufacturerAction;

class GetManufacturerSub
{
    /**
     * @param int $id
     * @return object
     */
    public function run(int $id): object
    {
        return app(GetManufacturerAction::class)
            ->run($id);
    }
}
