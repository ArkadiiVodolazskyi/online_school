<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest as Base;

class FormRequest extends Base
{
    public function rules()
    {
        return [
            'id' => 'sometimes|nullable|integer'
        ];
    }
}
