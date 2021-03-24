<?php

namespace App\Http\Requests\Admin\User;

use App\Http\Requests\Admin\SaveRequest as Base;
use Illuminate\Validation\Rule;
use App\Models\User;

class SaveRequest extends Base
{
    public function rules()
    {
        $rules = [
            'name' => 'required|string|max:255',
            'role' => 'required|integer|min:1',
            'id' => 'sometimes|nullable|integer',
            'email' => ['required', 'string', 'email', 'max:255']
        ];


        $user = User::find($this->id);
        if ($user) {
            $rules['password'] = 'sometimes|nullable|confirmed|regex:/^[a-zA-Z0-9]{8,}$/';
        } else {
            $rules['password'] = 'required|confirmed|regex:/^[a-zA-Z0-9]{8,}$/';
        }

        $rules['email'][] = Rule::unique('users')->ignore($this->id);

        return $rules;
    }
}
