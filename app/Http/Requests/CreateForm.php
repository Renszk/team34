<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
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
            'name'    => 'required',
            'mail'   => 'required|email',
            'zip01' => 'required',
            'pref01' => 'required',
            'addr01' => 'required',
            'addr0' => 'required',
            'build' => 'required',
        ];
    }

    /**
     * Set custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            //
        ];
    }

    /**
     * Set custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'name'    => 'お名前',
            'email'   => 'メールアドレス',
            'subject' => '件名',
            'content' => '内容',
        ];
    }
}
}
