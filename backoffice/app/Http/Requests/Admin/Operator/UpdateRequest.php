<?php

namespace App\Http\Requests\Admin\Operator;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{

    public function authorize()
    {
        return auth('admin')->user()->hasPermissionTo('operators.edit', 'admin');
    }

    public function rules()
    {
        return [
            'name' => ['required', 'string', 'min:3'],
            'email' => ['required', 'email', 'unique:admins,email,' . $this->admin->id],
            'password' => ['nullable', 'confirmed', 'min:6'],
        ];
    }
}
