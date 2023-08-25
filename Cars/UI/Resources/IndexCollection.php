<?php

namespace App\Prometheus\Sections\Cars\UI\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class IndexCollection extends ResourceCollection
{
    public function toArray($request): object
    {
        return IndexResource::collection($this->collection);
    }
}
