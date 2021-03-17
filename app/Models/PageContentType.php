<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Page;

class PageContentType extends Model
{
    use HasFactory;

    protected $table = 'page_content_types';

    public $timestamps = false;
}
