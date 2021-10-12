<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HealthcheckRequest extends FormRequest
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
            'score' => 'gte:0|lte:100',
            'memo' => 'max:256',
        ];
    }
    public function attributes()
    {
        return [
            'score' => '点数',
            'memo' => 'メモ',
        ];
    }
    public function messages()
    {
        return [
            'score.gte' => '点数は0~100の半角数字で入力してください。',
            'score.lte' => '点数は0~100の半角数字で入力してください。',
            'memo.max' => 'メモは140字以下で入力してください。'
        ];
    }
}
