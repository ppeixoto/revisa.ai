<?php

namespace App\Http\Requests\Admin\Operator;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{

    public function authorize()
    {
        return auth('admin')->user()->hasPermissionTo('operators.create', 'admin');
    }

    public function rules()
    {
        return [
            'name' => ['required', 'string', 'min:3'],
            'email' => ['required', 'email', 'unique:admins'],
            'password' => ['required', 'confirmed', 'min:6'],
        ];
    }
}
