<?php

namespace App\Prometheus\Sections\Cars\Filters;

use App\Prometheus\Contracts\FilterContract;
use App\Prometheus\Filters\QueryFilter;

class StatusFilter extends QueryFilter implements FilterContract
{
    public function handle($value): void
    {
        $this->query->whereHas('saleStatus', function ($query) use ($value) {
            return $query->where('sale_status_id', $value);
        });
    }
}
