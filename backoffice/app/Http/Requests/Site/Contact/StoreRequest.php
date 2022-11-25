<?php

namespace App\Http\Requests\Site\Contact;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{

    protected $errorBag = 'store';

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => ['required'],
            'last_name' => ['required'],
            'cpf' => ['required'],
            'phone' => ['required'],
            'email' => ['required', 'email'],
            'message' => ['required'],
        ];
    }
}
