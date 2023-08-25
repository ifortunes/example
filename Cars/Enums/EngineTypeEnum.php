<?php

namespace App\Prometheus\Sections\Cars\Enums;

use App\Prometheus\Traits\EnumTrait;

enum EngineTypeEnum: int
{
    use EnumTrait;

    case Бензин = 1;
    case Дизель = 2;
    case Гибрид = 3;
    case Электро = 4;
}
