<?php

namespace App\Prometheus\Sections\Cars\Actions\Sub;

use App\Prometheus\Sections\SaleStatus\Actions\Custom\GetSaleStatusesAction;

class GetSaleStatusesSub
{
    public function run(): object
    {
        return app(GetSaleStatusesAction::class)
            ->run();
    }
}
