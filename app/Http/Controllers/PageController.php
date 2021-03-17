<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    public function __invoke(string $slug)
    {
        $page = Page::where('slug', $slug)->where('publish', true)->firstOrFail();
        return view('test.page', [
            'page' => $page
        ]);
    }
}
