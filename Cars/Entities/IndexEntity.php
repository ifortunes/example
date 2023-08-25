<?php

namespace App\Prometheus\Sections\Cars\Entities;

class IndexEntity
{
    public function get(?object $model = null)
    {
        return [
            "id" => $model->id ?? null,
            "lot" => $model->lot ?? null,
            "brand_id" => $model->brands->title ?? null,
            "initial_price" => $model->initial_price ?? null,
            "its_price" => $model->its_price ?? null,
            "blitz_price" => $model->blitz_price ?? null,
            "type_transaction_id" => $model->typeTransactions->title ?? null,
            "sale_status_id" => $model->saleStatus->title ?? null,
            "main_page" => $model->main_page ?? null,
        ];
    }
}
