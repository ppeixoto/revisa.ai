<?php

namespace App\Http\Requests\Admin\Category;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{

    public function authorize()
    {
        return auth('admin')->user()->hasPermissionTo('categories.edit', 'admin');
    }

    public function rules()
    {
        return [
            'name' => ['required'],
        ];
    }
}
