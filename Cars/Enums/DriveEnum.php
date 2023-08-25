<?php

namespace App\Prometheus\Sections\Cars\Enums;

use App\Prometheus\Traits\EnumTrait;

enum DriveEnum: int
{
    use EnumTrait;

    case Передний = 1;
    case Задний = 2;
    case Полный = 3;
}
