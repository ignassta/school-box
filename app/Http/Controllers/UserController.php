<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function indexAdmin()
    {
        $users = User::paginate(5);
        return view('admin/user', ['users' => $users]);
    }

    public function createAdmin()
    {
        return view('admin/create-user');
    }

    public function storeAdmin(Request $request)
    {
        $user = new User;
        $user->user_type = request('user_type');
        $user->name = request('name');
        $user->email = request('email');
        $user->phone = request('phone');
        $user->password = bcrypt(request('password'));
        $user->save();

        return redirect('admin/user');
    }

    public function editAdmin($id)
    {
        $user = User::find($id);
        return view('admin/update-user', ['user' => $user, 'id' => $id]);
    }

    public function updateAdmin(Request $request, $id)
    {
        $user = User::find($id);
        $user->user_type=$request->get('user_type');
        $user->name=$request->get('name');
        $user->email=$request->get('email');
        $user->phone=$request->get('phone');
        $user->save();
        return redirect('admin/user');
    }

    public function destroyAdmin($id)
    {
        User::find($id)->delete();
        return redirect('admin/user');
    }

    public function softDeletedUsersAdmin()
    {
        $users = User::onlyTrashed()->paginate(5);
        return view('admin/soft-deleted-user', ['users' => $users]);
    }

    public function restoreAdmin($id) {
        User::onlyTrashed()->where('id', $id)->restore();
        return redirect('admin/soft-deleted-user');
    }
}
