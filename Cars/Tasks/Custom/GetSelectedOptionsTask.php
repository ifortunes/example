<?php

namespace App\Prometheus\Sections\Cars\Tasks\Custom;

class GetSelectedOptionsTask
{
    /**
     * @param object|null $model
     * @return array
     */
    public function run(?object $model = null): array
    {
        $array = [];

        $options = $model->options ?? null;

        if ($options) {
            foreach ($options as $item) {
                $array[] = [
                    'title' => $item->title,
                    'id' => $item->id
                ];
            }
        }

        return $array;
    }
}
