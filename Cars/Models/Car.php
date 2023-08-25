<?php

namespace App\Prometheus\Sections\Cars\Models;

use App\Models\User;
use App\Prometheus\Filters\FilterBuilder;
use App\Prometheus\Sections\CarBrands\Models\CarBrand;
use App\Prometheus\Sections\Cars\Enums\{
    RudderEnum,
    PtsEnum,
    DriveEnum,
    EngineTypeEnum,
    TransmissionEnum
};
use App\Prometheus\Sections\Manufacturers\Models\Manufacturer;
use App\Prometheus\Sections\Options\Models\Option;
use App\Prometheus\Sections\SaleStatus\Models\SaleStatus;
use App\Prometheus\Sections\TypeTransactions\Models\TypeTransaction;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $casts = [
        'rudder_id' => RudderEnum::class,
        'pts_id' => PtsEnum::class,
        'drive_id' => DriveEnum::class,
        'engine_id' => EngineTypeEnum::class,
        'transmission_id' => TransmissionEnum::class,

        'advantages' => 'array'
    ];

    protected $with = [
        'brands',
        'pickups',
        'images',
        'saleStatus',
        'manufacturers',
        'typeTransactions',
    ];

    public $fillable = [
        'user_id',
        'archive',
        'type_transaction_id',
        'sale_status_id',
        'lot',
        'end_date',
        'main_page',
        'how_to_show',
        'private',
        'is_promoted',
        'brand_id',
        'manufacturer_id',
        'initial_price',
        'auction_step',
        'its_price',
        'blitz_price',
        'platform_id',
        'seller_id',
        'description',
        'slug',

        'year',
        'rudder_id',
        'mileage',
        'volume',
        'transmission_id',
        'power',
        'engine_id',
        'colour',
        'drive_id',

        'advantages',

        'body',
        'salon',
        'engine',
        'gearbox',
        'pendant',
    ];

    /**
     * @param $query
     * @return mixed
     */
    public function scopeActive($query)
    {
        return $query->where('active', true);
    }

    public function manufacturers()
    {
        return $this->belongsTo(Manufacturer::class, 'manufacturer_id', 'id');
    }

    public function brands()
    {
        return $this->belongsTo(CarBrand::class, 'brand_id', 'id');
    }

    public function typeTransactions()
    {
        return $this->belongsTo(TypeTransaction::class, 'type_transaction_id', 'id');
    }
    public function saleStatus()
    {
        return $this->belongsTo(SaleStatus::class, 'sale_status_id', 'id');
    }

    public function options()
    {
        return $this->belongsToMany(Option::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function pickups()
    {
        return $this->belongsToMany(User::class);
    }
    public function scopeFilter($query, $filters)
    {
        $filter = new FilterBuilder($query, $filters, 'App\Prometheus\Sections\Cars\Filters');

        return $filter->apply();
    }

    public function scopeArchive($query)
    {
        return $query->where('archive', true);
    }

    public function scopeArchiveFalse($query)
    {
        return $query->where('archive', false);
    }

    public function scopePrivate($query)
    {
        return $query->where('private', true);
    }

    public function scopePrivateFalse($query)
    {
        return $query->where('private', false);
    }
}
