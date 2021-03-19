<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Rules\IsSlug;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class SlugInput extends Component
{
    public $itemId;
    public $table;
    public $slug;

    protected $listeners = ['titleModified' => 'suggest'];

    public function mount($slug, $table, $itemId = null)
    {
        $this->slug = $slug;
        $this->table = $table;
        $this->itemId = (int)$itemId;
    }

    protected function rules()
    {
        $rules = [
            'slug' => [
                'required',
                'string',
                'max:255',
                new IsSlug,
                Rule::unique($this->table)->ignore((int)$this->itemId)
            ]
        ];

        return $rules;
    }

    public function updated()
    {
        $this->validate();
    }

    public function suggest($title)
    {
        $original_slug = Str::slug($title);
        $suggestion = $original_slug;

        $validator = Validator::make(
            ['slug' => $suggestion],
            ['slug' => Rule::unique($this->table)->ignore((int)$this->itemId)]
        );
        $counter = 2;

        while ($validator->fails()) {
            $suggestion = $original_slug.'-'.$counter++;

            $validator = Validator::make(
                ['slug' => $suggestion],
                ['slug' => Rule::unique($this->table)->ignore((int)$this->itemId)]
            );
        }

        $this->slug = $suggestion;
    }

    public function render()
    {
        return view('livewire.slug-input');
    }
}
