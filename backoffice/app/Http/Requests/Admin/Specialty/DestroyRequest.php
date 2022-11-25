<?php

namespace App\Http\Requests\Admin\Specialty;

use Illuminate\Foundation\Http\FormRequest;

class DestroyRequest extends FormRequest
{

    public function authorize()
    {
        return auth('admin')->user()->hasPermissionTo('specialties.destroy', 'admin');
    }
    
    public function rules()
    {
        return [];
    }
}
