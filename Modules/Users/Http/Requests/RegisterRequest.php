<?php namespace Modules\Users\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest{
    public function rules(){

        $rules =[];

        $step = request()['step'];
        switch ($step){
            case 1:
                $rules =[
                    'type'      => 'required|between:1,2',
                    'phone'     => 'required|unique:users|unique:customer_tmp|min:10|max:11|check_spam',
                    'step'      => 'required|between:1,5|is_valid'
                ];
                break;
            case 2:
                $rules=[
                    'verify_code'  => 'required|verify_code',
                    'step'      => 'required|between:1,5|is_valid'
                ];
                break;
            case 3:
                $rules=[
                    'lat'   => 'required|numeric',
                    'lng'  => 'required|numeric',
                    'address'   => 'required',
                    'step'      => 'required|between:1,5|is_valid'
                ];
                break;
            case 4:
                $rules=[
                    'desc'      => 'required|max:5000',
                    'name'      => 'required|max:255',
                    'address'   => 'max:500',
                    'step'      => 'required|between:1,5|is_valid'
                ];
                break;
            case 5:
                $rules=[
                    'email'     => 'required|unique:users|email',
                    'password' => 'required|string|min:6|confirmed',
                    'password_confirmation'  => 'required',
                    'step'      => 'required|between:1,5|is_valid'
                ];
                break;
            default:
                $rules =[
                    'type'      => 'required|in:'.implode(',', [1, 2]),
                    'phone'     => 'required|min:10|max:11|numeric',
                    'step'      => 'required|between:1,5|is_valid'
                ];//default rules of request is step 1
                break;
        }

        return $rules;
    }

    public function authorize(){
        return true;
    }

    public function messages()
    {
        return [
            'step.is_valid' => ['type' => 'alert', 'msg'=>'Please go back and complete all of data in register form with step by step!'],
            'verify_code.verify_code'   => 'Please enter correct code to verify your phone number!',
            'phone.check_spam' => 'Your phone number has been blocked forever because of spam!',

            'lat_pos.required' => ['type' => 'confirm', 'msg'=>'We can not pick your location automatically! Please enter your address to pick your location.'],
            'long_pos.required' => ['type' => 'confirm', 'msg'=>'We can not pick your location automatically! Please enter your address to pick your location.'],
            'address.required' => ['type' => 'confirm', 'msg'=>'We can not pick your location automatically! Please enter your address to pick your location.'],
        ];
    }
}

?>