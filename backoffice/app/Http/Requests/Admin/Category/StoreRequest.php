<?php

namespace App\Http\Requests\Admin\Category;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{

    public function authorize()
    {
        return auth('admin')->user()->hasPermissionTo('categories.create', 'admin');
    }

    public function rules()
    {
        return [
            'name' => ['required'],
        ];
    }
}
