<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SaveRequest extends FormRequest
{
    public function prepareForValidation()
    {
        $this->merge([
            'id' => (int)($this->id)
        ]);
    }
}
