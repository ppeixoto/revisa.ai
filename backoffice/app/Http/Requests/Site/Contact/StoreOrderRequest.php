<?php

namespace App\Http\Requests\Site\Contact;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
{

    protected $errorBag = 'storeOrder';

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => ['required_with:not_my_order'],
            'last_name' => ['required_with:not_my_order'],
            'cpf' => ['required_with:not_my_order'],
            'phone' => ['required_with:not_my_order'],
            'email' => ['required_with:not_my_order', 'nullable','email'],
            'message' => ['required'],
        ];
    }
}
