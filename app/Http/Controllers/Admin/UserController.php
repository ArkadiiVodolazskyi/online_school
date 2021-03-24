<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\FormRequest;
use App\Http\Requests\Admin\User\DeleteRequest;
use App\Http\Requests\Admin\User\SaveRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function list()
    {
        $items = User::whereKeyNot(Auth::id())->orderBy('id', 'DESC')->get();
        return view('test.admin.user.list', [
            'items' => $items
        ]);
    }

    public function form(FormRequest $request)
    {
        $item = User::findOrNew($request->id);
        return view('test.admin.user.form', [
            'item' => $item,
            'roles' => Role::all()
        ]);
    }

    public function save(SaveRequest $request)
    {
        $item = User::findOrNew($request->id);

        $item->name = $request->name;
        $item->email = $request->email;

        if ($request->password) {
            $item->password = Hash::make($request->password);
        }

        $item->save();

        $role = Role::find($request->role);

        $item->roles()->detach();

        $item->assignRole($role);

        return redirect('/admin/users')->with([
            'status' => 'success',
            'message' => 'changes saved successfully'
        ]);
    }

    public function delete(DeleteRequest $request)
    {

        dd($request);
        User::whereKey($request->id)->delete();

        return redirect('/admin/users')->with([
            'status' => 'success',
            'message' => 'deleted successfully'
        ]);
    }
}
