<?php

namespace App\Prometheus\Sections\Cars\Filters;

use App\Prometheus\Contracts\FilterContract;
use App\Prometheus\Filters\QueryFilter;

class BlitzPriceFilter extends QueryFilter implements FilterContract
{
    public function handle($value): void
    {
        $this->query->where('blitz_price', $value);
    }
}
