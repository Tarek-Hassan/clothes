<?php

namespace Modules\Category\Model\Category\Requests;
use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'category_name'=>'required|string|max:190',
            'type_id'=>'required',
           


        ];
    }
}
