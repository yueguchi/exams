<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ExamRequest extends Request
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'id' => 'integer|digits:1'
            ,'page' => 'required|integer|digits:1'
            ,'limit' => 'required|integer|digits:2'
        ];
    }
}
