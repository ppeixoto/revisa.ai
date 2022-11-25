<?php

namespace App\Http\Requests\Admin\Specialty;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{

    public function authorize()
    {
        return auth('admin')->user()->hasPermissionTo('specialties.edit', 'admin');
    }

    public function rules()
    {
        return [
            'name' => ['required'],
        ];
    }
}
