<?php

namespace Modules\Setting\Model\AboutUs\Requests;
use Illuminate\Foundation\Http\FormRequest;

class UpdateAboutUsRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
           
            'body' => 'required|string|max:2000',

        ];
    }
}
