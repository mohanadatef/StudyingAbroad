<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserCreateRequest;
use App\Http\Requests\User\UserEditRequest;
use App\Http\Requests\User\UserResetPasswordCreateRequest;
use App\Role_user;
use App\Role;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function indexuser()
    {
        $users = User::with('role')->where('id','!=',1)->get();
        return view('admin.user.user_index', compact('users'));
    }

    public function createuserpost(UserCreateRequest $request)
    {
        $newuser = new User();
        $newuser->name = $request->input('name');
        $newuser->email = $request->input('email');
        $newuser->password = Hash::make($request->input('password'));
        $newuser->statues = 1;
        $newuser->save();
        $newuser->role()->sync((array)$request->input('role_id'));
        $newuser->save();
        return redirect('/admin/user')->with('message', 'Add user Is Done!');
    }

    public function createuserget()
    {
        $role = Role::select('display_name', 'id')->get();
        return view('admin.user.user_create',compact('role'));
    }

    public function edituserpost(UserEditRequest $request, $id)
    {
        $newuser = User::find($id);
        $newuser->name = $request->input('name');
        $newuser->email = $request->input('email');
        $newuser->role()->sync((array)$request->input('role_id'));
        $newuser->save();
        return redirect('/admin/user')->with('message', 'Edit User Is Done!');
    }

    public function edituserget($id)
    {
        $user = User::find($id);
        $role = Role::select('display_name', 'id')->get();
        $role_user = Role_user::all()->where('user_id','=',$id);
        return view('admin.user.user_edit', compact('user','role','role_user'));
    }

    public function resetpassworduserpost(UserResetPasswordCreateRequest $request, $id)
    {
        $newuser = User::find($id);
        $newuser->password = Hash::make($request->input('password'));
        $newuser->save();
        return redirect('admin/user')->with('message', 'reset password user Is Done!');
    }

    public function resetpassworduserget($id)
    {
        $user = User::find($id);
        return view('admin.user.user_reset_password', compact('user'));
    }

    public function editstatues($id)
    {
        $newuser = User::find($id);
        if ($newuser->statues == 1) {
            $newuser->statues = '0';
        } elseif ($newuser->statues == 0) {
            $newuser->statues = '1';
        }
        $newuser->save();
        return redirect('/admin/user')->with('message', 'Edit Statues Is Done!');
    }

    public function deleteuser($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('message', 'Delete User Is Done!');
    }
}

?>