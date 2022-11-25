<?php

namespace App\Http\Requests\Admin\MusicGenre;

use Illuminate\Foundation\Http\FormRequest;

class DestroyRequest extends FormRequest
{

    public function authorize()
    {
        return auth('admin')->user()->hasPermissionTo('musicgenres.destroy', 'admin');
    }
    
    public function rules()
    {
        return [];
    }
}
