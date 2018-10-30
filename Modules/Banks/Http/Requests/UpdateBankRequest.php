<?php

namespace Modules\Banks\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBankRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'bank_name'             => 'required|alpha|max:255',
            'bank_branch'           => 'required|max:255',
            'bank_account_number'   => 'required|digits:16',
            'bank_card_holder_name' => 'required|max:255'
        ];
    }

    public function messages()
    {
        return [
            
        ];
    }
}
