<?php

namespace App\Http\Requests\Admin\Page;

use App\Http\Requests\Admin\SaveRequest as Base;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;

class SaveRequest extends Base
{
    public function rules()
    {
        $rules = [
            'title' => 'required|string|max:255',
            'page_content' => 'sometimes|nullable|string',
            'publish' => 'required|boolean',
            'id' => ['sometimes', 'nullable', 'integer'],
            'slug' => ['required', 'string', 'max:255']
        ];

        $rules['id'] = Rule::unique('pages')->ignore($this->id);
        $rules['slug'][] = Rule::unique('pages')->ignore($this->id);

        return $rules;
    }

    public function prepareForValidation()
    {
        parent::prepareForValidation();
        $this->merge([
            'publish' => !!$this->publish,
            'page_content' => trim($this->page_content ?? '')
        ]);
    }
}
