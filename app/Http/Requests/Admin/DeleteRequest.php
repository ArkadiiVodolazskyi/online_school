<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class DeleteRequest extends FormRequest
{
    public function rules()
    {
        return [
            'id' => 'integer'
        ];
    }
}
