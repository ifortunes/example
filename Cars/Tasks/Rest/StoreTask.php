<?php

namespace App\Prometheus\Sections\Cars\Tasks\Rest;

use App\Prometheus\Sections\Cars\Actions\Sub\GetCarBrandSub;
use App\Prometheus\Sections\Cars\Actions\Sub\GetManufacturerSub;
use App\Prometheus\Sections\Cars\DTO\StoreDTO;
use App\Prometheus\Sections\Cars\Models\Car;
use App\Prometheus\Sections\Cars\Models\Image;
use Illuminate\Support\Str;

class StoreTask
{
    /**
     * @param StoreDTO $dto
     * @return array
     */
    public function run(StoreDTO $dto): array
    {
//        try {
//            DB::beginTransaction();

        $model = $dto->getModel();

        $brand = app(GetCarBrandSub::class)
            ->run($model['brand_id']);

        $manufacturer = app(GetManufacturerSub::class)
            ->run($model['manufacturer_id']);

        $model['slug'] = Str::slug($manufacturer->title, '-') . '-' .
            Str::slug($brand->title, '-') . '-' .
            Str::slug($model['lot'], '-');

        $car = Car::create($model);

        if (!$car) {
            return [
                'message' => 'Creation error',
                'errors' => []
            ];
        }

        if (!empty($dto->getOptions())) {

            $options = [];
            foreach ($dto->getOptions() as $option) {
                $options[] = $option['id'];
            }

            $car->options()->attach($options);
        }

        if (!empty($dto->getImages())) {

            $collect = collect($dto->getImages());

            if (!$collect->where('main', 1)->count()) {

                $shift = $collect->shift();
                $shift['main'] = 1;

                $collect->push($shift);
            }

            $images = [];
            foreach ($collect as $image) {
                $images[] = [
                    'car_id' => $car->id,
                    'path' => $image['path'],
                    'main' => $image['main'] ?? false,
                    'description' => $image['description'],
                    'group' => $image['group'],
                    'section' => $image['section'],
                ];
            }

            Image::insert($images);
        }

        if ($car) {
            return [
                'message' => 'The car is created',
                'errors' => []
            ];
        }

//            DB::commit();
//
//        } catch(ValidationException $e){
//            DB::rollBack();
//
//            return [
//                'message' => $e->getMessage(),
//                'errors' => [$e->errors()]
//            ];
//        }

//        return [];
    }
}
