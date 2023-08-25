<?php

namespace App\Prometheus\Sections\Cars\Enums;

use App\Prometheus\Traits\EnumTrait;

enum PtsEnum: int
{
    use EnumTrait;

    case Оригинал = 1;
    case Дубликат = 2;
    case Электронный = 3;
}
