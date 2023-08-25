<?php

namespace App\Prometheus\Sections\Cars\Filters;

use App\Prometheus\Contracts\FilterContract;
use App\Prometheus\Filters\QueryFilter;

class TypeTransactionFilter extends QueryFilter implements FilterContract
{
    public function handle($value): void
    {
        $this->query->whereHas('typeTransactions', function ($query) use ($value) {
            return $query->where('type_transaction_id', $value);
        });
    }
}
