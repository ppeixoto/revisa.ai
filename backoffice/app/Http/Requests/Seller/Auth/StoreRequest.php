<?php

namespace App\Http\Requests\Seller\Auth;

use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth('user')->user()->hasSeller() == false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'document_type' => ['required', Rule::in('cpf', 'cnpj')],
            'document' => ['required', 'unique:sellers', 'string', 'min:11', 'max:14'],
            'razao_socical' => ['required_if:document_type,cnpj', 'string'],
            'phone' => ['required', 'string', 'min:10', 'max:11'],
            //'email' => ['required', 'email:rfc,dns', 'unique:users',
            //'password' => 'required',
        ];
    }

    protected function getValidatorInstance()
    {
        $input = collect($this->only(['document', 'phone']))->map(function ($item) {
            return Str::onlyNumbers($item);
        })->toArray();

        $this->getInputSource()->add($input);

        return parent::getValidatorInstance();
    }
}
