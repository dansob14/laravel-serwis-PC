<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{

    public function edit(User $user)
    {
        return view('edit-user', ['user' => $user]);
    }

    public function update(User $user)
    {
        //validate
        request()->validate([
        'f_name' => ['required', 'min:3'],
        'l_name' => ['required'],
        'email' => ['required'],
        'password' => ['required'],
        ]);

        $user->update([
            'f_name' => request('f_name'),
            'l_name' => request('l_name'),
            'email' => request('email'),
            'password' => request('password'),
        ]);

        return redirect('/');
    }
    public function destroy($id)
    {

        $id = User::where('id',$id)->delete();

        return redirect('admin/admin-employee')->with('success', 'Data Deleted');
    }
}
