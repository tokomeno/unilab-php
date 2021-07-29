<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{

    public function loginView()
    {
        
        return view('auth.login');
    }



    public function login()
    {

        request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);


        $user = User::where('email', request('email'))->first();


        if (
            auth()->attempt([
                'email' => request('email'),
                'password' => request('password')
            ])
        ) {
            return  redirect('/')->with('msg', 'you have loggied in');
        }


        return redirect()->back()->withErrors(['email' => 'Wrong credentials']);
    }





    public function logout()
    {

        auth()->logout();

        return redirect('/')->with('msg', 'You have been logged out');
    }
}
