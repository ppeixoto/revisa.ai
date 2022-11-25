<?php

namespace App\Http\Requests\Admin\MusicGenre;

use Illuminate\Foundation\Http\FormRequest;

class EditRequest extends FormRequest
{

    public function authorize()
    {
        return auth('admin')->user()->hasPermissionTo('musicgenres.edit', 'admin');
    }

    public function rules()
    {
        return [];
    }
}
