<?php

namespace Modules\Category\Model\CategoryDetails\Requests;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryDetailsRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title'=>'required|string|max:190',
            'description'=>'required|string|max:2000',
            // 'color[]'=>'required|string|max:190',
            'salary'=>'required|numeric|max:190',
            'discount'=>'required|numeric|max:190',
            'quantity'=>'required',
            'image'=>'image',
            'user_id'=>'required',
            'type_id'=>'required',
            'category_id'=>'required',
        ];
    }
}
