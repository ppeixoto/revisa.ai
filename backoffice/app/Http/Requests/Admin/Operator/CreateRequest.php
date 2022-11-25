<?php

namespace App\Http\Requests\Admin\Operator;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
{

    public function authorize()
    {
        return auth('admin')->user()->hasPermissionTo('operators.create', 'admin');
    }
    
    public function rules()
    {
        return [];
    }
}
