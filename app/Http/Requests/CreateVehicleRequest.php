<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateVehicleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'vehicle_types' => 'required|string|in:moto,car',
            'user_id' => 'required|exists:users,id',
            'parking_id' => 'nullable|exists:parkings,id',
            'brand'=> 'required|string|max:255',
            'model' => 'required|alpha_num|max:255',
        ];
    }
}
