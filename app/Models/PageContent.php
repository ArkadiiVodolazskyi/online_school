<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Page;
use App\Models\PageContentType;

class PageContent extends Model
{
    use HasFactory;

    protected $table = 'page_contents';

    public $timestamps = false;

    public function type() {
        return $this->belongsTo(PageContentType::class, 'type_id');
    }

    public function __toString() {
        $component = new $this->type->class();
        return $component->render($this->content);
    }
}
