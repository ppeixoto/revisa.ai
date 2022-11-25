<?php

namespace App\Http\Requests\Admin\MusicGenre;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{

    public function authorize()
    {
        return auth('admin')->user()->hasPermissionTo('musicgenres.edit', 'admin');
    }

    public function rules()
    {
        return [
            'name' => ['required'],
        ];
    }
}
