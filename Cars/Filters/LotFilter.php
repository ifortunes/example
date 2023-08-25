<?php

namespace App\Prometheus\Sections\Cars\Filters;

use App\Prometheus\Contracts\FilterContract;
use App\Prometheus\Filters\QueryFilter;

class LotFilter extends QueryFilter implements FilterContract
{
    public function handle($value): void
    {
        $this->query->where('lot', $value);
    }
}
