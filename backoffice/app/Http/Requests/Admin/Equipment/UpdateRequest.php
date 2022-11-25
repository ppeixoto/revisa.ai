<?php

namespace App\Http\Requests\Admin\Equipment;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{

    public function authorize()
    {
        return auth('admin')->user()->hasPermissionTo('equipments.edit', 'admin');
    }

    public function rules()
    {
        return [
            'name' => ['required'],
        ];
    }
}
