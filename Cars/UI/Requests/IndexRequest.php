<?php

namespace App\Prometheus\Sections\Cars\UI\Requests;

use App\Prometheus\Sections\Cars\DTO\IndexDTO;
use Illuminate\Foundation\Http\FormRequest;

class IndexRequest extends FormRequest
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
//            'asc' => 'nullable|string|max:50',
//            'desc' => 'nullable|string|max:50',
            'page' => 'required|integer',
            'search' => 'nullable|string',
//            'filter' => 'nullable|array'
        ];
    }

    public function getDto(): IndexDTO
    {
        return new IndexDTO(
            $this->get('page') ?? 1,
            $this->get('search'),
            $this->get('filter')
        );
    }
}
