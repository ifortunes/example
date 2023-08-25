<?php

namespace App\Prometheus\Sections\Cars\Actions\Sub;

use App\Prometheus\Sections\CarBrands\Actions\Custom\GetCarBrandAction;

class GetCarBrandSub
{
    /**
     * @param int $id
     * @return object
     */
    public function run(int $id): object
    {
        return app(GetCarBrandAction::class)
            ->run($id);
    }
}
