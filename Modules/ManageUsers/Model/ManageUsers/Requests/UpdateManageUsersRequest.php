<?php

namespace Modules\ManageUsers\Model\ManageUsers\Requests;
use Illuminate\Foundation\Http\FormRequest;

class UpdateManageUsersRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {

        return [

            'name' => 'string|max:255',
            'email' => 'string|email|max:255',
            'password' => 'string|min:8',
            'avatar'=>'image',

        ];
    }
}
