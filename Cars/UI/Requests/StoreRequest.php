<?php

namespace App\Prometheus\Sections\Cars\UI\Requests;

use App\Prometheus\Sections\Cars\DTO\StoreDTO;
use App\Prometheus\Sections\Cars\Enums\{
    PtsEnum,
    DriveEnum,
    RudderEnum,
    EngineTypeEnum,
    TransmissionEnum
};
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class StoreRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'model.archive' => 'nullable|boolean',
            'model.type_transaction_id' => 'required|numeric|integer',
            'model.sale_status_id' => 'required|numeric|integer',
            'model.lot' => 'required|string|min:2|max:200',
            'model.how_to_show' => 'required|numeric',
            'model.main_page' => 'nullable|boolean',
            'model.is_promoted' => 'nullable|boolean',
            'model.private' => 'nullable|boolean',
            'model.brand_id' => 'required|numeric|integer',
            'model.manufacturer_id' => 'required|numeric|integer',
            'model.initial_price' => 'required|numeric',
            'model.auction_step' => 'nullable|numeric',
            'model.its_price' => 'nullable|numeric',
            'model.blitz_price' => 'nullable|numeric',
            'model.platform_id' => 'nullable|numeric|integer',
            'model.user_id' => 'nullable|numeric|integer',
            'model.description' => 'nullable|string',

            'model.year' => 'nullable|numeric|min:4',
            'model.rudder_id' => new Enum(RudderEnum::class),
            'model.mileage' => 'nullable|integer',
            'model.volume' => 'nullable|numeric',
            'model.transmission_id' => new Enum(TransmissionEnum::class),
            'model.power' => 'nullable|integer',
            'model.engine_id' => new Enum(EngineTypeEnum::class),
            'model.colour' => 'nullable|string|min:2|max:200',
            'model.drive_id' => new Enum(DriveEnum::class),

            'model.advantages' => 'nullable|array',

            'model.body' => 'nullable|max:3',
            'model.salon' => 'nullable|max:3',
            'model.engine' => 'nullable|max:3',
            'model.gearbox' => 'nullable|max:3',
            'model.pendant' => 'nullable|max:3',
        ];
    }

    public function getDto(): StoreDTO
    {
        return new StoreDTO(
            $this->get('model'),
            $this->get('options'),
            $this->get('images')
        );
    }
}
