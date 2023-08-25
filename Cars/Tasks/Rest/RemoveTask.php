<?php

namespace App\Prometheus\Sections\Cars\Tasks\Rest;

use App\Prometheus\Sections\Cars\Models\Car;

class RemoveTask
{
    /**
     * @param int $id
     * @return array|string[]
     */
    public function run(int $id): array
    {
        $result = Car::destroy($id);

        if ($result) {
            return [
                'message' => 'Data deleted',
                'errors' => []
            ];
        }else{
            return [
                'message' => 'Deletion Error',
            ];
        }
    }
}
