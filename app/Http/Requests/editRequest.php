<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class editRequest extends FormRequest
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
            'task' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'task.required' => '更新タスクを登録してください',
        ];
    }
}
