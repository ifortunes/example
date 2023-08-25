<?php

namespace App\Prometheus\Sections\Cars\Enums;

use App\Prometheus\Traits\EnumTrait;

enum RudderEnum: int
{
    use EnumTrait;
    case Левый = 1;
    case Правый = 2;

}
