<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Mail\RegisterPosted;
use App\Models\User;

class RegisteredUserController extends Controller
{

    public function store()
    {
        //validate
        request()->validate([
            'email' => ['required', 'email'],
        ]);

        $user = User::create([
            'f_name' => 'zmien imie',
            'l_name' => 'zmien nazwisko',
            'email' => request('email'),
            'password' => 'password',
        ]);

        Mail::to(request('email'))->send(
            new RegisterPosted($user)
        );

        return redirect('/admin/add-employee')->with('konto pracownika utworzone');
    }
}
