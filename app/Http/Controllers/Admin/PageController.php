<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\FormRequest;
use App\Http\Requests\Admin\DeleteRequest;
use App\Http\Requests\Admin\Page\SaveRequest;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\PageContent;

class PageController extends Controller
{
    public function list()
    {
        $items = Page::orderBy('id', 'DESC')->get();
        return view('test.admin.page.list', [
            'items' => $items
        ]);
    }

    public function form(FormRequest $request)
    {
        $item = Page::findOrNew($request->id);
        return view('test.admin.page.form', [
            'item' => $item
        ]);
    }

    public function save(SaveRequest $request)
    {
        $item = Page::findOrNew($request->id);

        $item->slug = $request->slug;
        $item->title = $request->title;
        $item->publish = !!$request->publish;

        $item->save();

        $item->contents()->delete();

        $content = new PageContent();
        $content->type_id = 1;
        $content->content = $request->page_content;

        $item->contents()->save($content);

        return redirect('/admin/pages')->with([
            'status' => 'success',
            'message' => 'changes saved successfully'
        ]);
    }

    public function delete(DeleteRequest $request)
    {
        Page::whereKey($request->id)->delete();

        return redirect('/admin/pages')->with([
            'status' => 'success',
            'message' => 'deleted successfully'
        ]);
    }
}
