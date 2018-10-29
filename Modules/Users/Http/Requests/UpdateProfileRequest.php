<?php namespace Modules\Users\Http\Requests;
	use Illuminate\Foundation\Http\FormRequest;
	class UpdateProfileRequest extends FormRequest{
		public function rules(){
		    return [
                'nickName' 		=> request()['nickName'] ? 'min:3|max:100' : '',
                'name'			=> 'required|min:3|max:255',
                'gender'		=> 'boolean',
                'job'			=> 'required|min:3|max:255',
                'birthday'		=> 'required|date_format:d-m-Y',
                'address'		=> 'required|min:4|max:500'
            ];
		}
        public function authorize(){
		    return true;
        }
	}
?>