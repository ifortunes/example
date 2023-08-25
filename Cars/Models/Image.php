<?php

namespace App\Prometheus\Sections\Cars\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    public $timestamps = false;

    public $fillable = [
         'id',
         'car_id',
         'main',
         'path',
         'description',
         'group',
         'section',
    ];
}
