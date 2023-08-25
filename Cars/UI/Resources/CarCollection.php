<?php

namespace App\Prometheus\Sections\Cars\UI\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class CarCollection extends ResourceCollection
{
    public function toArray($request): object
    {
        return CarResource::collection($this->collection);
    }
}
