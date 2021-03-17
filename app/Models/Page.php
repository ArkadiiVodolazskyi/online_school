<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PageContent;

class Page extends Model
{
    use HasFactory;

    protected $table = 'pages';

    public $timestamps = false;

    public function contents() {
        return $this->hasMany(PageContent::class)->orderBy('id', 'ASC');
    }
}
