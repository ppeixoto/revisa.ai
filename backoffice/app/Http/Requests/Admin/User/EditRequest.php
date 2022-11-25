<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class EditRequest extends FormRequest
{

    public function authorize()
    {
        return auth('admin')->user()->hasPermissionTo('users.edit', 'admin');
    }
    
    public function rules()
    {
        return [];
    }
}
