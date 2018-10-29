<?php

namespace Modules\Banks\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStripeRequest extends FormRequest
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
            'card_number'       => 'required|digits:16',
            'card_holder_name'  => 'required|max:255|regex:/([A-Z]\s)/'
        ];
    }

    public function messages()
    {
        return [
            'card_number'       => 'The number must be 16 digits.',
            'card_holder_name'  => 'The card holder name format is invalid.'
        ];
    }
}
