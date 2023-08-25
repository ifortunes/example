<?php

namespace App\Prometheus\Sections\Cars\UI\Controllers;

use App\Prometheus\Http\Controllers\BaseController;
use App\Prometheus\Sections\CarBrands\Actions\getCarBrandsForSelectAction;
use App\Prometheus\Sections\Cars\Actions\Sub\getSaleStatusesSub;
use App\Prometheus\Sections\Manufacturers\Actions\getManufacturerForSelect;
use App\Prometheus\Sections\TypeTransactions\Actions\Custom\getTypeTransactionAction;

class CarFilterController extends BaseController
{
    public function filter()
    {
//        try {
//            return [555];
//        }catch (\Exception $e){
//            return $e->getMessage();
//        }

        return [
            [
                'sync' => 'lot',
                'type' => 'text',
                'model' => '',
                'label' => 'Lot',
                'density' => 'compact',
                'variant' => 'underlined',
                'attributes' => [
                    'lg' => 12,
                    'md' => 12,
                ]
            ],
            [
                'sync' => 'manufacturer',
                'type' => 'auto',
                'model' => '',
                'label' => 'Manufacturer',
                'title' => 'title',
                'value' => 'id',
                'density' => 'compact',
                'variant' => 'underlined',
                'options' => app(getManufacturerForSelect::class)->run(),
                'attributes' => [
                    'lg' => 6,
                    'md' => 6,
                ]
            ],
            [
                'sync' => 'brand',
                'type' => 'auto',
                'model' => '',
                'label' => 'Car brand',
                'title' => 'title',
                'value' => 'id',
                'density' => 'compact',
                'variant' => 'underlined',
                'options' => app(getCarBrandsForSelectAction::class)->run(),
                'attributes' => [
                    'lg' => 6,
                    'md' => 6,
                ]
            ],

            [
                'sync' => 'typeTransaction',
                'type' => 'select',
                'model' => '',
                'label' => 'Type of transaction',
                'title' => 'title',
                'value' => 'id',
                'density' => 'compact',
                'variant' => 'underlined',
                'options' => app(getTypeTransactionAction::class)->run(),
                'attributes' => [
                    'lg' => 6,
                    'md' => 6,
                ]
            ],
            [
                'sync' => 'status',
                'type' => 'select',
                'model' => '',
                'label' => 'Status',
                'title' => 'title',
                'value' => 'id',
                'density' => 'compact',
                'variant' => 'underlined',
                'options' => app(getSaleStatusesSub::class)->run(),
                'attributes' => [
                    'lg' => 6,
                    'md' => 6,
                ]
            ],
            [
                'sync' => 'initialPrice',
                'type' => 'text',
                'model' => '',
                'label' => 'Initial price',
                'density' => 'compact',
                'variant' => 'underlined',
                'attributes' => [
                    'lg' => 4,
                    'md' => 6,
                ]
            ],
            [
                'sync' => 'itsPrice',
                'type' => 'text',
                'model' => '',
                'label' => 'Its price',
                'density' => 'compact',
                'variant' => 'underlined',
                'attributes' => [
                    'lg' => 4,
                    'md' => 6,
                ]
            ],
            [
                'sync' => 'blitzPrice',
                'type' => 'text',
                'model' => '',
                'label' => 'Blitz price',
                'density' => 'compact',
                'variant' => 'underlined',
                'attributes' => [
                    'lg' => 4,
                    'md' => 6,
                ]
            ],
        ];
    }
}
