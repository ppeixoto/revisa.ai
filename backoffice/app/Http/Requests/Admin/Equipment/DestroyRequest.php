<?php

namespace App\Http\Requests\Admin\Equipment;

use Illuminate\Foundation\Http\FormRequest;

class DestroyRequest extends FormRequest
{

    public function authorize()
    {
        return auth('admin')->user()->hasPermissionTo('equipments.destroy', 'admin');
    }
    
    public function rules()
    {
        return [];
    }
}
