<?php

namespace Modules\Category\Model\Type\Requests;
use Illuminate\Foundation\Http\FormRequest;

class UpdateTypeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'gender' => 'required|string|max:190',
          

        ];
    }
}
