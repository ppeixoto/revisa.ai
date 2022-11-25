<?php

namespace App\Http\Requests\Admin\MusicGenre;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{

    public function authorize()
    {
        return auth('admin')->user()->hasPermissionTo('musicgenres.create', 'admin');
    }

    public function rules()
    {
        return [
            'name' => ['required'],
        ];
    }
}
