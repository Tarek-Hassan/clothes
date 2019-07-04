<?php

namespace Modules\Setting\Model\Privacy\Requests;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePrivacyRequest extends FormRequest
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
