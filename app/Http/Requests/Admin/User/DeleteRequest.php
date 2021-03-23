<?php

namespace App\Http\Requests\Admin\User;

use App\Http\Requests\Admin\DeleteRequest as Base;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class DeleteRequest extends Base
{
    public function rules()
    {
        $rules = [
            'id' => ['integer']
        ];

        $rules['id'][] = Rule::notIn([Auth::id()]);

        return $rules;
    }

    public function messages()
    {
        return [
            'id.not_in' => 'You can delete your profile only from the profile page.'
        ];
    }
}
