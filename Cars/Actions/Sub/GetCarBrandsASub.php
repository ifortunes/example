<?php

namespace App\Prometheus\Sections\Cars\Actions\Sub;

use App\Prometheus\Sections\CarBrands\Actions\Custom\GetCarBrandsAction;

class GetCarBrandsASub
{
    public function run(): object
    {
        $collections = app(GetCarBrandsAction::class)
            ->run();

        return $collections->map(function($item) {
            return $item->only(['id', 'title', 'manufacturer_id']);
        });
    }
}
