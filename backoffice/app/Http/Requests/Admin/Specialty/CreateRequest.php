<?php

namespace App\Http\Requests\Admin\Specialty;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{

    public function authorize()
    {
        return auth('admin')->user()->hasPermissionTo('specialties.create', 'admin');
    }

    public function rules()
    {
        return [];
    }
}
