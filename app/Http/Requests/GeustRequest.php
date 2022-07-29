<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GeustRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if($this->path() == '/'){
            return true ;
        }
        /*else if($this->path() == 'message'){
            return true ;
        }*/

        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'  => 'string|max:40|required',
            'email' => 'email|max:255|required',
        ];
    }

    public function messages()
    {
        return [
            'name.string' => '名前は文字で入力して下さい。',
            'name.required' => '名前を入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスの形式で入力してください'
        ];
    }
}
