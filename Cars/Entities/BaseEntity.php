<?php

namespace App\Prometheus\Sections\Cars\Entities;

use App\Prometheus\Sections\Cars\Actions\Custom\GetSelectedOptionsAction;

use App\Prometheus\Sections\Cars\Actions\Sub\{
    GetBodyTypeElementsSub,
    GetUsersSub,
    GetBodyTypesSub,
    GetCarBrandsASub,
    GetManufacturersSub,
    GetOptionsSub,
    GetPlatformsSub,
    GetSaleStatusesSub,
    GetTypeTransactionsSub
};

use App\Prometheus\Sections\Cars\Enums\{DriveEnum, EngineTypeEnum, RudderEnum, TransmissionEnum};

class BaseEntity
{
    public function get(?object $model = null): array
    {
        return [

            'model' => [
                'id' => $model?->id,
                'archive' => $model?->archive ? true : false,
                'type_transaction_id' => $model?->type_transaction_id,
                'sale_status_id' => $model?->sale_status_id,
                'lot' => $model?->lot,
                'end_date' => $model?->end_date,
                'how_to_show' => $model->how_to_show ?? 1,
                'main_page' => $model?->main_page ? true : false,
                'private' => $model?->private ? true : false,
                'is_promoted' => $model?->is_promoted ? true : false,
                'brand_id' => $model?->brand_id,
                'manufacturer_id' => $model?->manufacturer_id,
                'initial_price' => $model?->initial_price,
                'auction_step' => $model?->auction_step,
                'its_price' => $model?->its_price,
                'blitz_price' => $model?->blitz_price,
                'platform_id' => $model?->platform_id,
                'user_id' => $model?->user_id,
                'description' => $model->description ?? '',

                'year' => $model->year ?? '',
                'rudder_id' => $model->rudder_id ?? '',
                'mileage' => $model->mileage ?? '',
                'volume' => $model->volume ?? '',
                'transmission_id' => $model->transmission_id ?? '',
                'power' => $model->power ?? '',
                'engine_id' => $model->engine_id ?? '',
                'colour' => $model->colour ?? '',
                'drive_id' => $model->drive_id ?? '',

                'advantages' => $model->advantages ?? [],

                'body' => $model->body ?? 0,
                'salon' => $model->salon ?? 0,
                'engine' => $model->engine ?? 0,
                'gearbox' => $model->gearbox ?? 0,
                'pendant' => $model->pendant ?? 0,
            ],

            'images' => $model?->images->sortBy([['main', 'desc']])->toArray() ?? [],
            'removeImages' => [],

//            'options' => [],
            'options' => app(GetSelectedOptionsAction::class)->run($model),

            'relationships' => [
                'type_transactions' => app(GetTypeTransactionsSub::class)->run(),
                'sale_statuses' => app(GetSaleStatusesSub::class)->run(),
                'brands' => app(GetCarBrandsASub::class)->run(),
                'manufacturers' => app(GetManufacturersSub::class)->run(),
                'platforms' => app(GetPlatformsSub::class)->run(),
                'users' => app(GetUsersSub::class)->run(),
                'rudder' => RudderEnum::select(),
                'transmission' => TransmissionEnum::select(),
                'engines' => EngineTypeEnum::select(),
                'drives' => DriveEnum::select(),
                'options' => app(GetOptionsSub::class)->run(),

                'bodyElements' => app(GetBodyTypeElementsSub::class)->run(),
                'body' => app(GetBodyTypesSub::class)->run(),
            ],

        ];
    }
}
