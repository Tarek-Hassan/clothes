<?php

namespace Modules\CountriesCities\Model\City\Requests;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCityRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'city_name' => 'required|string|max:190',
            'country_id' => 'required',

        ];
    }
}
