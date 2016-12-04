<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class ExampleImageCreate extends FormRequest
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

    public function rules()
    {
        return [
            'file'=>'image|dimensions:min_width=250,min_height=200|max:350',
        ];
    }

    protected function formatErrors(Validator $validator)
    {
       return $validator->errors()->all();
    }


    public function messages()
    {
        return [
            'file.image' => '文件必须为图片',
            'file.dimensions' => '文件最小宽为250px,最小高为200px',
            'file.max' =>'文件最大350KB',
        ];
    }
}
