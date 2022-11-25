<?php

namespace App\Http\Requests\Admin\Operator;

use Illuminate\Foundation\Http\FormRequest;

class EditRequest extends FormRequest
{

    public function authorize()
    {
        return auth('admin')->user()->hasPermissionTo('operators.edit', 'admin');
    }
    
    public function rules()
    {
        return [];
    }
}
