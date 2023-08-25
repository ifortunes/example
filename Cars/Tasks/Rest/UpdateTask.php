<?php

namespace App\Prometheus\Sections\Cars\Tasks\Rest;

use App\Prometheus\Sections\Cars\Actions\Sub\{
    GetCarBrandSub,
    GetManufacturerSub
};

use App\Prometheus\Sections\Cars\DTO\UpdateDTO;
use App\Prometheus\Sections\Cars\Models\Car;
use App\Prometheus\Sections\Cars\Models\Image;
use Illuminate\Support\Str;

class UpdateTask
{
    public function run(UpdateDTO $dto)
    {
        $car = Car::findOrFail($dto->getId());

        if (!$car)  {
            return [
                'message' => 'Data update error',
            ];
        }

        if (!empty($dto->getOptions())) {

            $options = [];
            foreach ($dto->getOptions() as $option) {
                $options[] = $option['id'];
            }

            $car->options()
                ->sync($options);
        }

        if (!empty($dto->getImages())) {

            $images = [];
            foreach ($dto->getImages() as $image) {
                $images[] = [
                    'car_id' => $car->id,
                    'path' => $image['path'],
                    'main' => $image['main'] ?? false,
                    'description' => $image['description'],
                    'group' => $image['group'],
                    'section' => $image['section'],
                ];
            }

            $car->images()->delete();

            Image::insert($images);
        }

        $model = $dto->getModel();

        $brand = app(GetCarBrandSub::class)
            ->run($model['brand_id']);

        $manufacturer = app(GetManufacturerSub::class)
            ->run($model['manufacturer_id']);

        $model['slug'] = Str::slug($manufacturer->title, '-') . '-' .
            Str::slug($brand->title, '-') . '-' .
            Str::slug($model['lot'], '-');

        $result = $car->update($model);

        if ($result) {
            return [
                'message' => 'Data has been successfully updated!',
                'errors' => []
            ];
        }else{
            return [
                'message' => 'Data update error',
            ];
        }
    }
}
