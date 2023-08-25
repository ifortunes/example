<?php

namespace App\Prometheus\Sections\Cars\Filters;

use App\Prometheus\Contracts\FilterContract;
use App\Prometheus\Filters\QueryFilter;

class BrandFilter extends QueryFilter implements FilterContract
{
    public function handle($value): void
    {
        $this->query->whereHas('brands', function ($query) use ($value) {
            return $query->where('brand_id', $value);
        });
    }

}
