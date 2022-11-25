<?php

namespace App\Http\Requests\Admin\Operator;

use Illuminate\Foundation\Http\FormRequest;

class DestroyRequest extends FormRequest
{

    public function authorize()
    {
        return auth('admin')->user()->hasPermissionTo('operators.destroy', 'admin');
    }
    
    public function rules()
    {
        return [];
    }
}
