<?php

namespace App\Prometheus\Sections\Cars\Filters;

use App\Prometheus\Contracts\FilterContract;
use App\Prometheus\Filters\QueryFilter;

class ManufacturerFilter extends QueryFilter implements FilterContract
{
    public function handle($value): void
    {
        $this->query->whereHas('manufacturers', function ($query) use ($value) {
            return $query->where('manufacturer_id', $value);
        });
    }
}
