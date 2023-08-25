<?php

namespace App\Prometheus\Sections\Cars\Enums;

use App\Prometheus\Traits\EnumTrait;

enum TransmissionEnum: int
{
    use EnumTrait;

    case Механика = 1;
    case Автомат = 2;
    case Робот = 3;
    case Вариатор = 4;

}
