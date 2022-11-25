<?php

namespace App\Http\Requests\Admin\MusicGenre;

use Illuminate\Foundation\Http\FormRequest;

class IndexRequest extends FormRequest
{

    public function authorize()
    {
        return auth('admin')->user()->hasPermissionTo('musicgenres.index', 'admin');
    }

    public function rules()
    {
        return [];
    }
}
