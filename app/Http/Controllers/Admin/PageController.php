<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\PageContent;

class PageController extends Controller
{
    public function list(Request $request)
    {
        $items = Page::orderBy('id', 'DESC')->get();
        return view('test.admin.page.list', [
            'items' => $items
        ]);
    }

    public function form(Request $request)
    {
        $item = Page::findOrNew($request->id);
        return view('test.admin.page.form', [
            'item' => $item
        ]);
    }

    public function save(Request $request)
    {
        $item = Page::findOrNew($request->id);

        $item->id = $request->id;
        $item->slug = $request->slug;
        $item->title = $request->title;
        $item->publish = !!$request->publish;

        $item->contents()->delete();

        $content = new PageContent();
        $content->type_id = 1;
        $content->content = $request->content;

        $item->contents()->save($content);

        $item->save();

        return redirect('/admin/pages');
    }

    public function delete(Request $request)
    {
        Page::whereKey($request->id)->delete();

        return redirect('/admin/pages');
    }
}
