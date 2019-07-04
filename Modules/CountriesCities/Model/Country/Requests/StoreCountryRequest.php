<?php

namespace Modules\CountriesCities\Model\Country\Requests;
use Illuminate\Foundation\Http\FormRequest;

class StoreCountryRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'country_name' => 'required|string|max:190',
            
        ];
    }
}
