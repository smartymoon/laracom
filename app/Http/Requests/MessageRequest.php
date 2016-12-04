<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessageRequest extends FormRequest
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
            'name'=>'required',
            'tel'=>'required',
            'email'=>'email',
            'file'=>'image',
            'content'=>'required',
            'geetest_challenge' => 'required|geetest'
        ];
    }

    public function messages()
    {
        return [
           'name.required'=>'姓名必须填写',
           'tel.required' =>'电话必须填写',
           'email.email'  =>'email格式不正确',
           'file.image'   =>'附加必须图片',
           'content.required'=>'内容必须有',
           'geetest' => '验证滑块位置不对',
           'geetest_challenge.required'=>'请先滑动滑块进行验证',
        ];
    }
}
